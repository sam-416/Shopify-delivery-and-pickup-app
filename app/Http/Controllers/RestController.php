<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Location;
use App\Models\DeliveryAvailabilitie;
use App\Models\Slot;
use App\Models\PreTime;
class RestController extends Controller
{
   
    public function index(Request $request){
        $data = $request->all();
        $is_postalcode = false;
        $deliveryData = [];
        $blackout_dates = [];
        $blackout_days = [];
        $slots = [];
        $prepTime = [];
        $weekDays = [
            "monday" => 1,
            "tuesday" => 2,
            "wednesday" =>3,
            "thursday" =>4,
            "friday" => 5,
            "saturday" =>6,
            "sunday" => 7
        ];

        $locations = [
            "CH" => 2457895,
            "ZRH" => 241789
         ];
        $dleiveryDays = [];
        //$locationData = Location::where('location_name', $data['location_name'])->first();
        if($data['postal_code'] == '' || strlen($data['postal_code']) < 2 || preg_match('/\D/', $data['postal_code'])){
            echo json_encode(["code"=>404, "message"=> "Postleitzahl nicht gefunden, bitte im Format 8001 eingeben"]);
            return;
        }

        $location_id = '';
        $delivery_type = '';

        $postal_code = trim(strtolower(substr($data['postal_code'], 0, 2)));
        $pattern = '/^' . preg_quote($postal_code, '/') . '/i';

        $postal_code3 = trim(strtolower(substr($data['postal_code'], 0, 3)));
        $pattern3 = '/^' . preg_quote($postal_code3, '/') . '/i';

        $postal_code4 = trim(strtolower(substr($data['postal_code'], 0, 4)));
        $pattern4 = '/^' . preg_quote($postal_code4, '/') . '/i';

        if($data['location_name'] == 'both'){
           $zrhpostCodes = Location::where('location_name', 'ZRH')->get();

           foreach($zrhpostCodes as $row){
                $postalCodes = explode(',', $row->postal_code);
                foreach($postalCodes as $postalCode){
                    if(substr($data['postal_code'], 0, strlen($postalCode)) === $postalCode){
                        $location_id = $row->location_id;
                        $location_name = $row->location_name;
                        $is_postalcode = true;
                        break;
                    }
                }
           }

           if(!$is_postalcode){
                $chpostCodes = Location::where('location_name', 'CH')->get();
                foreach($chpostCodes as $row){
                    $postalCodes = explode(',', $row->postal_code);
                    foreach($postalCodes as $postalCode){
                        if(substr($data['postal_code'], 0, strlen($postalCode)) === $postalCode){
                            $location_id = $row->location_id;
                            $location_name = $row->location_name;
                            $is_postalcode = true;
                            break;
                        }
                    }
                }
           }

        }elseif($data['location_name'] == 'ZRH'){
           $zrhpostCodes = Location::where('location_name', 'ZRH')->get();
           foreach($zrhpostCodes as $row){
                $postalCodes = explode(',', $row->postal_code);
                foreach($postalCodes as $postalCode){
                    if(substr($data['postal_code'], 0, strlen($postalCode)) === $postalCode){
                        $location_id = $row->location_id;
                        $location_name = $row->location_name;
                        $is_postalcode = true;
                        break;
                    }
                }
           }
        }elseif($data['location_name'] == 'CH'){
            $chpostCodes = Location::where('location_name', 'CH')->get();
            foreach($chpostCodes as $row){
                $postalCodes = explode(',', $row->postal_code);
                foreach($postalCodes as $postalCode){
                    if(substr($data['postal_code'], 0, strlen($postalCode)) === $postalCode){
                        $location_id = $row->location_id;
                        $location_name = $row->location_name;
                        $is_postalcode = true;
                        break;
                    }
                }
            }
        }

        // if($data['location_name'] == 'both' && $data['delivery_type'] == 'both'){
        //     $optionDataAll = Option::where('delivery_type', 'normal')->get();
        // }elseif($data['location_name'] == 'both' && $data['delivery_type'] == 'normal'){
        //     $optionDataAll =  Option::where('delivery_type', $data['delivery_type'])->get();
        // }elseif($data['location_name'] == 'both' && $data['delivery_type'] == 'express'){
        //     $optionDataAll =  Option::where('delivery_type', $data['delivery_type'])->get();
        // }elseif($data['location_name'] == 'ZRH' && $data['delivery_type'] == 'normal'){
        //     $optionDataAll = Option::where('location_id', 241789)->where('delivery_type', 'normal')->get();
        // }elseif($data['location_name'] == 'ZRH' && $data['delivery_type'] == 'express'){
        //     $optionDataAll = Option::where('location_id', 241789)->where('delivery_type', 'express')->get();
        // }elseif($data['location_name'] == 'CH' && $data['delivery_type'] == 'normal'){
        //     $optionDataAll = Option::where('location_id', 2457895)->where('delivery_type', 'normal')->get();
        // }elseif($data['location_name'] == 'CH' && $data['delivery_type'] == 'express'){
        //     $optionDataAll = Option::where('location_id', 2457895)->where('delivery_type', 'express')->get();
        // }
        

        if(!$is_postalcode){
            $postCodes = Location::where('location_name', 'CH')->get();
            foreach($postCodes as $row){   
                $postalCodes = explode(',', $row->postal_code);
                foreach($postalCodes as $postalCode){
                    if(substr($data['postal_code'], 0, strlen($postalCode)) === $postalCode){
                        $location_id = $row->location_id;
                        $location_name = $row->location_name;
                        $is_postalcode = true;
                        break;
                    }
                }
            }

            if($is_postalcode){
                echo json_encode(["code"=>404, "message"=> "Ein oder mehrere Produkte können nicht an diesen Ort geliefert werden"]);
                return;
            }else{
                echo json_encode(["code"=>404, "message"=> "Postleitzahl nicht gefunden, bitte im Format 8001 eingeben"]);
                return;
            }
        }


        if($is_postalcode){
            if($data['location_name'] == 'both' && $data['delivery_type'] == 'both'){
                $optionData = Option::where('location_id', $location_id)->where('delivery_type', 'normal')->first();
                $delivery_type = 'express';
            }elseif($data['delivery_type'] == 'normal'){
                $optionData = Option::where('location_id', $location_id)->where('delivery_type', 'normal')->first();
                $delivery_type = 'normal';
            }elseif($data['delivery_type'] == 'express'){
                $optionData = Option::where('location_id', $location_id)->where('delivery_type', 'express')->first();
                $delivery_type = 'express';
            }elseif($data['delivery_type'] == 'both'){
                $optionData = Option::where('location_id', $location_id)->where('delivery_type', 'normal')->first();
                $delivery_type = 'express';
            }
            

            // check if every day of week available
            if($optionData->delivery_every_day_of_week == 'yes'){
                $balckDays = json_decode($optionData->blackout_dates, TRUE);
                $blackout_dates = $balckDays['blackout'];
                
                // check if delivery_slot_same_every_day_of_week is enabled
                if($optionData->delivery_slot_same_every_day_of_week == 'yes'){
                    $slots = $this->getEveryDaySlots($location_id, $delivery_type);
                }

                if($optionData->delivery_slot_diffrent_each_days_of_the_week == 'yes'){
                    $slots = $this->getDiffrentDaySlot($location_id, $delivery_type);
                } 
                
            }

            //get available days for specific days
            if($optionData->delivery_specific_days_of_the_week == 'yes'){     
                foreach($weekDays as $day=>$id){
                    $availDays = DeliveryAvailabilitie::where('location_id', $location_id)->where('delivery_type', $delivery_type)->where('week_day_id', $id)->get();
                    if($availDays->isEmpty()){
                        $blackout_days[] = $id;
                    }
                }
                

                $balckDays = json_decode($optionData->blackout_dates, TRUE);
                foreach($balckDays['blackout'] as $dtes){
                    array_push($blackout_dates, $dtes);
                }

                // check if delivery_slot_same_every_day_of_week is enabled
                if($optionData->delivery_slot_same_every_day_of_week == 'yes'){
                
                $slots = $this->getEveryDaySlots($location_id, $delivery_type);
                }

                if($optionData->delivery_slot_diffrent_each_days_of_the_week == 'yes'){
                    $slots = $this->getDiffrentDaySlot($location_id, $delivery_type);
                } 
                
            }

            //prep time
            if($optionData->delivery_preparation_time == 'yes'){
                $prepTime = $this->prepTimeSlots($location_id, $delivery_type);
            }
        
            

            // check if postal code exist
            
                $deliveryData = [
                    "location_id" => $location_id,
                    "delivery_type" => $delivery_type,
                    "delivery" => [
                        "delivery_location_id" => $optionData->delivery_location_id,
                        "delivery_slot_id" => $optionData->delivery_slot_id,
                        "blackout_dates" => $blackout_dates,
                        "blackout_days" => $blackout_days,
                        "tags" => $optionData->tags,
                        "delivery_every_day_of_week" => $optionData->delivery_every_day_of_week,
                        "slots" => $slots,
                        "prep_time" => $prepTime
                    ]
                ]; 
                $is_postalcode = true;
                echo json_encode($deliveryData);
        }
        
        if(!$is_postalcode){
            echo json_encode(["code"=>404, "message"=> "Postleitzahl nicht gefunden, bitte im Format 8001 eingeben"]);
        }
        
    }

   

