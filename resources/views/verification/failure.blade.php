@extends('layouts.failure')

@section('title','EmployZongo | Account Verification Failed')

@section('sub-content')
  <h2>Oops!</h2>
  <p>{{$message}}</p>
  <a class="action-btn" href="{{$redirectUrl}}">Go to platform</a>
@endsection
