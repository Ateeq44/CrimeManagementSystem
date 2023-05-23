@extends('layout.app')

<title>
    Update Police Station
</title>

@section('content')

<!-- Page body -->
<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards" style="display: flex;justify-content: center;">
      <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h2 class="">
                    Update Police Station             
                </h2>
         </div>
         <div class="card-body p-3 border-radius-0">

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

            <button type="submit" class="btn btn-success btn-square w-100 btn-block mb-4">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>



@endsection
