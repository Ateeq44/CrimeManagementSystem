<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PoliceStation;



class UserController extends Controller
{
    public function user()
    {
        $data = [];
        $data['police_station'] = PoliceStation::get();
        return view('user.user', $data);
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'ps_id' => $request->input('ps_id'),
            'password' => \Hash::make($request->input('password')),
        ];
        // dd($data);
        $insert = User::create($data);
        return redirect('Users');
    }
}
