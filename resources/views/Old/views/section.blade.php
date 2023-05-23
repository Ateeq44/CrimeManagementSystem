@extends('layout.app')

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
