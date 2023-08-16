<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function getAvailableTimeSlots(){
      $data=[
        'id'=>'1',
        'table_size'=>'4',
        'start_up'=>'4:00',
        'end_up'=>'5:00'

      ];
return response()->json($data);
    }
    public function store(Request $request){


        $Data =[
            'id' => '1',
            'table_size' => '2',
            'start_up' => 4,
            'end_up' => 5,
        ];
    
        // Create a new reservation
        $reservation = Reservation::create($Data);
    
        return response()->json($Data);

    }

}