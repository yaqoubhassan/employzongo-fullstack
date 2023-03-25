@extends('layouts.success')

@section('title','EmployZongo | Account Verification Successful')

@section('sub-content')
  <h2>Awesome!</h2>
  <p>{{$message}}</p>
  <a class="action-btn" href="{{ $redirectUrl }}">Go to platform</a>
@endsection
