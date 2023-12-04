<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Option;
use App\Models\DeliveryAvailabilitie;
use App\Models\Slot;
use App\Models\TimeSlot;
use App\Models\PreTime;
use App\Models\Location;
use Log;

class OptionController extends Controller
{
    public function index($id)
    {
        $options = Option::where('location_id', $id)->where('delivery_type', 'normal')->first();
        $ExOptions = Option::where('location_id', $id)->where('delivery_type', 'express')->first();
        $deliveryAvial = DeliveryAvailabilitie::where('location_id', $id)->where('delivery_type', 'normal')->get();
        $ExpDeliveryAvl = DeliveryAvailabilitie::where('location_id', $id)->where('delivery_type', 'express')->get();
        $slots = Slot::where('location_id', $id)->where('delivery_type', 'normal')->where('is_available_every_day', 'yes')->get();
        $Exslots = Slot::where('location_id', $id)->where('delivery_type', 'express')->where('is_available_every_day', 'yes')->get();
        $postCodes = Location::where('location_id', $id)->first();
        // echo "<pre>";
        // print_r($postCodes->postal_code);
        // die();
        $prepTime = [
            "monday" => PreTime::where('location_id', $id)->where('delivery_type', 'normal')->where('week_day_id', 1)->get(),
            "tuesday" => PreTime::where('location_id', $id)->where('delivery_type', 'normal')->where('week_day_id', 2)->get(),
            "wednesday" => PreTime::where('location_id', $id)->where('delivery_type', 'normal')->where('week_day_id', 3)->get(),
            "thursday" => PreTime::where('location_id', $id)->where('delivery_type', 'normal')->where('week_day_id', 4)->get(),
            "friday" => PreTime::where('location_id', $id)->where('delivery_type', 'normal')->where('week_day_id', 5)->get(),
            "saturday" => PreTime::where('location_id', $id)->where('delivery_type', 'normal')->where('week_day_id', 6)->get(),
            "sunday" => PreTime::where('location_id', $id)->where('delivery_type', 'normal')->where('week_day_id', 7)->get(),
        ];
         
        $ExPrepTime = [
            "monday" => PreTime::where('location_id', $id)->where('delivery_type', 'express')->where('week_day_id', 1)->get(),
            "tuesday" => PreTime::where('location_id', $id)->where('delivery_type', 'express')->where('week_day_id', 2)->get(),
            "wednesday" => PreTime::where('location_id', $id)->where('delivery_type', 'express')->where('week_day_id', 3)->get(),
            "thursday" => PreTime::where('location_id', $id)->where('delivery_type', 'express')->where('week_day_id', 4)->get(),
            "friday" => PreTime::where('location_id', $id)->where('delivery_type', 'express')->where('week_day_id', 5)->get(),
            "saturday" => PreTime::where('location_id', $id)->where('delivery_type', 'express')->where('week_day_id', 6)->get(),
            "sunday" => PreTime::where('location_id', $id)->where('delivery_type', 'express')->where('week_day_id', 7)->get(),
        ];

        $specificDaySlots = [
            "monday" =>  Slot::where('location_id', $id)->where('delivery_type', 'normal')->where('week_day_id', 1)->where('is_available_every_day', 'no')->get(),
            "tuesday" => Slot::where('location_id', $id)->where('delivery_type', 'normal')->where('week_day_id', 2)->where('is_available_every_day', 'no')->get(),
            "wednesday" => Slot::where('location_id', $id)->where('delivery_type', 'normal')->where('week_day_id', 3)->where('is_available_every_day', 'no')->get(),
            "thursday" => Slot::where('location_id', $id)->where('delivery_type', 'normal')->where('week_day_id', 4)->where('is_available_every_day', 'no')->get(),
            "friday" => Slot::where('location_id', $id)->where('delivery_type', 'normal')->where('week_day_id', 5)->where('is_available_every_day', 'no')->get(),
            "saturday" => Slot::where('location_id', $id)->where('delivery_type', 'normal')->where('week_day_id', 6)->where('is_available_every_day', 'no')->get(),
            "sunday" => Slot::where('location_id', $id)->where('delivery_type', 'normal')->where('week_day_id', 7)->where('is_available_every_day', 'no')->get(),
        ];

        $ExspecificDaySlots = [
            "monday" =>  Slot::where('location_id', $id)->where('delivery_type', 'express')->where('week_day_id', 1)->where('is_available_every_day', 'no')->get(),
            "tuesday" => Slot::where('location_id', $id)->where('delivery_type', 'express')->where('week_day_id', 2)->where('is_available_every_day', 'no')->get(),
            "wednesday" => Slot::where('location_id', $id)->where('delivery_type', 'express')->where('week_day_id', 3)->where('is_available_every_day', 'no')->get(),
            "thursday" => Slot::where('location_id', $id)->where('delivery_type', 'express')->where('week_day_id', 4)->where('is_available_every_day', 'no')->get(),
            "friday" => Slot::where('location_id', $id)->where('delivery_type', 'express')->where('week_day_id', 5)->where('is_available_every_day', 'no')->get(),
            "saturday" => Slot::where('location_id', $id)->where('delivery_type', 'express')->where('week_day_id', 6)->where('is_available_every_day', 'no')->get(),
            "sunday" => Slot::where('location_id', $id)->where('delivery_type', 'express')->where('week_day_id', 7)->where('is_available_every_day', 'no')->get(),
        ];
       
        $timeSlots = TimeSlot::all();
        return view('delivery_types.delivery-type', compact('options', 'postCodes',  'ExOptions', 'deliveryAvial', 'ExpDeliveryAvl', 'slots', 'Exslots', 'timeSlots', 'specificDaySlots', 'ExspecificDaySlots', 'prepTime', 'ExPrepTime'));
        
    }

