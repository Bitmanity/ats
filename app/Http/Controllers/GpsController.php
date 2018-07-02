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
        return view('newmap', compact('cars'));

    }


    public function sendCoordinates(Request $request, $imei)
    {
        $startTime = Carbon::now()->subRealHour(7)->toDateTimeString();
        $endTime = Carbon::now()->toDateTimeString();
        $coordinates = LiveData::where('imei', $imei)->whereBetween('created_at', [$startTime, $endTime])->latest()->limit(50)->get();
        $coordinates = json_encode($coordinates);
        return ($coordinates);
    }

}
