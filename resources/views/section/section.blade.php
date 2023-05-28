    <style type="text/css">

    </style>
    @extends('layout.app')
    <title>
      Criminal
    </title>

    @section('content')

    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="row row-cards">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title float-left">Criminal Penal Code </h3>

              </div>

              <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable" id="myTable">
                  <thead>
                    <tr>

                      <th class="w-1">#</th>
                      <th>Penal Code</th>
                      <th>Description</th>
                      @if(Auth::user()->role_as == 1)
                      <th class="text-center"></th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($section as $key => $value)
                    <tr>
                      <td><span class="text-muted">{{ ++$key }}</span></td>
                      <td>{{ $value->section }}</td>
                      <td>{{ $value->description }}</td>
                      @if(Auth::user()->role_as == 1)
                      <td class="text-end">
                        <span class="dropdown">
                          <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                          <div class="dropdown-menu dropdown-menu-end dropdown-new" style="">
                            <a class="dropdown-item" href="{{ url('section_delete/'.$value->id) }}">
                              Delete
                            </a>
                            <a class="dropdown-item" href="{{ url('section_edit/'.$value->id)}}">
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

    @endsection




{{-- @extends('layout.app')

<title>
    Section and Laws
</title>

@section('content')

<div class="row">
    <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3 border-radius-0">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Section #</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($section as $key => $value)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{ $value->section }}</td>
                    <td>{{ $value->description }}</td>      
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
 --}}