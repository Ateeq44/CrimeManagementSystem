<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriminalController extends Controller
{
    public function criminal()
    {
        return view('criminals.criminal');
    }
}
