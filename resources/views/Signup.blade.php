@extends('sharedLayout.main')
@push('title')
    <title>Apni Mandi.SignUp</title>

@endpush
@section('main-section')

<div class="condainer-fluid " style="height: 605px;">
    <div class="col-md-12">
        <h2 class="text-center mt-4">Entering data in Table</h2>
    </div>
    <div class="d-flex" style=" padding-top:3%">
        <div class="col-md-3"></div>
        <div class="col-md-6 bg-dark shadow-lg text-white p-3" style="border-radius: 25px;">

                    <h5 class="text-center">Select Product</h5>
                    <form action="{{url('/')}}/signup" method="post" enctype="multipart/form-data">
                        @csrf
                   
                    <div class="row mt-2" id="productDetails">
                    <div class="col-md-4">
                        <label for="firstName">First Name</label>
                        <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name" value="{{old('firstName')}}" >
                        @error('firstName')
                            <span class="text-warning">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-4" >
                        <label for="middleName">Middle Name</label>
                        <input type="text" name="middleName" id="middleName" class="form-control" placeholder="Middle Name" value="{{old('middleName')}}">
                        @error('middleName')
                            <span class="text-warning">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="lastName">last Name</label>
                        <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name" value="{{old('lastName')}}" >
                        @error('lastName')
                            <span class="text-warning">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Current Address" value="{{old('email')}}">
                        @error('email')
                            <span class="text-warning">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-2">
                        <label for="job">Job</label>
                        <input type="text" name="job" id="job" class="form-control" placeholder="Current Job" value="{{old('job')}}" >
                        @error('job')
                            <span class="text-warning">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-3">
                        <label for="image">Profile Image</label>
                        <input type="file" name="image" id="image" class="form-control" placeholder="Your Image" value="{{old('job')}}" >
                        @error('image')
                            <span class="text-warning">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mt-3">
                       @php
                        $message= $errors->has('mobile') ? $errors->first('mobile') : '';
                       @endphp
                        <x-input label="Mobile Number" type="number" name="mobile" id="mobile" placeholder="Mobile Number" value="{{old('mobile')}}" :errorMessage="$message" />
                        
                    </div>
                    <div class="col-md-12 mt-3">
                        <button class="btn btn-primary col-md-12 mt-3" onclick="calculate()">Calculate</button>
                    </div>
             
                    </div>

                    </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@endsection