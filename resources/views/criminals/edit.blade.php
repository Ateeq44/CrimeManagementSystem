@extends('layout.app')

<title>
    Update Criminal Details
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
               Update Criminal
            </h2>
           </div>
           <div class="card-body p-3 border-radius-0">

             <form action="{{ url('criminals_update/'.$criminal->id) }}" method="POST">
            @csrf
            <div class="form-outline mb-4">
                <label class="form-label" >Full Name</label>
                <input type="text" name="name" value="{{ $criminal->name }}" class="form-control">
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" >Father Name</label>
                <input type="text" name="fname" value="{{ $criminal->fname }}" class="form-control">
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" >Cnic #</label>
                <input type="text" name="cnic" value="{{ $criminal->cnic }}"  class="form-control">
            </div>

            <div class="form-outline mb-4">
                <label class="form-label">Address</label>
                <textarea class="form-control" name="address">{{ $criminal->address }} </textarea>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" >Police Station</label>
                <input type="text" name="po_station" value="{{ Auth::user()->name }}"  class="form-control">
            </div>

            <div class="form-outline mb-4">
                <label class="form-label">Karwai Law</label>
                <select class="form-control"  name="karwai">
                    @foreach($karwai as $value)
                    <option>{{$value->section}}</option>
                    @endforeach
                </select>
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
