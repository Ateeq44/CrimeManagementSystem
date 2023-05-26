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
        $data['user'] = User::get();
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

    public function edit($id)
    {
        $data = [];
        $data['police_station'] = PoliceStation::get();
        $data['user'] = User::find($id);

        return view('user.edit', $data);
    }


    public function delete ($id)
    {
        User::destroy(array('id', $id));
        return redirect ('Users')->with('status', 'Deleted Successfully');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->ps_id = $request->input('ps_id');
        $user->password = \Hash::make($request->input('password'));
        $user->update();
        return redirect(url("Users",))->with('status', "Complaint Updated Successfully");
    }
}
