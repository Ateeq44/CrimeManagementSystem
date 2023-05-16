<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crime;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function Section()
    {
        $data = [];
        $data['section'] = crime::get();
        return view('section', $data);
    }
}
