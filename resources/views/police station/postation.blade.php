  @extends('layout.app')

  <title>
    Police Station
</title>

@section('content')

<div class="row">
    <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3 border-radius-0">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button>
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
</div>
</div>
</div>
</div>
<hr class="bg-dark">
<div>
    <div class="table-responsive h-100">
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
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Show</a>
                        <a class="dropdown-item" href="{{ url('po_edit/'.$value->id) }}">Edit</a>
                        <a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#exampleModal1">Delete</a>
                    </div>
                </div>
            </td>        
        </tr>
        @endforeach 

    </tbody>
</table>
</div>
</div>
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

@endsection
@section('script')


@endsection
