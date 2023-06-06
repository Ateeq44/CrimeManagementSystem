<style>
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
  }

  .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
  }

  .ml-3{
    margin-left: 10px;
}
.mt-1{
    margin-top: 5px;
}
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);     
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

</style>
@extends('layout.app')               
<title>
    Criminal
</title>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header">
                    <div class="w-50">
                        <h2>Complaint Full Details</h2>
                    </div>
                    <div class="w-50">
                        <a style="float:right;" class="btn btn-success btn-square" href="{{ url('/') }}">Back</a>
                        
                    </div>
                </div> 


                <div class="card-body p-3 border-radius-0 my-3">
                    <div class="row pl-3">

                        <div class="col-md-2">
                            <h3 class="font-weight-bold">Complaint #</h3>
                        </div>
                        <div class="col-md-4">
                            <h3 class="font-weight-normal">{{ $show->complaint_no }}</h3>
                        </div>
                        <div class="col-md-2">
                            <h3 class="font-weight-bold">Police Station</h3>
                        </div>
                        <div class="col-md-4 ">
                            <h3 class="font-weight-normal">{{ $show->policestations->name}}</h3>
                        </div>
                        <div class="col-md-2 mt-3">
                            <h3 class="font-weight-bold">Name</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <h3 class="font-weight-normal">{{ $show->name }}</h3>
                        </div>
                        <div class="col-md-2 mt-3">
                            <h3 class="font-weight-bold">Father Name</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <h3 class="font-weight-normal">{{ $show->fname }}</h3>
                        </div>
                        <div class="col-md-2 mt-3">
                            <h3 class="font-weight-bold">CNIC Number</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <h3 class="font-weight-normal">{{ $show->cnic }}</h3>
                        </div>
                        <div class="col-md-2 mt-3">
                            <h3 class="font-weight-bold">Address</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <h3 class="font-weight-normal">{{ $show->address }}</h3>
                        </div>
                        <div class="col-md-2 mt-3">
                            <h3 class="font-weight-bold">Phone #</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <h3 class="font-weight-normal">{{ $show->phone }}</h3>
                        </div>
                        <div class="col-md-2 mt-3">
                            <h3 class="font-weight-bold">Location of Crime</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <h3 class="font-weight-normal">{{ $show->loca_crime }}</h3>
                        </div>
                        <div class="col-md-2 mt-3">
                            <h3 class="font-weight-bold">Date Of Crime</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <h3 class="font-weight-normal">{{  date('d-m-Y', strtotime($show->doc))  }}</h3>
                        </div>
                        <div class="col-md-2 mt-3">
                            <h3 class="font-weight-bold">Date of Complaint</h3>
                        </div>
                        <div class="col-md-4 mt-3">
                            <h3 class="font-weight-normal">{{ date('d-m-Y', strtotime($show->created_at)) }}</h3>
                        </div>
                        
                        
                        <div class="col-md-2 mt-3">
                            <h3 class="font-weight-bold">Details</h3>
                        </div>
                        <div class="col-md-10 mt-3">
                            <h3 class="font-weight-normal">{{ $show->incident }}</h3>
                        </div>
                        
                    </div>
                </div>
                
                

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