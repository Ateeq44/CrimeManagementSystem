  @extends('layout.app')

  <title>
    Users
  </title>

  @section('content')

  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title float-left">Users</h3>
              <div class="w-100">
                <a href="#" class="btn btn-success btn-square" style="float:right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 Add New
               </a>
             </div>

           </div>

           <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable" id="myTable">
              <thead>
                <tr>
                  <th class="w-1">#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($user as $key => $value)
                <tr>
                  <td><span class="text-muted">{{ ++$key }}</span></td>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->email }}</td>
                  <td>{{ $value->password }}</td>
                  <td class="text-end">
                    <span class="dropdown">
                      <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                      <div class="dropdown-menu dropdown-menu-end dropdown-new" style="">
                        <a class="dropdown-item" href="{{ url('user_delete/'.$value->id) }}">
                          Delete
                        </a>
                        <a class="dropdown-item" href="{{ url('user_edit/'.$value->id) }}">
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


{{-- Model Box --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="btn-close text-dark" style="margin-right: 10px;" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fa-2xl"></i>
        </button>
      </div>
      <div class="modal-body">


       <form action="{{ url('Users-sub') }}" method="POST">
        @csrf
        <div class="form-outline mb-4">
          <label class="form-label" >Name</label>
          <input type="text" name="name" class="form-control">
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" >Email</label>
          <input type="Gmail" name="email" class="form-control">
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" >Password</label>
          <input type="Password" name="password" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-success btn-square w-100 btn-block mb-4">Submit</button>
      </form>
    </div>
  </div>
</div>
</div>

@endsection
@section('script')


@endsection
