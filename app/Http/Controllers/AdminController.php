<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crime;
use App\Models\Complaint;
use App\Models\PoliceStation;
use App\Models\Criminal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index()
    {
        $data = [];
        $data['complaint'] = Complaint::get();
        return view('dashboard', $data);
    }

    public function Section()
    {
        $data = [];
        $data['section'] = Crime::get();
        return view('section', $data);
    }

    public function criminal()
    {
        $data = [];
        $data['criminals'] = Criminal::get();
        return view('admin.criminal.criminal', $data);
    }

    
}
