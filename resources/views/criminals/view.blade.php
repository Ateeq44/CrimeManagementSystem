@extends('layout.app')               
<title>
    Criminal
</title>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header">
                    <h2>Profile Details</h2>
                </div> 
                <div class="card-body p-3 border-radius-0 my-3">
                    <div class="row pl-3">
                        <div class="col-md-2">
                            <h3 class="font-weight-bold">Name</h3>
                        </div>
                        <div class="col-md-4">
                            <h3 class="">{{ $show->name }}</h3>
                        </div>
                        <div class="col-md-2">
                            <h3 class="font-weight-bold">Father Name</h3>
                        </div>
                        <div class="col-md-4">
                            <h3 class="">{{ $show->fname }}</h3>
                        </div>
                        <div class="col-md-2 mt-3">
                            <h3 class="font-weight-bold">CNIC Number</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <h3 class="">{{ $show->cnic }}</h3>
                        </div>
                        <div class="col-md-2 mt-3">
                            <h3 class="font-weight-bold">Address</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <h3 class="">{{ $show->address }}</h3>
                        </div>
                        <div class="col-md-2 mt-3">
                            <h3 class="font-weight-bold">Police Station</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <h3 class="">{{ $show->po_station }}</h3>
                        </div>
                        <div class="col-md-2 mt-3">
                            <h3 class="font-weight-bold">Karwai</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <h3 class="">{{ $show->karwai }} Cr.PC</h3>
                        </div>
                    </div>
                </div>
            </div>
 {{-- Arrest --}}
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Arrest</h3>
                    <div class="w-100">
                        <button class="btn btn-success btn-square float-right"  data-bs-toggle="modal" data-bs-target="#exampleModal21">
                            Add New
                        </button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                        <thead>
                            <tr>
                              <th class="">#</th>
                              <th>Description</th>
                              <th>Date Of Arrest</th>
                              <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($arrest as $key => $value)
                            <tr class="list16_{{$value->id}}">
                                <td>{{ ++$key }}</td>
                                <td>{{ $value->description }}</td>
                                <td>{{ $value->date }}</td>
                                <td class="">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">
                                        Actions
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-new">
                                            <a class="dropdown-item delete-cart-item" data-url="{{ url('arrest_delete/'.$value->id) }}"  data-remove="list16_{{$value->id}}">
                                               Delete
                                            </a>
                                            <a class="dropdown-item" href="{{url('arrest_edit/'.$value->id)}}">
                                                Edit
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

 {{-- fir Details --}}

 {{-- Payment Details --}}

 {{-- Phone number Details --}}

 {{-- Travel Details --}}

 {{-- Family tree Details --}}

 {{-- Property Details --}}

 

 {{-- Add Model --}}

{{-- Arrest --}}

<div class="modal fade" id="exampleModal21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Arrested Details</h5>
                <button type="button" class="btn-close text-dark" style="margin-right: 10px;" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark fa-2xl"></i>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ url('Arrest') }}" method="POST">
                    @csrf

                    <div class="form-outline mb-4">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" >Date Of Arrest</label>
                        <input type="date" name="date" class="form-control">
                    </div>
                    <input type="hidden" name="cri_id" value="{{ $show->id }}">
                    <button type="submit" class="btn btn-success btn-square btn-lg w-100 btn-block mb-4">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
@section('script')

const toggleButton = document.getElementById('toggleButton');
const div1 = document.getElementById('div1');
const div2 = document.getElementById('div2');

toggleButton.addEventListener('change', function() {
    if (this.checked) {
        div1.style.display = 'none';
        div2.style.display = 'block';
    } else {
        div1.style.display = 'block';
        div2.style.display = 'none';
    }
});

@endsection