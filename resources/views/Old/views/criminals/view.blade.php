

        {{-- Arrest Details --}}

        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">Arrests</h5>
                <button class="btn btn-primary float-right"  data-bs-toggle="modal" data-bs-target="#exampleModal21">
                    Add New
                </button>
            </div>
            <div class="card-body p-3 border-radius-0 my-3">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Description</th>
                    <th>Date Of Arrest</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($arrest as $key => $value)
                <tr class="list16_{{$value->id}}">
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $value->description }}</td>
                    <td>{{ $value->date }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-lights dropdown-toggle" style="padding: 20px 30px;" data-toggle="dropdown"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('arrest_edit/'.$value->id)}}">Edit</a>
                                <a class="dropdown-item delete-cart-item" data-url="{{ url('arrest_delete/'.$value->id) }}"  data-remove="list16_{{$value->id}}">Delete</a>
                            </div>
                        </div>
                    </td>        
                </tr>
                @endforeach
            </tbody> 
        </table>
        </div>
    </div>
{{-- FIR Details --}}

<div class="card">
    <div class="card-header">
        <h5 class="float-left">FIR Details</h5>
        <button class="btn btn-primary float-right"  data-bs-toggle="modal" data-bs-target="#exampleModal22">Add New</button>
    </div>
    <div class="card-body p-3 border-radius-0 my-3">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>FIR #</th>
            <th>Crime</th>
            <th>Remarks</th>
            <th>Date of Crime</th>
            <th>Police Station</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Fir as $key => $value)
        <tr class="list15_{{$value->id}}">
            <th scope="row">{{ ++$key }}</th>
            <td>{{ $value->fir_number }}</td>
            <td>{{ $value->crime }}</td>
            <td>{{ $value->remarks }}</td>
            <td>{{ $value->doc }}</td>
            <td>{{ $value->po_station }}</td>
            <td>
                <div class="dropdown">
                    <button type="button" class="btn btn-lights dropdown-toggle" style="padding: 20px 30px;" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('fir_edit/'.$value->id)}}">Edit</a>
                        <a class="dropdown-item delete-cart-item" data-url="{{ url('fir_delete/'.$value->id) }}"  data-remove="list15_{{$value->id}}">Delete</a>
                    </div>
                </div>
            </td>        
        </tr>
        @endforeach
    </tbody> 
</table>
</div>
</div>
{{-- Payment Details --}}

<div class="card">
    <div class="card-header">
        <h5 class="float-left">Payment Details</h5>
        <button class="btn btn-primary float-right"  data-bs-toggle="modal" data-bs-target="#exampleModal23">Add New</button>
    </div>
    <div class="card-body p-3 border-radius-0 my-3">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Send/Receive</th>
            <th>Method</th>
            <th>Amount</th>
            <th>Name of Sender/Receiver</th>
            <th>Account of Sender/Receiver</th>
            <th>Purpose</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Payment as $key => $value)
        <tr class="list14_{{$value->id}}">
            <th scope="row">{{ ++$key }}</th>
            <td>{{ $value->send }}</td>
            <td>{{ $value->method }}</td>
            <td>{{ $value->amount }}</td>
            <td>{{ $value->n_sender }}</td>
            <td>{{ $value->account }}</td>
            <td>{{ $value->purpose }}</td>
            <td>
                <div class="dropdown">
                    <button type="button" class="btn btn-lights dropdown-toggle" style="padding: 20px 30px;" data-toggle="dropdown"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('Payment_edit/'.$value->id)}}">Edit</a>
                        <a class="dropdown-item delete-cart-item" data-url="{{ url('Payment_delete/'.$value->id) }}"  data-remove="list14_{{$value->id}}">Delete</a>
                    </div>
                </div>
            </td>        
        </tr>
        @endforeach
    </tbody> 
</table>
</div>
</div>
{{-- Phone Number Details --}}

