@extends('layouts.app')

@section('content')
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-body p-5 text-center">
                    <h3 class="mb-5">Sign in</h3>
                    <div class="form-outline mb-4">
                        <input type="email" placeholder="Email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" placeholder="Password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-lg btn-block w-100" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>

@endsection
