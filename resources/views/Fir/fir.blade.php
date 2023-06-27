  @extends('layout.app')

  <title>
    FIR
  </title>

  @section('content')
  {{-- <input type="text" name="" value="{{ Auth::user()->ps_id }}"> --}}

  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="w-50 ">
              <h3 class="card-title float-left">FIR Details</h3>
              </div>
              @if(Auth::user()->role_as == 0)
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
                  <th>Father Name</th>
                  <th>Cnic #</th>
                  <th>Contact #</th>
                  <th>Date Of Crime</th>
                  {{-- <th>Fir Register Date</th> --}}
                  <th class="text-center"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($fir as $key => $value)
                <tr>
                  <td><span class="text-muted">{{ $value->fir_number }}</span></td>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->fname }}</td>
                  <td>{{ $value->cnic }}</td>
                  <td>{{ $value->phone }}</td>
                  <td>{{ date('d-m-Y', strtotime($value->doc)) }}</td>
                  {{-- <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td> --}}
                  <td class="text-end">
                    <span class="dropdown">
                      <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                      <div class="dropdown-menu dropdown-menu-end dropdown-new" style="">
                        <a class="dropdown-item" href="{{ url('fir_show/'.$value->id)}}">
                          show
                        </a>
                        @if(Auth::user()->role_as == 0)

                        <a class="dropdown-item" href="{{ url('fir_delete/'.$value->id)}}">
                          Delete
                        </a>
                        <a class="dropdown-item" href="{{ url('fir_edit/'.$value->id) }}">
                          Edit
                        </a>
                        @endif
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
        <h5 class="modal-title" id="exampleModalLabel">Add Police Station</h5>
        <button type="button" class="btn-close text-dark" style="margin-right: 10px;" data-bs-dismiss="modal" aria-label="Close">
          <i class="fa-solid fa-xmark fa-2xl"></i>
        </button>
      </div>

      <div class="modal-body">

        <h3>Details of FIR submitter</h3>

        <form action="{{ url('fir-submit') }}" method="POST">
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
            <label class="form-label">Location of crime</label>
            <input type="text" name="loca_crime" class="form-control">
          </div>
          <div class="form-outline mb-4">
            <label class="form-label">Contact #</label>
            <input type="text" name="phone" class="form-control">
          </div>
          <div class="form-outline mb-4">
            <label class="form-label">Date of Crime</label>
            <input type="date" name="doc" class="form-control">
          </div>
          <div class="form-outline mb-4">
            <label class="form-label">Details</label>
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
