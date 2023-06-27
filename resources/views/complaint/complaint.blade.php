
@extends('layout.app')

<title>
  Complaint
</title>

@section('content')

<!-- Page body -->
@if(Auth::user()->role_as == 0)

<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title float-left">Complaints</h3>
            <div class="w-100">
              <a style="float:right;" class="btn btn-success btn-square" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add New
              </a>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable" id="myTable">
              <thead>
                <tr>
                  <th> #</th>
                  <th>Name</th>
                  <th>Father Name</th>
                  <th>CNIC #</th>
                  {{-- <th>Address</th> --}}
                  {{-- <th>Location of Crime</th> --}}
                  {{-- <th>Police Station</th> --}}
                  <th>Date of Crime</th>
                  {{-- <th>Crime</th> --}}
                  {{-- <th>Created At</th> --}}
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($complaint as $key => $value)
                <tr>
                  <td>{{ $value->complaint_no }}</td>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->fname }}</td>
                  <td>{{ $value->cnic }}</td>
                  {{-- <td>{{ $value->address }}</td> --}}
                  {{-- <td>{{ $value->loca_crime }}</td> --}}
                  {{-- <td>{{ @$value->policestations->name}}</td> --}}
                  <td>{{ date('d-m-Y', strtotime($value->doc)) }}</td>
                  {{-- <td>{{ $value->tocrime }}</td> --}}
                  {{-- <td>{{ $value->created_at }}</td> --}}
                  <td class="text-end">
                    <span class="dropdown">
                      <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                      <div class="dropdown-menu dropdown-menu-end dropdown-new" style="">
                        <a class="dropdown-item" href="{{ url('com_show/'.$value->id) }}">
                          Show
                        </a>
                        <a class="dropdown-item" href="{{ url('com_delete/'.$value->id) }}">
                          Delete
                        </a>
                        <a class="dropdown-item" href="{{ url('com_edit/'.$value->id) }}">
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
@endif
@if(Auth::user()->role_as == 1)

<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title float-left">Complaints</h3>
                    {{-- <div class="w-100">
                      <a style="float:right;" class="btn btn-success btn-square" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Add New
                      </a>
                    </div> --}}
                  </div>
                  
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable" id="myTable">
                      <thead>
                        <tr>

                          <th class="w-1">#</th>
                          <th> #</th>
                          <th>Name</th>
                          <th>CNIC #</th>
                          {{-- <th>Address</th> --}}
                          {{-- <th>Location of Crime</th> --}}
                          {{-- <th>Police Station</th> --}}
                          {{-- <th>Date of Crime</th> --}}
                          {{-- <th>Crime</th> --}}
                          {{-- <th>Created At</th> --}}
                          <th class="text-center"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($complaints as $key => $value)
                        <tr>
                          <td><span class="text-muted">{{ ++$key }}</span></td>
                          <td>{{ $value->complaint_no }}</td>
                          <td>{{ $value->name }}</td>
                          <td>{{ $value->cnic }}</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end dropdown-new" style="">
                                <a class="dropdown-item" href="{{ url('com_show/'.$value->id) }}">
                                  Show
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
      </div>
      @endif
      {{-- Model Box --}}

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


             <form action="{{ url('com-submit') }}" method="POST" enctype="multipart/form-data" class="dropzone">
              @csrf

              <div class="form-outline mb-4">
                <div id="my-dropzone" class="dropzone text-center">
                </div>
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" >Full Name</label>
                <input type="text" name="name" class="form-control">
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" >Father Name</label>
                <input type="text" name="fname" class="form-control">
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" >Cnic #</label>
                <input type="text" name="cnic"  oninput="formatCNIC(this)" maxlength="15" class="form-control">
              </div>

              <div class="form-outline mb-4">
                <label class="form-label">Address</label>
                <textarea class="form-control" name="address"></textarea>
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" >Location of Crime</label>
                <input type="text" name="loca_crime" class="form-control">
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" >Date Of Crime</label>
                <input type="date" name="doc" class="form-control">
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" >Phone #</label>
                <input type="phone" name="phone" class="form-control">
              </div>

              <!-- Number input -->
              <div class="form-outline mb-4">
                <label class="form-label">Type of Crime</label>
                <select class="form-control" name="tocrime">
                  <option>Theft</option>
                  <option>Robbery</option>
                  <option>Pick Pocket</option>
                  <option>Murder</option>
                  <option>Rape</option>
                  <option>Molestation</option>
                  <option>Kidnapping</option>
                  <option>Missing Person</option>
                </select>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label">Detail of incident</label>
                <textarea class="form-control" name="incident"></textarea>
              </div>
              <button type="submit" class="btn btn-success btn-square w-100 btn-block mb-4">Submit</button>
            </form>
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
