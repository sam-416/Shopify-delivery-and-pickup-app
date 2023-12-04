<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Option;
use App\Models\Location;
use App\Models\Slot;

class OrderManage extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        $shop = Auth::user();
        $shopApi = $shop->api()->graph('{
            draftOrder(id:"gid://shopify/DraftOrder/'.$id.'"){
            id
            customAttributes {
                key
                value
            }
            lineItems(first:20){
            edges{
                node{
                    title
                    variantTitle
                    quantity
                    image {
                        id,
                        url
                    }
                    variant{
                        id
                        metafields(namespace:"custom", first:20){
                          edges{
                                node{
                                    id
                                    key
                                    value
                                }
                            }
                        }
                    }
                    product{
                        id
                    }
                }
            }
            }
            customer{
            id,
            firstName,
            lastName,
            email
            }
        }
        }')['body']['container']['data']['draftOrder'];
        
        $line_items = $shopApi['lineItems']['edges'];
        $enable = false;
     
        foreach($line_items as $item){
            if($item['node']['variant']){
            
                $enable = $this->checkLocationOfItems($item['node']['variant']['id']);
                if(empty($enable)){
                    break;
                }
          }else{
            return redirect()->tokenRedirect('home');
            //abort(404, 'Custom message for 404 page');
            
          }
        }
        $customAttributes = $shopApi['customAttributes'];
        $customer = (isset($shopApi['customer']))?$shopApi['customer']:'';
        $data = $this->getOptions();
        //  echo "<pre>";
        //  print_r($shopApi);
        return view('order-manage.OrderManage', compact('id', 'shop','line_items','customer', 'data', 'customAttributes' , 'enable'));
    }

    public function getSlots(Request $request){
        $data = $request->all();
        $slots = [];
        $optionsData = Option::where('location_id', $data['location_id'])->where('delivery_type', $data['delivery_type'])->first();

        if($optionsData->delivery_slot_same_every_day_of_week == 'yes'){
              $slotData = Slot::where('location_id', $data['location_id'])->where('delivery_type', $data['delivery_type'])->where('is_available_every_day', 'yes')->get()->toArray();
              
              if(!empty($slotData)){
                foreach($slotData as $row){
                    $slots[] = [
                        "delivery_type" => $row['delivery_type'],
                        "from" => $row['from'],
                        "location_id" => $row['location_id'],
                        "delivery_location_id" => $optionsData->delivery_location_id,
                        "until" => $row['until'],
                        "week_day_id" => $row['week_day_id']
                    ];
                   
                }
                
                echo json_encode($slots);
              }else{
                echo json_encode([]);
              }

              
        }

        if($optionsData->delivery_slot_diffrent_each_days_of_the_week == 'yes'){
            if($data['week_day_id'] == 0){
                $dayId = 7;
            }else{
                $dayId = $data['week_day_id'];
            }

            $slotData = Slot::where('location_id', $data['location_id'])->where('delivery_type', $data['delivery_type'])->where('week_day_id', $dayId)->where('is_available_every_day', 'no')->get()->toArray();
           

            if(!empty($slotData)){
                foreach($slotData as $row){
                    $slots[] = [
                        "delivery_type" => $row['delivery_type'],
                        "from" => $row['from'],
                        "location_id" => $row['location_id'],
                        "delivery_location_id" => $optionsData->delivery_location_id,
                        "until" => $row['until'],
                        "week_day_id" => $row['week_day_id']
                    ];
                   
                }
                
                echo json_encode($slots);
              }else{
                echo json_encode([]);
              }
        }

        
    }

    public function getOptions(){
        $loc_data = [];
        // fetch locations 
        $locations = Location::all();
        foreach($locations as $location){
          $loc_data[] = [
              "location_id" => $location->location_id,
              "location_name" => $location->location_name
          ];
        }
        return [
            'locations' => $loc_data
        ];
    }

    public function checkLocationOfItems($variantId){
        $shop = Auth::user();
        $shopApi = $shop->api()->graph('{
            productVariant(id: "'.$variantId.'" ){
            metafields(namespace:"custom", first:10){
              edges{
                node{
                  key
                  value
                }
                
              }
            }
          }
        }')['body']['container']['data']['productVariant'];
        
        $ch = false;
        $zrh = false;
        $normal = false;
        $express = false;
        if($shopApi['metafields']['edges']){
            foreach($shopApi['metafields']['edges'] as $metafield){
            // echo "<pre>";
                //print_r($metafield);
                // check if both location are active
                if($metafield['node']['key'] == 'location_ch' && $metafield['node']['value'] == 'true'){
                    $ch = true;
                }else if($metafield['node']['key'] == 'location_zhr' && $metafield['node']['value'] == 'true'){
                    $zrh = true;
                }else if($metafield['node']['key'] == 'normal' && $metafield['node']['value'] == 'true'){
                    $normal = true;
                }else if($metafield['node']['key'] == 'express' && $metafield['node']['value'] == 'true'){
                    $express = true;
                }
                
            }
            
            
            // check
            if( ($ch && $normal) || ($ch && $express) ){
                if($normal){
                    return [2457895, 'normal'];
                }else{
                    return [2457895, 'express'];
                }
                
            }else if( ($zrh && $normal) || ($zrh && $express) ){
                if($normal){
                    return [241789, 'normal'];
                }else{
                    return [241789, 'express'];
                }
            }
        }
    
        return [1,''];
    
    }

  public function updateAdditionalData(Request $request){
       $additionalDetail = $request->all();
       $shop = Auth::user();
       $order['order']['note_attributes'] = [
           [
            "name"=>"Checkout-Method",
            "value" => 'delivery'
           ],
           [
            "name"=>"Delivery-Location-Id",
            "value" => $additionalDetail['delivery_location_id']
           ],
           [
            "name"=>"Delivery-Date",
            "value" => date('Y/m/d', strtotime($additionalDetail['delivery_date']))
           ],
           [
            "name"=>"Delivery-Time",
            "value" => $additionalDetail['delivery_time']
           ]
           
       ];
       $request = $shop->api()->rest('PUT', '/admin/api/draft_orders/'.$additionalDetail['id'].'.json', [
        'draft_order' => $order['order'],
    ]);

       return $request;
  }


}
