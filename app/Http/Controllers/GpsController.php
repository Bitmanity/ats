<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coordinate;
use Carbon\Carbon;

class GpsController extends Controller
{
 public function storeCoords(Request $request,$latitude,$longitude)
 {
 		$coordinates = new Coordinate();
 		$coordinates->latitude = $latitude;
 		$coordinates->longitude = $longitude;
 		$coordinates->save();
 		return "success";
 }
 public function sendCoordinates(Request $request)
 {
 		$time = Carbon::today();
 		$coordinates = Coordinate::where('id','>=',1)->get();
 		$coordinates = json_encode($coordinates);
 		return ($coordinates);
 }

}
