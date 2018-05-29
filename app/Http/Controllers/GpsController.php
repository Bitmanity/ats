<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coordinate;
use Carbon\Carbon;

class GpsController extends Controller
{
 public function storeCoords(Request $request)
 {
 	$inputs = $request->all();
 	 if($inputs!=null){
 	 $coord = new Coordinate();

 	$coord->received_data = $inputs;
 	$coord->save();
 	echo "#200#";
 }
 
 }
 public function sendCoordinates(Request $request)
 {
 		$time = Carbon::today();
 		$coordinates = Coordinate::where('id','>=',1)->get();
 		$coordinates = json_encode($coordinates);
 		return ($coordinates);
 }

}