    public function getEveryDaySlots($location_id, $delivery_type){
        // specific days
        $mon  = [];
        $tue  = [];
        $wed  = [];
        $thus = [];
        $fri  = [];
        $sat  = [];
        $sun  = [];
        $evryDaySlots = Slot::where('location_id', $location_id)->where('delivery_type', $delivery_type)->where('is_available_every_day', 'yes')->get()->toArray();
        foreach($evryDaySlots as $evryDaySlot){
            $mon[] = [
                "from" => $evryDaySlot['from'],
                "until" => $evryDaySlot['until'],
            ];
            $tue[] = [
                "from" => $evryDaySlot['from'],
                "until" => $evryDaySlot['until'],
            ];
            $wed[] = [
                "from" => $evryDaySlot['from'],
                "until" => $evryDaySlot['until'],
            ];
            $thus[] = [
                "from" => $evryDaySlot['from'],
                "until" => $evryDaySlot['until'],
            ];
            $fri[] = [
                "from" => $evryDaySlot['from'],
                "until" => $evryDaySlot['until'],
            ];
            $sat[] = [
                "from" => $evryDaySlot['from'],
                "until" => $evryDaySlot['until'],
            ];
            $sun[] = [
                "from" => $evryDaySlot['from'],
                "until" => $evryDaySlot['until'],
            ];
    
        }

        $slots = [
          "monday" => $mon,
          "tuesday" => $tue,
          "wednesday" => $wed,
          "thursday" => $thus,
          "friday" => $fri,
          "saturday" => $sat,
          "sunday" => $sun
        ];

         return $slots;
    
    }

