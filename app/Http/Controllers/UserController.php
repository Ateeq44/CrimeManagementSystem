<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
    public function user()
    {
        $data = [];
        $data['user'] = User::get();
        return view('user.user', $data);
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => \Hash::make($request->input('password')),
        ];
        $insert = User::create($data);
        return redirect('Users');
    }
}
