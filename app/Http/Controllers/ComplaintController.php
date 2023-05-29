<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    public function index()
    {
        $data = [];
        $data['complaint'] = Complaint::where('ps_id', Auth::user()->ps_id)->get();
        $data['complaints'] = Complaint::get();
        return view('complaint.complaint', $data);
    }
    public function complaint(Request $request)
    {


        $data = [

            'ps_id' => Auth::user()->ps_id,
            'name' => $request->input('name'),
            'cnic' => $request->input('cnic'),
            'address' => $request->input('address'),
            'loca_crime' => $request->input('loca_crime'),
            'doc' => $request->input('doc'),
            'tocrime' => $request->input('tocrime'),
            'incident' => $request->input('incident'),
            'complaint_no' =>  '#'.rand(11111,99999),

        ];
        // dd($data);
        $insert = complaint::create($data);
        return redirect(url('/'))->with('status', 'Added Successfully');
    }

    public function delete ($id)
    {
        Complaint::destroy(array('id', $id));
        return redirect ('complaint')->with('status', 'Deleted Successfully');
    }

    public function edit ($id)
    {
        $data['complaint'] = Complaint::find($id);
        return view('complaint.edit', $data);

    }
    public function update(Request $request, $id)
    {
        $complaint = complaint::find($id);
        $complaint->user_id = Auth::user()->ps_id;
        $complaint->name =  $request->input('name');
        $complaint->cnic =  $request->input('cnic');
        $complaint->address =  $request->input('address');
        $complaint->loca_crime =  $request->input('loca_crime');
        $complaint->doc =  $request->input('doc');
        $complaint->tocrime =  $request->input('tocrime');
        $complaint->incident =  $request->input('incident');
        $complaint->complaint_no =  '#'.rand(11111,99999);
        $complaint->update();
        return redirect(url("complaint",))->with('status', "Complaint Updated Successfully");
    }

}
