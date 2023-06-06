
@extends('layout.app')

<title>
  Profile Setting
</title>

@section('content')

  <div class="container pt-5">
    <div class="row row-cards">
      <div class="col-12">
        <form action="{{ url('profile-update/'.$show->id) }}" method="post">
          @csrf
            <h4 class="card-title">Profile Settings</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required="" value="{{ $show->name }}">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <label for="email" class="control-label">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" disabled="" value="{{ $show->email }}">
                </div>
              </div>
              <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input type="text" name="password" id="password" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="text-end">
            <div class="d-flex justify-content-end">
              <a href="{{ url('/') }}" class="btn btn-secondary text-white " style="margin-right:20px;">Cancel</a>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

