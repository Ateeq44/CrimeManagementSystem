@extends('layout.app')

<title>
    Update Complaint
</title>

@section('content')

<div class="row">
    <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3 border-radius-0">
            <h3 class="text-center mb-5">
               Update Complain
           </h3>

           <form action="{{ url('com-update/'.$complaint->id) }}" method="POST">
            @csrf
            <div class="form-outline mb-4">
                <label class="form-label" >Full Name</label>
                <input type="text" name="name" value="{{ $complaint->name }}" class="form-control">
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" >Cnic #</label>
                <input type="text" name="cnic" value="{{ $complaint->cnic }}"  class="form-control">
            </div>

            <div class="form-outline mb-4">
                <label class="form-label">Address</label>
                <textarea class="form-control" name="address">{{ $complaint->address }} </textarea>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" >Location of Crime</label>
                <input type="text" name="loca_crime" value="{{ $complaint->loca_crime }}"  class="form-control">
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" >Police Station</label>
                <input type="text" name="police_station" value="{{ Auth::user()->name }}"  class="form-control">
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" >Date Of Crime</label>
                <input type="date" name="doc" value="{{ $complaint->doc }}"  class="form-control">
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <label class="form-label">Type of Crime</label>
                <select class="form-control" name="tocrime">
                    <option>Theft</option>
                    <option>Robbery</option>
                    <option>Pick Pocket</option>
                    <option>Murder</option>
                    <option>Rape</option>
                    <option>Molestation</option>
                    <option>Kidnapping</option>
                    <option>Missing Person</option>
                </select>
            </div>
            <div class="form-outline mb-4">
                <label class="form-label">Detail of incident</label>
                <textarea class="form-control" name="incident">{{ $complaint->incident }} </textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg w-100 btn-block mb-4">Submit</button>
        </form>
    </div>
</div>
</div>
</div>

@endsection
