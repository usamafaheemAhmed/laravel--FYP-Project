@extends('sharedLayout.main')
@push('title')
    <title>Apni Mandi.View</title>
    <style>
      #form{
    z-index: 2; 
    position: absolute; 
    top: 0; 
    left: 0; 
    right: 0; 
    bottom: 0; 
    background-color: rgba(0,0,0,0.5); 
        }

      </style>
@endpush
@section('main-section')

<div class="container-fluid" >
    <h3 class="text-center mt-3">Data Stored in Table</h3>
    <div class="table-responsive">
        <table class="table table-bordered" style="margin-top:20px;">
            <thead>
              <tr>
                <th>id</th>
                <th>FirstName</th>
                <th>middleName</th>
                <th>lastName</th>
                <th>Email</th>
                <th>Job</th>
                <th>Mobile</th>
                <th>imgPath</th>
                <th>img</th>
                <th class="text-center" colspan="2">Actions</th>
              </tr>
            </thead>
            <tbody>
                    {{-- <pre>
                        {{print_r($customer)}}
                    </pre> --}}
                   @php
                     $deleteCustomer = [];
                   @endphp
    
                @foreach ($customer as $customer)
              <tr>
                <th scope="row">{{$customer->customer_id }}</th>
                <td>{{$customer->firstName }}</td>
                <td>{{$customer->middleName }}</td>
                <td>{{$customer->lastName }}</td>
                <td>{{$customer->email }}</td>
                <td>{{$customer->job}}</td>
                <td>0{{$customer->mobile}}</td>
                <td>{{$customer->imgPath}}</td>
                <td><img src="{{asset('storage/'.$customer->imgPath)}}" class="img-fluid" height="250" width="200"></td>
                
                <td class="text-center" style="width: 200px">
                <button class="btn btn-outline-primary" style="width: 70px" onclick="forViwe({{$customer->customer_id}})">Edit</button>
                <a href="{{url("/delete")}}/{{$customer->customer_id}}"><button class="btn btn-outline-danger" style="width: 70px">Delete</button></a>
            </td>
              </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    

      <div class="row">
            <div class="col-md-12">
                <div class="d-flex float-right">
                    <a href="{{url("/signup")}}">
                        <button class="btn btn-primary">Add New</button>
                    </a>
                </div>
            </div>
      </div>
</div>
<div class="dflex" style="padding-top:383px"></div>

    
<script>
    var id = 0 ;
    document.cookie = "myjavascriptVar = " + id;
  
    function forViwe(id){
        $.ajax({
            url: "{{url('/')}}/edit/"+id,
            type: "GET",
            success: function(data){
                // console.log(data);
                $('#firstName').val(data.firstName);
                $('#middleName').val(data.middleName);
                $('#lastName').val(data.lastName);
                $('#email').val(data.email);
                $('#job').val(data.job);
                $('#mobile').val("0"+data.mobile);
                $('#customer_id').text(data.customer_id);
                id = data.customer_id;
                // window.location.href = window.location.href+'?id='+id;
                document.cookie = "myjavascriptVar = " + id ;
            }});
            document.getElementById('form').classList.remove('d-none');
          }
    function close(){
        alert("click");
        document.getElementById("form").classList.add("d-none");
    }

</script>
@php 
 $updatedID = $_COOKIE['myjavascriptVar'];
//  $updatedID = 0;
@endphp
{{-- <script>
     function update(){
      let id = $('#customer_id').text();
        $.ajax({
          url: "{{url('/')}}/update/"+id,
        //   headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                firstName: $('#firstName').val(),
                middleName: $('#middleName').val(),
                lastName: $('#lastName').val(),
                email: $('#email').val(),
                job: $('#job').val(),
                mobile: $('#mobile').val(),
            },

            success: function(data){
                console.log(data);
              // document.getElementById('form').classList.remove('d-none');

            }});
          }
</script> --}}




<div class="container-fluid d-none" id="form">
    <div class="col-md-12 "style=" padding-top:8%" onclick="close()"></div>
    <div class="d-flex">
    <div class="col-md-3" onclick="close()"></div>
    <div class="col-md-6 bg-dark shadow-lg text-white p-3" style="border-radius: 25px;">
                <div class="col-md-11 text-center pl-"><h5>Selected Product's ID is <span id="customer_id"></span></h5></div>
                
                <form action="{{url('/')}}/update/{{$updatedID}}" method="post">
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
                <div class="col-md-12 mt-3">
                   @php
                    $message= $errors->has('mobile') ? $errors->first('mobile') : '';
                   @endphp
                    <x-input label="Mobile Number" type="number" name="mobile" id="mobile" placeholder="Mobile Number" value="{{old('mobile')}}" :errorMessage="$message" />
                    
                </div>
                <div class="col-md-12 mt-3">
                    <button class="btn btn-primary col-md-12 mt-3" onclick="update()">Update</button>
                    {{-- <button class="btn btn-primary col-md-12 mt-3" onclick="close()">close</button> --}}
                </div>
         
                </div>
            </form>    
    </div>
    <div class="col-md-3 "onclick="close()"></div>
</div>
<div class="col-md-12 "style=" padding-top:13%" onclick="close()"></div>
</div>


@endsection
