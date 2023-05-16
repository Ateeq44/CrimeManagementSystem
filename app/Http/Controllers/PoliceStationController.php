<?php

namespace App\Http\Controllers;
use App\Models\PoliceStation;
use Illuminate\Http\Request;

class PoliceStationController extends Controller
{
    public function police_station()
    {
        $data = [];
        $data['postation'] = PoliceStation::get();
        return view('police station.postation', $data);
    }
    public function store(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'contact_no' => $request->input('contact'),
        ];
        $insert = PoliceStation::create($data);
        return redirect('Police-Station')->with('status', 'Added Successfully');
    }

    public function delete($id)
    {
       PoliceStation::destroy(array('id', $id));
        return redirect ('Police-Station')->with('status', 'Deleted Successfully');

    }
    public function edit ($id)
    {
        $data['postation'] = PoliceStation::find($id);

        return view('police station.edit', $data);

    }
    public function update(Request $request, $id)
    {
        $PoliceStation = PoliceStation::find($id);
        $PoliceStation->name =  $request->input('name');
        $PoliceStation->contact_no =  $request->input('contact');
        $PoliceStation->update();
        return redirect(url("Police-Station",))->with('status', "Updated Successfully");
    }
}
