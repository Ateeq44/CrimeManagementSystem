@extends('layout.app')

<title>
    Update postation
</title>

@section('content')

<div class="row">
    <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3 border-radius-0">
            <h3 class="text-center mb-5">
               Update Police Station
           </h3>

           <form action="{{ url('po-update/'.$postation->id) }}" method="POST">
            @csrf
            <div class="form-outline mb-4">
                <label class="form-label" >Name</label>
                <input type="text" name="name" value="{{ $postation->name }}" class="form-control">
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" >Address</label>
                <input type="phone" name="contact" value="{{ $postation->contact_no }}"  class="form-control">
            </div>

            <button type="submit" class="btn btn-primary btn-lg w-100 btn-block mb-4">Submit</button>
        </form>
    </div>
</div>
</div>
</div>

@endsection
