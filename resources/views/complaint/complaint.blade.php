  @extends('layout.app')

  <title>
    Complaint
</title>

@section('content')

<div class="row">
    <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Complaint</button>

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
                       Enter New Complain
                   </h3>

                   <form action="{{ url('com-submit') }}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" >Full Name</label>
                        <input type="text" name="name" class="form-control">
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
                        <label class="form-label" >Police Station</label>
                        <input type="text" name="police_station" value="{{ Auth::user()->name }}" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" >Date Of Crime</label>
                        <input type="date" name="doc" class="form-control">
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
                    <button type="submit" class="btn btn-primary btn-lg w-100 btn-block mb-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="table-responsive h-100">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Case #</th>
            <th>Full Name</th>
            <th>CNIC #</th>
            <th>Address</th>
            <th>Location of Crime</th>
            <th>Police Station</th>
            <th>Date of Case</th>
            <th>Crime</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($complaint as $key => $value)
        <tr>
            <th scope="row">{{++$key}}</th>
            <td>{{ $value->complaint_no }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->cnic }}</td>
            <td>{{ $value->address }}</td>
            <td>{{ $value->loca_crime }}</td>
            <td>{{ $value->police_station }}</td>
            <td>{{ $value->doc }}</td>
            <td>{{ $value->tocrime }}</td>
            <td>{{ $value->incident }}</td>
            <td>
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" style="padding: 18px 30px !important;" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        {{-- <a class="dropdown-item" href="#">Show</a> --}}
                        <a class="dropdown-item" href="{{ url('com_edit/'.$value->id) }}">Edit</a>
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
    <a href="{{ url('com_delete/'.$value->id) }}" class="btn btn-danger" data-dismiss="modal">Delete</a>
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
