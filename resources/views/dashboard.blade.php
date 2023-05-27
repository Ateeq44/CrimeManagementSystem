@extends('layout.app')

<title>
Complaint
</title>

@section('content')

        <!-- Page body -->
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
                          <th>Case #</th>
                          <th>Name</th>
                          <th>CNIC #</th>
                          <th>Address</th>
                          <th>Location of Crime</th>
                          <th>Police Station</th>
                          <th>Date of Crime</th>
                          <th>Crime</th>
                          {{-- <th>Created At</th> --}}
                          {{-- <th class="text-center"></th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($complaint as $key => $value)
                        <tr>
                          <td><span class="text-muted">{{ ++$key }}</span></td>
                          <td>{{ $value->complaint_no }}</td>
                          <td>{{ $value->name }}</td>
                          <td>{{ $value->cnic }}</td>
                          <td>{{ $value->address }}</td>
                          <td>{{ $value->loca_crime }}</td>
                          <td>{{ $value->police_station }}</td>
                          <td>{{ $value->doc }}</td>
                          <td>{{ $value->tocrime }}</td>
                          {{-- <td>{{ $value->created_at }}</td> --}}
                          {{-- <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end dropdown-new" style="">
                                <a class="dropdown-item" href="{{ url('com_delete/'.$value->id) }}">
                                  Delete
                                </a>
                                <a class="dropdown-item" href="{{ url('com_edit/'.$value->id) }}">
                                  Edit
                                </a>
                              </div>
                            </span>
                          </td> --}}
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

@endsection
