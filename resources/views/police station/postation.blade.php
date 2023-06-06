  @extends('layout.app')

  <title>
    Police Station
  </title>

  @section('content')
          {{-- <input type="text" name="" value="{{ Auth::user()->ps_id }}"> --}}

  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title float-left">Police Stations</h3>
              @if(Auth::user()->role_as == 1)
              <div class="w-100">
                <a href="#" class="btn btn-success btn-square" style="float:right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 Add New
               </a>
             </div>
             @endif


           </div>

           <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable" id="myTable">
              <thead>
                <tr>
                  <th class="w-1">#</th>
                  <th>Name</th>
                  <th>Contact Number</th>
                  {{-- <th>Created At</th> --}}
                  @if(Auth::user()->role_as == 1)
                  <th class="text-center"></th>
                  @endif
                </tr>
              </thead>
              <tbody>
                @foreach($postation as $key => $value)
                <tr>
                  <td><span class="text-muted">{{ ++$key }}</span></td>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->contact_no }}</td>
                  {{-- <td>{{ $value->created_at }}</td> --}}
                  @if(Auth::user()->role_as == 1)
                  <td class="text-end">
                    <span class="dropdown">
                      <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                      <div class="dropdown-menu dropdown-menu-end dropdown-new" style="">
                        <a class="dropdown-item" href="{{ url('po_delete/'.$value->id) }}">
                          Delete
                        </a>
                        <a class="dropdown-item" href="{{ url('po_edit/'.$value->id) }}">
                          Edit
                        </a>
                      </div>
                    </span>
                  </td>
                  @endif
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
        <h5 class="modal-title" id="exampleModalLabel">Add Police Station</h5>
        <button type="button" class="btn-close text-dark" style="margin-right: 10px;" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fa-2xl"></i>
        </button>
      </div>
      <div class="modal-body">


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
        <button type="submit" class="btn btn-success btn-square w-100 btn-block mb-4">Submit</button>
      </form>
    </div>
  </div>
</div>
</div>

@endsection
@section('script')


@endsection