    public function getOptionById(Request $request){
        $options = Option::where('location_id', $request->input('location_id'))->where('delivery_type', $request->input('delivery_type'))->first();
        echo json_encode($options);
    }


    public function update(Request $request){

        $weekDay = [
            "monday" => 1,
            "tuesday" => 2,
            "wednesday" => 3,
            "thursday" => 4,
            "friday" => 5,
            "saturday" => 6,
            "sunday" => 7,
        ];
        
        // save delivery availability data
        
        if($request->input('delivery.delivery_availability_every_day_of_week_enabled') == true){
            $records = DeliveryAvailabilitie::where('location_id', $request->input('location_id'))->where('delivery_type', $request->input('delivery_type'))->get();
            // check if no records exist
            if($records->isEmpty())
            {
                $deliveryAvail = new DeliveryAvailabilitie();
                $deliveryAvail->location_id = $request->input('location_id');
                $deliveryAvail->delivery_type = $request->input('delivery_type');
                $deliveryAvail->is_all_day = 'true';
                $deliveryAvail->week_day_id = null;
                $deliveryAvail->save();
                
            }else{
               
                foreach($records as $record){
                    $record->delete();
                }

                $deliveryAvail = new DeliveryAvailabilitie();
                $deliveryAvail->location_id = $request->input('location_id');
                $deliveryAvail->delivery_type = $request->input('delivery_type');
                $deliveryAvail->is_all_day = 'true';
                $deliveryAvail->week_day_id = null;
                $deliveryAvail->save();
            }

        }else{

            $records = DeliveryAvailabilitie::where('location_id', $request->input('location_id'))->where('delivery_type', $request->input('delivery_type'))->get();
            // check if no records exist
            if($records->isEmpty())
            {

                $specificDays = $request->input('delivery.delivery_availability_specific_day_of_week');
                foreach($specificDays as $day){
                    $deliveryAvail = new DeliveryAvailabilitie();
                    $deliveryAvail->location_id = $request->input('location_id');
                    $deliveryAvail->delivery_type = $request->input('delivery_type');
                    if($request->input('delivery.delivery_availability_every_day_of_week_enabled') == 0){
                        $deliveryAvail->is_all_day = 'false';
                    }
                    
                    $deliveryAvail->week_day_id = $weekDay[$day];
                    $deliveryAvail->save();
                }

            }else{
               
                foreach($records as $record){
                    $record->delete();
                }

                $specificDays = $request->input('delivery.delivery_availability_specific_day_of_week');
                foreach($specificDays as $day){
                    $deliveryAvail = new DeliveryAvailabilitie();
                    $deliveryAvail->location_id = $request->input('location_id');
                    $deliveryAvail->delivery_type = $request->input('delivery_type');
                    if($request->input('delivery.delivery_availability_every_day_of_week_enabled') == 0){
                        $deliveryAvail->is_all_day = 'false';
                    }
                    
                    $deliveryAvail->week_day_id = $weekDay[$day];
                    $deliveryAvail->save();
                }

            }
            
        }

        // update options value
        
        // delivery every day
        if($request->input('delivery.delivery_availability_every_day_of_week_enabled') == 0){
            $delivery_every_day_of_week = 'no';
        }else{
            $delivery_every_day_of_week = 'yes';
        }
       // delivery specific day
        if($request->input('delivery.delivery_availability_specific_day_of_week_enabled') == 0){
            $delivery_specific_days_of_the_week = 'no';
        }else{
            $delivery_specific_days_of_the_week = 'yes';
        }
        // delivery slot every day of week
        if($request->input('delivery.delivery_slot_every_day_of_week_enabled') == 0){
            $delivery_slot_same_every_day_of_week = 'no';
        }else{
            $delivery_slot_same_every_day_of_week = 'yes';
        }
        // delivery slot specific day of week
        if($request->input('delivery.delivery_slot_diffrent_each_day_of_week_enabled') == 0){
            $delivery_slot_diffrent_each_days_of_the_week = 'no';
        }else{
            $delivery_slot_diffrent_each_days_of_the_week = 'yes';
        }


        // delivery preparation time
        if($request->input('delivery.delivery_preparation_enabled') == 0){
            $delivery_preparation_enabled = 'no';
        }else{
            $delivery_preparation_enabled = 'yes';
        }

        Option::where('location_id', $request->input('location_id'))->where('delivery_type', $request->input('delivery_type'))->update([
            "delivery_every_day_of_week" => $delivery_every_day_of_week,
            "delivery_specific_days_of_the_week" => $delivery_specific_days_of_the_week,
            "delivery_slot_same_every_day_of_week" => $delivery_slot_same_every_day_of_week,
            "delivery_slot_diffrent_each_days_of_the_week" => $delivery_slot_diffrent_each_days_of_the_week,
            "delivery_preparation_time" => $delivery_preparation_enabled,
            "tags" => $request->input('delivery.tags'),
            "postal_codes" => implode(',', $request->input('delivery.postalcodes')),
            "blackout_dates" => $request->input('delivery.blackout_dates'),
            "delivery_location_id" => $request->input('delivery.delivery_location_id'),
            "delivery_slot_id" => $request->input('delivery.delivery_slot_id')
        ]);


        // insert slot data

        // check if every day slot enabled
        if($request->input('delivery.delivery_slot_every_day_of_week_enabled'))
        {

           $slots = Slot::where('location_id', $request->input('location_id'))->where('delivery_type', $request->input('delivery_type'))->where('is_available_every_day', 'yes')->get();
           if(!$slots->isEmpty()){
                foreach($slots as $slot){
                    $slot->delete();
                }
           }

           $everyDaySlots = $request->input('delivery.delivery_slot_every_day_of_week');
           
           if(count($everyDaySlots) > 0){
               foreach($everyDaySlots as $everyDaySlot){
                  $slotInsert = new Slot();
                  $slotInsert->location_id = $request->input('location_id');
                  $slotInsert->delivery_type = $request->input('delivery_type');
                  $slotInsert->week_day_id = null;
                  $slotInsert->from = $everyDaySlot['from'];
                  $slotInsert->until = $everyDaySlot['until'];
                  $slotInsert->is_available_every_day = ($everyDaySlot['is_available_every_day'] == 0) ? 'no' : 'yes';
                  $slotInsert->updated_at = now();
                  $slotInsert->save();
               }
           }

        }
        
        // check if diffrent day slot enabled
        if($request->input('delivery.delivery_slot_diffrent_each_day_of_week_enabled'))
        {
           $diffrentDaySlots = $request->input('delivery.delivery_slot_diffrent_each_day_of_week');

           foreach($weekDay as $day){
               $specificDaySlots = Slot::where('location_id', $request->input('location_id'))->where('delivery_type', $request->input('delivery_type'))->where('week_day_id', $day)->where('is_available_every_day', 'no')->get();

               if(!$specificDaySlots->isEmpty()){
                  foreach($specificDaySlots as $specificDaySlot){
                      $specificDaySlot->delete();
                  }
               }
           }      
           
           if(count($diffrentDaySlots) > 0){
                foreach($diffrentDaySlots as $diffrentDaySlot)
                {
                  $slotInsert = new Slot();
                  $slotInsert->location_id = $request->input('location_id');
                  $slotInsert->delivery_type = $request->input('delivery_type');
                  $slotInsert->week_day_id = $diffrentDaySlot['id'];
                  $slotInsert->from = $diffrentDaySlot['from'];
                  $slotInsert->until = $diffrentDaySlot['until'];
                  $slotInsert->is_available_every_day = ($diffrentDaySlot['is_available_every_day'] == 0) ? 'no' : 'yes';
                  $slotInsert->updated_at = now();
                  $slotInsert->save();
                }
           }
           

        }


        // insert prep time slot
        // check if pretime enabled
        if($request->input('delivery.delivery_preparation_enabled'))
        {
             // get inserted prep time slots and delete
             foreach($weekDay as $day){
                 $preTimeSlots = PreTime::where('location_id', $request->input('location_id'))->where('delivery_type', $request->input('delivery_type'))->where('week_day_id', $day)->get();
                 if(!$preTimeSlots->isEmpty()){
                    foreach($preTimeSlots as $preTimeSlot){
                        $preTimeSlot->delete();
                    }
                 }
             }

             // insert new preptime slots
             $preTimeSlotInsert = $request->input('delivery.delivery_preparation_time');
             if(count($preTimeSlotInsert['preparation_time']) > 0 ){
                foreach($preTimeSlotInsert['preparation_time'] as $prepTime){
                    $preTimeInsert = new PreTime();
                    if($prepTime['cutoff_enable']){
                        $preTimeInsert->location_id = $request->input('location_id');;
                        $preTimeInsert->delivery_type = $request->input('delivery_type');;
                        $preTimeInsert->week_day_id = $prepTime['id'];
                        $preTimeInsert->preparation_time = $prepTime['time'];
                        $preTimeInsert->preparation_time_type = $prepTime['type'];
                        $preTimeInsert->cutoff_enable = 'true';
                        foreach($preTimeSlotInsert['cutoff_time'] as $cutofftime){
                            if($cutofftime['id'] == $prepTime['id']){
                                $preTimeInsert->cuttoff_time = $cutofftime['time'];
                                $preTimeInsert->cuttoff_preparation_day = $cutofftime['day'];
                            }
                        }
                        
                        
                        $preTimeInsert->created_at = now();
                        $preTimeInsert->updated_at = now();
                        $preTimeInsert->save();
                    }else{
                        $preTimeInsert->location_id = $request->input('location_id');;
                        $preTimeInsert->delivery_type = $request->input('delivery_type');;
                        $preTimeInsert->week_day_id = $prepTime['id'];
                        $preTimeInsert->preparation_time = $prepTime['time'];
                        $preTimeInsert->preparation_time_type = $prepTime['type'];
                        $preTimeInsert->cutoff_enable = 'false';
                        $preTimeInsert->cuttoff_time = '00:00:00';
                        $preTimeInsert->cuttoff_preparation_day = 0;
                        $preTimeInsert->created_at = now();
                        $preTimeInsert->updated_at = now();
                        $preTimeInsert->save();
                    }
                }
             }
             
        }

        
    }
}
