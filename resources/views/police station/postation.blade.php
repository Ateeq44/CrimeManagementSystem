  @extends('layout.app')

  <title>
    Police Station
</title>

@section('content')
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
      <div class="container-fluid d-flex align-items-baseline">
  <nav aria-label="breadcrumb">
    <h6 class="font-weight-bolder text-dark mb-0">Crime Management System</h6>
  </nav>
  <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
    <div class="ms-md-auto pe-md-3 d-flex align-items-center w-25">
        <div class="input-group">
            <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4 w-100">
                <div class="input-group">
                  <input type="search" placeholder="Search" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                  <div class="input-group-append d-flex">
                    <button id="button-addon1" type="submit" class="btn btn-link text-primary d-flex align-items-center h-100"><i class="fa fa-search"></i></button>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</nav>
<div class="row">
    <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header">
                
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button>
            </div>
          <div class="card-body p-3 border-radius-0">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Complaint</h5>
                    <button type="button" class="btn-close text-dark" style="margin-right: 10px;" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark fa-2xl"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="text-center mb-5">
                     Enter New Police Station
                 </h3>

                 <form action="{{ url('po-submit') }}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" >Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" >Contact #</label>
                        <input type="phone" name="contact" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-100 btn-block mb-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($postation as $key => $value)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{ @$value->name }}</td>
            <td>{{ @$value->contact_no }}</td>
            <td>
                <div class="dropdown">
                    <button type="button" class="btn btn-lights dropdown-toggle" style="padding: 18px 30px;" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('po_edit/'.$value->id) }}">Edit</a>
                        <a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#exampleModal1">Delete</a>
                    </div>
                </div>
            </td>        
        </tr>
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Complaint</h5>
        <button type="button" class="btn-close text-dark" style="margin-right: 10px;" data-bs-dismiss="modal" aria-label="Close">
            <i class="fa-solid fa-xmark fa-2xl"></i>
        </button>
    </div>
    <div class="modal-body">
        <h5 class="mb-5">
         Do you want to delete
     </h5>
 </div>
 <div class="modal-footer">
    <a href="{{ url('po_delete/'.$value->id) }}" class="btn btn-danger" data-dismiss="modal">Delete</a>
</div>
</div>
</div>
</div>
        @endforeach 

    </tbody>
</table>
</div>
</div>
</div>
</div>

      
</div>
</div>


@endsection
@section('script')


@endsection
