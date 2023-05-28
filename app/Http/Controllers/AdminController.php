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
        return view('section.section', $data);
    }

    public function delete($id)
    {
        crime::destroy(array('id', $id));
        return redirect(url('Section'));
    }
    public function edit($id)
    {
        $data = [];
        $data["section"] = Crime::find($id);
        return view('section.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $complaint = Crime::find($id);
        $complaint->section = $request->input('section');
        $complaint->description =  $request->input('description');
        $complaint->update();
        return redirect(url("Section",))->with('status', "Penal Code Updated Successfully");
    }

    public function criminal()
    {
        $data = [];
        $data['criminals'] = Criminal::get();
        return view('admin.criminal.criminal', $data);
    }

    
}
