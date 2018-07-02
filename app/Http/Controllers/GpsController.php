<?php

namespace App\Http\Controllers;

use App\Car;
use App\LiveData;
use Illuminate\Http\Request;
use App\Coordinate;
use Carbon\Carbon;

class GpsController extends Controller
{
 public function storeCoords(Request $request)
 {
     $cars = Car::all();
 	return view('newmap',compact('cars'));
 }
 

 public function sendCoordinates(Request $request,$imei)
 {
 		$coordinates = LiveData::where('imei',$imei)->get();

 		$coordinates = json_encode($coordinates);
 		return ($coordinates);
 }

}
