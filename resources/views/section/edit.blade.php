@extends('layout.app')

<title>
    Update Penal Code
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
                    Update Penal Code             
                </h2>
         </div>
         <div class="card-body p-3 border-radius-0">

           <form action="{{ url('Section_update/'.$section->id) }}" method="POST">
            @csrf
            <div class="form-outline mb-4">
                <label class="form-label" >Section</label>
                <input type="text" name="section" value="{{ $section->section }}" class="form-control">
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" >Address</label>
                <input type="phone" name="description" value="{{ $section->description }}"  class="form-control">
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
