@extends('layouts.app')

@section('content')
<section class="">

        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6  bg-light p-5">

                <h3 class="text-center">
                    Welcome {{ Auth::user()->name }}
                </h3>
                <p  class="text-center mt-3  fa-2x">Enter New Complain</p>

                <form action="" method="POST">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example3">Full Name</label>
                        <input type="text" id="form6Example3" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example3">Cnic #</label>
                        <input type="text" id="form6Example3" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example4">Address</label>
                        <textarea class="form-control"></textarea>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example5">Location of Crime</label>
                        <input type="email" id="form6Example5" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example5">Police Station</label>
                        <input type="email" id="form6Example5" class="form-control">
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example5">Date Of Crime</label>
                        <input type="date" id="form6Example5" class="form-control">
                    </div>

                    <!-- Number input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Type of Crime</label>
                        <select class="form-control" name="type_crime">
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
                        <label class="form-label" for="form6Example6">Detail of incident</label>
                        <textarea class="form-control" name="crime_details"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100 btn-block mb-4">Submit</button>
                </form>
            </div>
        </div>
</section>

@endsection