    public function getDiffrentDaySlot($location_id, $delivery_type){
        $weekDays = [
            "monday" => 1,
            "tuesday" => 2,
            "wednesday" =>3,
            "thursday" =>4,
            "friday" => 5,
            "saturday" =>6,
            "sunday" => 7
        ];
        $mon  = [];
        $tue  = [];
        $wed  = [];
        $thus = [];
        $fri  = [];
        $sat  = [];
        $sun  = [];
       
        foreach($weekDays as $weekDay){
            $evryDaySlots = Slot::where('location_id', $location_id)->where('delivery_type', $delivery_type)->where('is_available_every_day', 'no')->where('week_day_id', $weekDay)->get()->toArray();
            
            if($evryDaySlots){
                foreach($evryDaySlots as $evryDaySlot){
                    if($evryDaySlot['week_day_id'] == 1){
                        $mon[] = [
                            "from" => $evryDaySlot['from'],
                            "until" => $evryDaySlot['until'],
                        ];
                    }else if($evryDaySlot['week_day_id'] == 2){
                        $tue[] = [
                            "from" => $evryDaySlot['from'],
                            "until" => $evryDaySlot['until'],
                        ];
                    }else if($evryDaySlot['week_day_id'] == 3){
                        $wed[] = [
                            "from" => $evryDaySlot['from'],
                            "until" => $evryDaySlot['until'],
                        ];
                    }else if($evryDaySlot['week_day_id'] == 4){
                        $thus[] = [
                            "from" => $evryDaySlot['from'],
                            "until" => $evryDaySlot['until'],
                        ];
                    }else if($evryDaySlot['week_day_id'] == 5){
                        $fri[] = [
                            "from" => $evryDaySlot['from'],
                            "until" => $evryDaySlot['until'],
                        ];
                    }else if($evryDaySlot['week_day_id'] == 6){
                        $sat[] = [
                            "from" => $evryDaySlot['from'],
                            "until" => $evryDaySlot['until'],
                        ];
                    }else if($evryDaySlot['week_day_id'] == 7){
                        $sun[] = [
                            "from" => $evryDaySlot['from'],
                            "until" => $evryDaySlot['until'],
                        ];
                    }
                }
                
            }


        }

        $slots = [
          "monday" => $mon,
          "tuesday" => $tue,
          "wednesday" => $wed,
          "thursday" => $thus,
          "friday" => $fri,
          "saturday" => $sat,
          "sunday" => $sun
        ];

        return $slots;
    }

