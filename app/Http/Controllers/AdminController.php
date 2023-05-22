<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crime;
use App\Models\Complaint;
use App\Models\PoliceStation;
use App\Models\criminal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index()
    {
        $data = [];
        $data['complaint'] = Complaint::get()->count();
        $data['po_station'] = PoliceStation::get()->count();
        $data['arrest'] = criminal::get()->count();
        $data['user'] = User::get()->count();
        return view('dashboard', $data);
    }
    public function Section()
    {
        $data = [];
        $data['section'] = crime::get();
        return view('section', $data);
    }
}
