<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PoliceStation;
use App\Models\Crime;
use App\Models\Criminal;
use App\Models\Arrest;
use App\Models\Fir;
use App\Models\Payment;
use App\Models\PhoneNumber;
use App\Models\Travel;
use App\Models\Family;
use App\Models\Property;

class CriminalController extends Controller
{
    public function criminal()
    {
        $data = [];
        $data['po_station'] = PoliceStation::get(); 
        $data['karwai'] = Crime::get(); 
        $data['criminals'] = criminal::get();

        return view('criminals.criminal', $data);
    }

    public function store(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'fname' => $request->input('fname'),
            'address' => $request->input('address'),
            'cnic' => $request->input('cnic'),
            'po_station' => $request->input('po_station'),
            'karwai' => $request->input('Karwai'),

        ];
        $insert = criminal::create($data);
        return redirect(url('criminal'))->with('status', 'Added Successfully');
    }
    public function delete($id)
    {
        criminal::destroy(array('id', $id));
        return redirect ('criminal')->with('status', 'Deleted Successfully');
    }

    public function edit ($id)
    {
        $data['karwai'] = Crime::get(); 

        $data['criminal'] = Criminal::find($id);
        return view('criminals.edit', $data);

    }
    public function update(Request $request, $id)
    {
        $criminal = Criminal::find($id);
        $criminal->name =  $request->input('name');
        $criminal->fname =  $request->input('fname');
        $criminal->address =  $request->input('address');
        $criminal->cnic =  $request->input('cnic');
        $criminal->po_station =  $request->input('po_station');
        $criminal->karwai =  $request->input('karwai');
        $criminal->update();
        return redirect(url("criminal",))->with('status', "Complaint Updated Successfully");
    }

    public function view($id)
    {
        $data['po_station'] = PoliceStation::get(); 
        $data['show'] = criminal::where('id', $id)->first();

        $data['arrest'] = Arrest::where('cri_id', $id)->get(); 
        $data['Fir'] = Fir::where('cri_id', $id)->get(); 
        $data['Payment'] = Payment::where('cri_id', $id)->get(); 
        $data['PhoneNumber'] = PhoneNumber::where('cri_id', $id)->get(); 
        $data['Travel'] = Travel::where('cri_id', $id)->get(); 
        $data['Family'] = Family::where('cri_id', $id)->get(); 
        $data['Property'] = Property::where('cri_id', $id)->get(); 

        return view('criminals.view', $data)->with('status', 'Deleted Successfully');
    }
    
    // Criminal Profile Details
    public function arrest(Request $request)
    {
        $data = [
            'description' => $request->input('description'),
            'date' => $request->input('date'),
            'cri_id' => $request->input('cri_id'),
        ];
        $insert = Arrest::create($data);
        return redirect()->back()->with('status', 'Added Successfully');
    }
    public function fir(Request $request)
    {
        $data = [
            'fir_number' => $request->input('fir_number'),
            'crime' => $request->input('crime'),
            'remarks' => $request->input('remark'),
            'doc' => $request->input('doc'),
            'po_station' => $request->input('po_station'),
            'cri_id' => $request->input('cri_id'),
        ];
        $insert = Fir::create($data);
        return redirect()->back()->with('status', 'Added Successfully');
    }
    public function Payment(Request $request)
    {
        $data = [
            'send' => $request->input('Send'),
            'method' => $request->input('method'),
            'amount' => $request->input('amount'),
            'n_sender' => $request->input('n_sender'),
            'account' => $request->input('account'),
            'purpose' => $request->input('purpose'),
            'cri_id' => $request->input('cri_id'),
        ];
        $insert = Payment::create($data);
        return redirect()->back()->with('status', 'Added Successfully');
    }
    public function PhoneNumber(Request $request)
    {
        $data = [
            'n_number' => $request->input('m_number'),
            'network' => $request->input('network'),
            'cri_id' => $request->input('cri_id'),
        ];
        $insert = PhoneNumber::create($data);
        return redirect()->back()->with('status', 'Added Successfully');
    }
    public function Travel(Request $request)
    {
        $data = [
            'dtravel' => $request->input('dtravel'),
            'f_number' => $request->input('f_number'),
            'status' => $request->input('status'),
            'passport' => $request->input('passport'),
            's_name' => $request->input('s_name'),
            'destination' => $request->input('destination'),
            'cri_id' => $request->input('cri_id'),
        ];
        $insert = Travel::create($data);
        return redirect()->back()->with('status', 'Added Successfully');
    }
    public function Family(Request $request)
    {
        $data = [
            'relation' => $request->input('relation'),
            'po' => $request->input('po'),
            'rel_po' => $request->input('rel_po'),
            'cri_id' => $request->input('cri_id'),
        ];
        $insert = Family::create($data);
        return redirect()->back()->with('status', 'Added Successfully');
    }
    public function Property(Request $request)
    {
        $data = [
            'type' => $request->input('type'),
            'E_number' => $request->input('E_number'),
            'F_number' => $request->input('F_number'),
            'remarks' => $request->input('remarks'),
            'cri_id' => $request->input('cri_id'),
        ];
        $insert = Property::create($data);
        return redirect()->back()->with('status', 'Added Successfully');
    }
}
