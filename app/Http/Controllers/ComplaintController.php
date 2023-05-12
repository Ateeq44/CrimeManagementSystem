<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    public function index()
    {
        return view('complaint');
    }
    public function complaint(Request $request)
    {


        $data = [

            'user_id' => Auth::id(),
            'name' => $request->input('name'),
            'cnic' => $request->input('cnic'),
            'address' => $request->input('address'),
            'loca_crime' => $request->input('loca_crime'),
            'police_station' => $request->input('police_station'),
            'doc' => $request->input('doc'),
            'tocrime' => $request->input('tocrime'),
            'incident' => $request->input('incident'),
            'complaint_no' =>  '#'.rand(11111,99999),
        ];
        $insert = complaint::create($data);
        return redirect(url('/'));
    }
}