    public function prepTimeSlots($location_id, $delivery_type){
        $weekDays = [
            "monday" => 1,
            "tuesday" => 2,
            "wednesday" =>3,
            "thursday" =>4,
            "friday" => 5,
            "saturday" =>6,
            "sunday" => 7
        ];
        // specific days
        $mon  = [];
        $tue  = [];
        $wed  = [];
        $thus = [];
        $fri  = [];
        $sat  = [];
        $sun  = [];
        foreach($weekDays as $weekDay){
           $data = PreTime::where('location_id', $location_id)->where('delivery_type', $delivery_type)->where('week_day_id', $weekDay)->first();
            if($data){
                
                    if($data->week_day_id == 1){
                        $mon[] = [
                            "week_day_id" => $data->week_day_id,
                            "preparation_time" => $data->preparation_time,
                            "preparation_time_type" => $data->preparation_time_type,
                            "cutoff_enable" => $data->cutoff_enable,
                            "cuttoff_time" => $data->cuttoff_time,
                            "cuttoff_preparation_day" => $data->cuttoff_preparation_day
                        ];
                    }else if($data->week_day_id == 2){
                        $tue[] = [
                            "week_day_id" => $data->week_day_id,
                            "preparation_time" => $data->preparation_time,
                            "preparation_time_type" => $data->preparation_time_type,
                            "cutoff_enable" => $data->cutoff_enable,
                            "cuttoff_time" => $data->cuttoff_time,
                            "cuttoff_preparation_day" => $data->cuttoff_preparation_day
                        ];
                    }else if($data->week_day_id == 3){
                        $wed[] = [
                            "week_day_id" => $data->week_day_id,
                            "preparation_time" => $data->preparation_time,
                            "preparation_time_type" => $data->preparation_time_type,
                            "cutoff_enable" => $data->cutoff_enable,
                            "cuttoff_time" => $data->cuttoff_time,
                            "cuttoff_preparation_day" => $data->cuttoff_preparation_day
                        ];
                    }else if($data->week_day_id == 4){
                        $thus[] = [
                            "week_day_id" => $data->week_day_id,
                            "preparation_time" => $data->preparation_time,
                            "preparation_time_type" => $data->preparation_time_type,
                            "cutoff_enable" => $data->cutoff_enable,
                            "cuttoff_time" => $data->cuttoff_time,
                            "cuttoff_preparation_day" => $data->cuttoff_preparation_day
                        ];
                    }else if($data->week_day_id == 5){
                        $fri[] = [
                            "week_day_id" => $data->week_day_id,
                            "preparation_time" => $data->preparation_time,
                            "preparation_time_type" => $data->preparation_time_type,
                            "cutoff_enable" => $data->cutoff_enable,
                            "cuttoff_time" => $data->cuttoff_time,
                            "cuttoff_preparation_day" => $data->cuttoff_preparation_day
                        ];
                    }else if($data->week_day_id == 6){
                        $sat[] = [
                            "week_day_id" => $data->week_day_id,
                            "preparation_time" => $data->preparation_time,
                            "preparation_time_type" => $data->preparation_time_type,
                            "cutoff_enable" => $data->cutoff_enable,
                            "cuttoff_time" => $data->cuttoff_time,
                            "cuttoff_preparation_day" => $data->cuttoff_preparation_day
                        ];
                    }else if($data->week_day_id == 7){
                        $sun[] = [
                            "week_day_id" => $data->week_day_id,
                            "preparation_time" => $data->preparation_time,
                            "preparation_time_type" => $data->preparation_time_type,
                            "cutoff_enable" => $data->cutoff_enable,
                            "cuttoff_time" => $data->cuttoff_time,
                            "cuttoff_preparation_day" => $data->cuttoff_preparation_day
                        ];
                    }
                
                
            }
        }
         
        

        $prepSlots = [
          "monday" => $mon,
          "tuesday" => $tue,
          "wednesday" => $wed,
          "thursday" => $thus,
          "friday" => $fri,
          "saturday" => $sat,
          "sunday" => $sun
        ];

        return $prepSlots;
    }
}
