@extends('sharedLayout.main')
@push('title')
    <title>Apni Mandi.For.Get.Password</title>



<style>
    
    .deen .form-control{
  border-radius: 0px;
  border-top: none;
  border-right: none;
  border-left: none;
}
 .deen .form-control:focus {
        box-shadow: none;
        border-radius: 0px;
        border-top: none;
        border-right: none;
        border-left: none;
        border-bottom: #FF6D33 1px solid;
      }
      
</style>
   
    @endpush
    @section('main-section')

    <div class="container mt-5 deen" style="height: 700px">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{url('/')}}/generateCode" method="post" enctype="multipart/form-data" id="signInForm">
                    @csrf
                    <h4 class="text-center"> For get Password</h4>
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend" style="border:none">
                          <span class="input-group-text" id="emailForSignIn21"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <input type="text" id="emailForSignIn2" name="email" value="{{old('emailForSignIn')}}" class="form-control" placeholder="example@gmail.com" aria-label="emailForSignIn" data-toggle="tooltip" data-placement="right" title="Enter your Registered Email" aria-describedby="emailForSignIn1" onfocus="color(this.id)" onblur="colorRevert(this.id)">
                      </div>
                     
                      @error('emailForSignIn')
                      <span class="text-danger">{{$message}}</span>
                     @enderror
                     
                    </div>
                 
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend" style="border:none">
                          <span class="input-group-text" id="passwordForSignIn31"><i class="fa-solid fa-comments"></i></span>
                        </div>
                        <input type="password" name="code" id="passwordForSignIn3" class="form-control" placeholder="************" aria-label="passwordForSignIn" aria-describedby="passwordForSignIn1" data-toggle="tooltip" data-placement="right" title="Enter Your Code" onfocus="color(this.id)" onblur="colorRevert(this.id)">
                      
                        <div class="input-group-append">
                          <span class="input-group-text" id="Signeye" onclick="showPassowrd1()"><i class='fa-solid fa-eye-slash'></i></span>
                        </div>
                      
                      
                      </div>
                      @error('passwordForSignIn')
                      <span class="text-danger">{{$message}}</span> <br>
                      @if($message)
                      <span class=" text-center">Do you For Get <a href="{{url("/ForGetPassword")}}">Password</a></span>
                      @endif
                     @enderror
                    </div>
                  
                      <div class="form-group form-button">
                        <button type="submit" class="btn col-md-12 resgister" id="signUpButton">Sing In</button>
                      </div>
                  </form>
                  @php
                  $resetPassword = session()->get('showTost')
              @endphp
              @if($resetPassword)
              {{-- <script>alert("your New Password is:"+{{$resetPassword}})</script> --}}
                  <p class="text-center">Your New Password is: {{$resetPassword}}</p>
              @endif
            </div>
            <div class="col-md-3"></div>
        </div>
       

    </div>






<script>
    function color(id){
   document.getElementById(id+"1").classList.add("inputfoucused");
}

function colorRevert(id){
   document.getElementById(id+"1").classList.remove("inputfoucused");
}

</script>

    @endsection