<div class="card">
    <div class="card-header">
        <h5 class="float-left">Phone Number Details</h5>
        <button class="btn btn-primary float-right"  data-bs-toggle="modal" data-bs-target="#exampleModal24">Add New</button>
    </div>
    <div class="card-body p-3 border-radius-0 my-3">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mobile Number</th>
                    <th>Network</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($PhoneNumber as $key => $value)
                <tr class="list13_{{$value->id}}">
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $value->n_number }}</td>
                    <td>{{ $value->network }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-lights dropdown-toggle" style="padding: 20px 30px;" data-toggle="dropdown"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('PhoneNumber_edit/'.$value->id)}}">Edit</a>
                                <a class="dropdown-item delete-cart-item" data-url="{{ url('PhoneNumber_delete/'.$value->id) }}"  data-remove="list13_{{$value->id}}">Delete</a>
                            </div>
                        </div>
                    </td>        
                </tr>
                @endforeach
            </tbody> 
        </table>
    </div>
</div>
{{-- Travel History --}}

<div class="card">
    <div class="card-header">
        <h5 class="float-left">Travel History</h5>
        <button class="btn btn-primary float-right"  data-bs-toggle="modal" data-bs-target="#exampleModal25">Add New</button>
    </div>
    <div class="card-body p-3 border-radius-0 my-3">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Flight #</th>
                    <th>Travel Status</th>
                    <th>Passport</th>
                    <th>Site Name</th>
                    <th>Destination</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($Travel as $key => $value)
                <tr class="list12_{{$value->id}}">
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $value->dtravel }}</td>
                    <td>{{ $value->f_number }}</td>
                    <td>{{ $value->status }}</td>
                    <td>{{ $value->passport }}</td>
                    <td>{{ $value->s_name }}</td>
                    <td>{{ $value->destination }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-lights dropdown-toggle" style="padding: 20px 30px;" data-toggle="dropdown"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('Travel_edit/'.$value->id)}}">Edit</a>
                                <a class="dropdown-item delete-cart-item" data-url="{{ url('Travel_delete/'.$value->id) }}"  data-remove="list12_{{$value->id}}">Delete</a>
                            </div>
                        </div>
                    </td>        
                </tr>
                @endforeach
            </tbody> 
        </table>
    </div>
</div>
{{-- Family Tree Details --}}

<div class="card">
    <div class="card-header">
        <h5 class="float-left">Family Tree Details</h5>
        <button class="btn btn-primary float-right"  data-bs-toggle="modal" data-bs-target="#exampleModal26">Add New</button>
    </div>
    <div class="card-body p-3 border-radius-0 my-3">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Relation</th>
                    <th>Relation PO</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($Family as $key => $value)
                <tr class="list11_{{$value->id}}">
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $value->relation }}</td>
                    <td>{{ $value->rel_po }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-lights dropdown-toggle" style="padding: 20px 30px;" data-toggle="dropdown"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('Family_edit/'.$value->id)}}">Edit</a>
                                <a class="dropdown-item delete-cart-item" data-url="{{ url('Family_delete/'.$value->id) }}"  data-remove="list11_{{$value->id}}">Delete</a>
                            </div>
                        </div>
                    </td>        
                </tr>
                @endforeach
            </tbody> 
        </table>
    </div>
</div>
{{-- Property Details --}}

<div class="card">
    <div class="card-header">
        <h5 class="float-left">Property Details</h5>
        <button class="btn btn-primary float-right"  data-bs-toggle="modal" data-bs-target="#exampleModal27">Add New</button>
    </div>
    <div class="card-body p-3 border-radius-0 my-3">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Type</th>
                    <th>Engine Number</th>
                    <th>Frame Number</th>
                    <th>Remarks</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($Property as $key => $value)
                <tr class="list10_{{$value->id}}">
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $value->type }}</td>
                    <td>{{ $value->E_number }}</td>
                    <td>{{ $value->F_number }}</td>
                    <td>{{ $value->remarks }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-lights dropdown-toggle" style="padding: 20px 30px;" data-toggle="dropdown"></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('Property_edit/'.$value->id)}}">Edit</a>
                                <a class="dropdown-item delete-cart-item" data-url="{{ url('Property_delete/'.$value->id) }}"  data-remove="list10_{{$value->id}}">Delete</a>
                            </div>
                        </div>
                    </td>        
                </tr>
                @endforeach
            </tbody> 
        </table>
    </div>
</div>
</div>
</div>

{{-- Arrest --}}

<div class="modal fade" id="exampleModal21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Arrested Details</h5>
                <button type="button" class="btn-close text-dark" style="margin-right: 10px;" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark fa-2xl"></i>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ url('Arrest') }}" method="POST">
                    @csrf

                    <div class="form-outline mb-4">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" >Date Of Arrest</label>
                        <input type="date" name="date" class="form-control">
                    </div>
                    <input type="hidden" name="cri_id" value="{{ $show->id }}">
                    <button type="submit" class="btn btn-primary btn-lg w-100 btn-block mb-4">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>

{{-- FIR Details --}}

<div class="modal fade" id="exampleModal22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Fir Details</h5>
                <button type="button" class="btn-close text-dark" style="margin-right: 10px;" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark fa-2xl"></i>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ url('Fir') }}" method="POST">
                    @csrf

                    <div class="form-outline mb-4">
                        <label class="form-label" >Fir Number</label>
                        <input type="text" name="fir_number" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" >Crime</label>
                        <select class="form-control" name="crime">
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
                        <label class="form-label" >Remarks</label>
                        <input type="text" name="remark" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label">Date Of Crime</label>
                        <input type="date" class="form-control" name="doc">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" >Police Station</label>
                        <select class="form-control" name="po_station">
                            @foreach($po_station as $value)
                            <option>{{$value->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="cri_id" value="{{ $show->id }}">

                    <button type="submit" class="btn btn-primary btn-lg w-100 btn-block mb-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Payment Details --}}

<div class="modal fade" id="exampleModal23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Payment Details</h5>
                <button type="button" class="btn-close text-dark" style="margin-right: 10px;" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark fa-2xl"></i>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ url('Payment') }}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" >Send/Receive</label>
                        <input type="text" name="Send" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" >Method</label>
                        {{-- <input type="text" name="fname" class="form-control"> --}}
                        <select class="form-control" name="method">
                            <option>Bank Transfer</option>
                            <option>Debit Cards</option>
                            <option>Credit Cards</option>
                            <option>Pay Order</option>
                            <option>Cash Agents</option>
                            <option>JazzCash</option>
                            <option>Easypaisa</option>
                            <option>Payoneer</option>
                        </select>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" >Amount</label>
                        <input type="text" name="amount" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label">Name Of Sender/Receiver</label>
                        <input type="text" name="n_sender" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label">Account Of Sender/Receiver</label>
                        <input type="text" name="account" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label">Purpose</label>
                        <input type="text" name="purpose" class="form-control">
                    </div>
                    <input type="hidden" name="cri_id" value="{{ $show->id }}">

                    <button type="submit" class="btn btn-primary btn-lg w-100 btn-block mb-4">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>

{{-- Phone Number Details --}}

<div class="modal fade" id="exampleModal24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Phone Number Details</h5>
                <button type="button" class="btn-close text-dark" style="margin-right: 10px;" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark fa-2xl"></i>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ url('PhoneNumber') }}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" >Mobile Number</label>
                        <input type="text" name="m_number" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" >Network</label>
                        <input type="text" name="network" class="form-control">
                    </div>
                    <input type="hidden" name="cri_id" value="{{ $show->id }}">

                    <button type="submit" class="btn btn-primary btn-lg w-100 btn-block mb-4">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>

{{-- Travel History --}}

<div class="modal fade" id="exampleModal25" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Travel History</h5>
                <button type="button" class="btn-close text-dark" style="margin-right: 10px;" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark fa-2xl"></i>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ url('Travel') }}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" >Date Of Travelling</label>
                        <input type="date" name="dtravel" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" >Flight Number</label>
                        <input type="text" name="f_number" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" >Travel Status</label>
                        <input type="text" name="status" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label">Passport</label>
                        <input type="text" name="passport" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label">Site Name</label>
                        <input type="text" name="s_name" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label">Destination</label>
                        <input type="text" name="destination" class="form-control">
                    </div>
                    <input type="hidden" name="cri_id" value="{{ $show->id }}">

                    <button type="submit" class="btn btn-primary btn-lg w-100 btn-block mb-4">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>

{{-- Family Tree Details --}}

<div class="modal fade" id="exampleModal26" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Family Tree Details</h5>
                <button type="button" class="btn-close text-dark" style="margin-right: 10px;" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark fa-2xl"></i>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ url('Family') }}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" >Relation</label>
                        <select class="form-control" name="relation">
                            <option>select One</option>
                            <option>Brother</option>
                            <option>Sister</option>
                            <option>Father</option>
                            <option>Mother</option>
                            <option>Spouse</option>
                            <option>Son</option>
                            <option>Daughter</option>
                            <option>Husband</option>
                        </select>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" >Relation PO</label>
                        <input type="text" name="rel_po" class="form-control">
                    </div>

                    <input type="hidden" name="cri_id" value="{{ $show->id }}">

                    <button type="submit" class="btn btn-primary btn-lg w-100 btn-block mb-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Property Details --}}

<div class="modal fade" id="exampleModal27" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Property Details</h5>
                <button type="button" class="btn-close text-dark" style="margin-right: 10px;" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark fa-2xl"></i>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ url('Property') }}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" >Type</label>
                        <div class="d-flex">
                            <div>Im-movable</div>
                            <label class="switch ml-3">
                              <input type="checkbox" id="toggleButton"  checked>
                              <span class="slider"></span>
                            </label>
                            <div class="ml-3">movable</div>
                        </div>
                    </div>

                    <div id="div1" style="display:none;">
                        <div class="form-outline mb-4">
                            <label class="form-label" >Type</label>
                            <select class="form-control" name="type">
                                <option class="disabled">Selct One</option>
                                <option>Cycle</option>
                                <option>Bike</option>
                                <option>Car</option>
                                <option>Miscellancous</option>
                            </select>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" >Engine Number</label>
                            <input type="text" name="E_number" class="form-control">
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" >Frame Number</label>
                            <input type="text" name="F_number"  oninput="formatCNIC(this)" maxlength="15" class="form-control">
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label">Remarks</label>
                            <textarea class="form-control" name="remarks"></textarea>
                        </div>
                    </div>
                    <div id="div2" style="display: none;">
                        <div class="form-outline mb-4">
                            <label class="form-label" >Type</label>
                            <select class="form-control" name="type">
                                <option class="disabled">Selct One</option>
                                <option>Shop</option>
                                <option>House</option>
                                <option>Land</option>
                                <option>Live Stock</option>
                                <option>Miscellancous</option>
                            </select>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label">Remarks</label>
                            <textarea class="form-control" name="remarks"></textarea>
                        </div>
                    </div>
                    {{-- <div id="div2" style="display: none;">Div 2</div> --}}

                    <input type="hidden" name="cri_id" value="{{ $show->id }}">

                    <button type="submit" class="btn btn-primary btn-lg w-100 btn-block mb-4">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>




@endsection
@section('script')

    const toggleButton = document.getElementById('toggleButton');
    const div1 = document.getElementById('div1');
    const div2 = document.getElementById('div2');

    toggleButton.addEventListener('change', function() {
        if (this.checked) {
            div1.style.display = 'none';
            div2.style.display = 'block';
        } else {
            div1.style.display = 'block';
            div2.style.display = 'none';
        }
    });

@endsection