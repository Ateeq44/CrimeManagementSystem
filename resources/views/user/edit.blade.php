@extends('layout.app')

<title>
    Update Police Station
</title>

@section('content')

<!-- Page body -->
<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards" style="display: flex;justify-content: center;">
      <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h2 class="">
                    Update Police Station             
                </h2>
            </div>
            <div class="card-body p-3 border-radius-0">

             <form action="{{ url('user_update/'.$user->id) }}" method="POST">
                @csrf
                <div class="form-outline mb-4">
                  <label class="form-label" >Name</label>
                  <input type="text" name="name" value="{{ $user->name }}" class="form-control">
              </div>
                  @if($user->role_as == 0)

              <div class="form-outline mb-4">
                  <label class="form-label" >Police Station</label>
                  <select class="form-control" name="ps_id">
                    @foreach($police_station as $value)
                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
            </div>
            @endif
            <div class="form-outline mb-4">
              <label class="form-label" >Email</label>
              <input type="Gmail" name="email" value="{{ $user->email }}" class="form-control">
          </div>

          <div class="form-outline mb-4">
              <label class="form-label" >Password</label>
              <input type="text" name="password" value="{{ $user->password }}" class="form-control">
          </div>
          <button type="submit" class="btn btn-success btn-square w-100 btn-block mb-4">Submit</button>
      </form>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>



@endsection
