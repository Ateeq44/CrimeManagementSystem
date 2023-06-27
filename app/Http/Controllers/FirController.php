<?php

namespace App\Http\Controllers;

use App\Models\Fir;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FirController extends Controller
{
    public function fir($value='')
    {
        $data = [];
        $data['fir'] = Fir::get();

        return view('Fir.fir', $data);
    }
    public function store(Request $request)
    {
        $data = [
            'ps_id' => Auth::user()->ps_id,
            'name' => $request->input('name'),
            'fname' => $request->input('fname'),
            'cnic' => $request->input('cnic'),
            'address' => $request->input('address'),
            'loca_crime' => $request->input('loca_crime'),
            'doc' => $request->input('doc'),
            'incident' => $request->input('incident'),
            'fir_number' =>  '#'.rand(11111,99999),
            'phone' =>  $request->input('phone'),
        ];
        // dd($data);
        $insert = Fir::create($data);
        return redirect()->back()->with('status', 'Added Successfully');
    }
    public function edit($id)
    {
        $data = [];
        $data['show'] = Fir::where('id', $id)->first();
        return view('fir.edit', $data)->with('status', 'Added Successfully');
    }
    public function update(Request $request, $id)
    {
        $edit = Fir::find($id);
        $edit->name =  $request->input('name');
        $edit->fname =  $request->input('fname');
        $edit->cnic =  $request->input('cnic');
        $edit->address =  $request->input('address');
        $edit->loca_crime =  $request->input('loca_crime');
        $edit->doc =  $request->input('doc');
        $edit->incident =  $request->input('incident');
        $edit->phone =  $request->input('phone');
        $edit->update();
        return redirect()->back()->with('status', 'Added Successfully');
    }

    public function show($id)
    {
        $data = [];
        $data['show'] = Fir::where('id', $id)->first();
        return view('fir.view', $data);
    }
    public function delete($id)
    {
        fir::destroy(array('id', $id));
        return redirect()->back();
    }
}