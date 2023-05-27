    <style type="text/css">
        
    </style>
    @extends('layout.app')
    <title>
        Criminal
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
                        <a class="btn btn-success btn-square" style="float:right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add New
                        </a>
                    </div>
                  </div>
                  
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable" id="myTable">
                      <thead>
                        <tr>
                          
                          <th class="w-1">#</th>
                          <th>Full Name</th>
                          <th>Father Name</th>
                          <th>CNIC #</th>
                          <th>Address</th>
                          <th>Police Station</th>
                          <th>Karwai</th>
                          <th class="text-center"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($criminals as $key => $value)
                        <tr>
                          <td><span class="text-muted">{{ ++$key }}</span></td>
                          <td>{{ $value->name }}</td>
                          <td>{{ $value->fname }}</td>
                          <td>{{ $value->cnic }}</td>
                          <td>{{ $value->address}}</td>
                          <td>{{ $value->po_station}}</td>
                          <td>{{ $value->karwai}}</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end dropdown-new" style="">
                                <a class="dropdown-item" href="{{ url('view/'.$value->id) }}">
                                  Show
                                </a>
                                <a class="dropdown-item" href="{{ url('criminals_delete/'.$value->id) }}">
                                  Delete
                                </a>
                                <a class="dropdown-item" href="{{ url('criminals_edit/'.$value->id) }}">
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
                    
                  </div>
                  
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable" id="myTable">
                      <thead>
                        <tr>
                          
                          <th class="w-1">#</th>
                          <th>Full Name</th>
                          <th>Father Name</th>
                          <th>CNIC #</th>
                          <th>Address</th>
                          <th>Police Station</th>
                          <th>Karwai</th>
                          <th class="text-center"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($crimina as $key => $value)
                        <tr>
                          <td><span class="text-muted">{{ ++$key }}</span></td>
                          <td>{{ $value->name }}</td>
                          <td>{{ $value->fname }}</td>
                          <td>{{ $value->cnic }}</td>
                          <td>{{ $value->address}}</td>
                          <td>{{ $value->po_station}}</td>
                          <td>{{ $value->karwai}}</td>
                          <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end dropdown-new" style="">
                                <a class="dropdown-item" href="{{ url('view/'.$value->id) }}">
                                  Show
                                </a>
                               {{--  <a class="dropdown-item" href="{{ url('criminals_delete/'.$value->id) }}">
                                  Delete
                                </a>
                                <a class="dropdown-item" href="{{ url('criminals_edit/'.$value->id) }}">
                                  Edit
                                </a> --}}
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

      {{-- Model Box --}}

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Criminal</h5>
                    <button type="button" class="btn-close text-dark" style="margin-right: 10px;" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark fa-2xl"></i>
                    </button>
                </div>
                <div class="modal-body">
                    

                   <form action="{{ url('criminal-submit') }}" method="POST">
                        @csrf
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
                            <label class="form-label">Police Station</label>
                            <input class="form-control" name="po_station" type="text" value="{{ Auth::user()->name }}">
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label">Karwai Law</label>
                            <select class="form-control"  name="Karwai">
                                @foreach($karwai as $value)
                                <option>{{$value->section}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg w-100 btn-block mb-4">Submit</button>
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
