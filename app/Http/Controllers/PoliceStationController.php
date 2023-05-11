<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliceStationController extends Controller
{
    public function police_station()
    {
        return view('pages.PoliceStation');
    }
}
