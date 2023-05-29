@extends('sharedLayout.main')
@push('title')
    <title>Apni Mandi.SignUp</title>

    <style>
  
      #loginlink{color: #ff7e1d;font-size: 20px; width: 800;font-family: 'Baloo 2', cursive !important;}
      #loginlink:hover{color: #428713;}
    </style>

@endpush
@section('main-section')


<div class="container-fluid">
  <div class="row" style="height: 290px; padding-top:10%;margin-bottom:25%;">
    <div class="col-md-3"></div>
    <div class="col-md-6 text-center">
      <h4>Your {{$searchBYemail}} is alredy Registered</h4>
      <p>Please use another email or Select <a href="#" data-toggle="modal" data-target="#modelId" id="loginlink">Sign In</a> </p>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>

@endsection