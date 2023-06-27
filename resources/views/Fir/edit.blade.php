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
                    Update FIR             
                </h2>
         </div>
         <div class="card-body p-3 border-radius-0">

           <form action="{{ url('fir_update/'.$show->id) }}" method="POST">
          @csrf

          <div class="form-outline mb-4">
            <label class="form-label" >Full Name</label>
            <input type="text" value="{{ $show->name }}" name="name" class="form-control">
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" >Father Name</label>
            <input type="text" value="{{ $show->fname }}" name="fname" class="form-control">
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" >Cnic #</label>
            <input type="text" value="{{ $show->cnic }}" name="cnic"  oninput="formatCNIC(this)" maxlength="15" class="form-control">
          </div>

          <div class="form-outline mb-4">
            <label class="form-label">Address</label>
            <textarea class="form-control" name="address">{{ $show->address }}</textarea>
          </div>
          <div class="form-outline mb-4">
            <label class="form-label">Location of crime</label>
            <input type="text" value="{{ $show->loca_crime }}" name="loca_crime" class="form-control">
          </div>
          <div class="form-outline mb-4">
            <label class="form-label">Contact #</label>
            <input type="text" value="{{ $show->phone }}" name="phone" class="form-control">
          </div>
          <div class="form-outline mb-4">
            <label class="form-label">Date of Crime</label>
            <input type="date" value="{{ $show->doc }}" name="doc" class="form-control">
          </div>
          <div class="form-outline mb-4">
            <label class="form-label">Details</label>
            <textarea class="form-control" name="incident">{{ $show->incident }}</textarea>
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
@section('script')

function formatCNIC(input) {
  let cnic = input.value.replace(/\D/g, '').substring(0,13);
  let formattedCNIC = '';

  for (let i = 0; i < cnic.length; i++) {
    if (i === 5 || i === 12) {
      formattedCNIC += '-';
    }
    formattedCNIC += cnic[i];
  }

  input.value = formattedCNIC;
}

@endsection