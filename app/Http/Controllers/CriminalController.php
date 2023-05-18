<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PoliceStation;
use App\Models\Crime;
use App\Models\criminal;
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
     public function view($id)
    {
        $data['po_station'] = PoliceStation::get(); 
        $data['show'] = criminal::where('id', $id)->first();
        return view('criminals.view', $data)->with('status', 'Deleted Successfully');
    }
    
    // Criminal Profile Details
    public function arrest(Request $request)
    {
        $data = [
            'description' => $request->input('description'),
            'date' => $request->input('date'),
        ];
        $insert = Arrest::create($data);
        return redirect(url('criminal'))->with('status', 'Added Successfully');
    }
    public function fir(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'fname' => $request->input('fname'),
            'address' => $request->input('address'),
            'cnic' => $request->input('cnic'),
            'po_station' => $request->input('po_station'),
            'karwai' => $request->input('Karwai'),

        ];
        $insert = Fir::create($data);
        return redirect(url('criminal'))->with('status', 'Added Successfully');
    }
    public function Payment(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'fname' => $request->input('fname'),
            'address' => $request->input('address'),
            'cnic' => $request->input('cnic'),
            'po_station' => $request->input('po_station'),
            'karwai' => $request->input('Karwai'),

        ];
        $insert = Payment::create($data);
        return redirect(url('criminal'))->with('status', 'Added Successfully');
    }
    public function PhoneNumber(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'fname' => $request->input('fname'),
            'address' => $request->input('address'),
            'cnic' => $request->input('cnic'),
            'po_station' => $request->input('po_station'),
            'karwai' => $request->input('Karwai'),

        ];
        $insert = PhoneNumber::create($data);
        return redirect(url('criminal'))->with('status', 'Added Successfully');
    }
    public function Travel(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'fname' => $request->input('fname'),
            'address' => $request->input('address'),
            'cnic' => $request->input('cnic'),
            'po_station' => $request->input('po_station'),
            'karwai' => $request->input('Karwai'),

        ];
        $insert = Travel::create($data);
        return redirect(url('criminal'))->with('status', 'Added Successfully');
    }
    public function Family(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'fname' => $request->input('fname'),
            'address' => $request->input('address'),
            'cnic' => $request->input('cnic'),
            'po_station' => $request->input('po_station'),
            'karwai' => $request->input('Karwai'),

        ];
        $insert = Family::create($data);
        return redirect(url('criminal'))->with('status', 'Added Successfully');
    }
    public function Property(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'fname' => $request->input('fname'),
            'address' => $request->input('address'),
            'cnic' => $request->input('cnic'),
            'po_station' => $request->input('po_station'),
            'karwai' => $request->input('Karwai'),

        ];
        $insert = Property::create($data);
        return redirect(url('criminal'))->with('status', 'Added Successfully');
    }
}
