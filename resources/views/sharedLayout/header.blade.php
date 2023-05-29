<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('title')

    <style>
       @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
       @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap');
       .navbar{
        font-family: 'Baloo 2', cursive;
        font-size: 20px ;
        font-weight: 500;
        font-style: normal;
        line-height: 20px;
       }
       .form-inline input[type="search"] {
          border-radius: 25px;
        }
        .form-inline input[type="search"]::placeholder {
          text-align: center;
        }
       .collapse .navbar-nav{
        margin-left: 0%;
        /* width: 100%; */
        /* float: right !important; */
       }
       .collapse .navbar-nav:hover{
        color: #FF6D33 !important;
        /* transition: 1000ms; */
       }
       .collapse form{
        width: 30%;
        margin-left: 30%;
       }
    
       .navbar-brand{
        font-family: 'Baloo 2', cursive;
        font-size: 20px ;
        font-weight: 500;
        font-style: normal;
        line-height: 20px;
       }
       .navbar-brand:hover{
        color: #FF6D33 !important;
        transition: 1000ms;
       }
       
       .navbar-nav a:hover{
        color: #FF6D33 !important; 
        transition: 1000ms;
       }
       .active .nav-link{
        color: #FF6D33 !important;
        border-bottom: #FF6D33 3px solid;
       }
       .nav-link{
        color: black !important;
       }
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #43960f; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #FF6D33; 
}

/* footer */
.footer {
     background: #3b3b3b;
   
     padding-top: 60px;
}

.logo_footer {
border: #ddd solid 2px;
padding: 11px 50px;
display: inline-block;
margin-bottom: 30px;
}
 .footer .address h3 {
  font-family: 'Baloo 2', cursive !important;
color: #fff;
font-size: 30px;
line-height: 35px;
font-weight: bold;
padding-bottom: 20px;
}
 .location_section {
     background-color: #fff;
     margin-bottom: 40px;
     border-radius: 10px;
     padding: 20px 35px;
}
 
 .news .newslatter {
     padding: 7px 23px;
box-shadow: inherit;
border: inherit;
width: 100%;
font-size: 19px;

margin-bottom: 20px;
}
 .submit {
    padding: 9px 0;
border: none;
background: #428713;
color: #fff;
margin-left: -5px;
font-weight: 500;
font-size: 18px;
max-width: 170px;
width: 100%;
border-radius: 30px;
text-transform: uppercase;
transition: all 0.3s ease-in;
}
 .submit:hover {
     background: #ff7e1d;
     
     color: #fff;
     transition: all 0.3s ease-in;

}
 ul.social_link {
  font-family: 'Poppins', sans-serif;
    padding-bottom: 35px;
     padding-top: 7px;
     display: block;
}
 ul.social_link li {
  font-family: 'Poppins', sans-serif;
    display: inline-block;
     padding-right: 4px;

}
 
 ul.social_link li a img {
    width: 30px;
     height: 30px;
}
 ul.social_link li a img:hover {
     background-color: #f4b328 ;
     border-radius: 20px;
}
 ul.Menu_footer li{
  font-family: 'Poppins', sans-serif;
     display: block;
     color: #3e7f21;

}

 

 ul.Menu_footer li a {
  font-family: 'Poppins', sans-serif;
     display: block;
     color: #fcfbfb;
     font-size: 17px;
     cursor: pointer;
    
}
 ul.Menu_footer li a:hover{
     color: #f4b328 ;
}
 

 ul.loca li {
  font-family: 'Poppins', sans-serif;
     color: #fcfbfb;
     display: flex;
     font-size: 16px;
     flex-wrap: wrap;
}
 ul.loca li a {
  font-family: 'Poppins', sans-serif;
     color: #fcfbfb;
     margin-top: 4px;
}
 .copyright {
     padding: 20px 0px;
     margin-top: 55px;
     background-color: #428713;
}
 .copyright p {
  font-family: 'Poppins', sans-serif;
  color: #fff;
     font-size: 18px;
     line-height: 22px;
     text-align: center;
   
}
 .copyright a {
     color: #fff;
}
 .copyright a:hover {
     color: #ff7e1d ;
}



 #footerh2{
  font-family: 'Baloo 2', cursive !important;

 }

.modal .form-control{
  border-radius: 0px;
  border-top: none;
  border-right: none;
  border-left: none;
}
.modal .form-control:focus {
  box-shadow: none;
  border-radius: 0px;
  border-top: none;
  border-right: none;
  border-left: none;
  border-bottom: #FF6D33 1px solid;
}
.input-group-text{
  background-color: #fff;
  border-top:none;
  border-right:none;
  border-left:none;
}
.inputfoucused{
  border-bottom: #FF6D33 1px solid;
  color: #FF6D33;
}
.resgister{
  background-color: #FF6D33;
  color: #fff;
  border-radius: 5px;
  border: none;
  padding: 5px 10px;
  font-size: 15px;
  font-weight: 600;
}
.resgister:hover {
  background-color: #fff;
  color: #FF6D33;
  border-radius: 5px;
  border: 1px solid #FF6D33;
  padding: 5px 10px;
  font-size: 15px;
  font-weight: 600;
}
.modal h4 {
  font-family: 'Baloo 2', cursive !important;
  font-size: 25px;
  font-weight: 600;
  color: #FF6D33;
}

p{
  font-family: 'Poppins', sans-serif;
}

/* Switch Toggle */
.switch6 {  
 
    margin: 0,0,0,0;
    padding: 0,0,0,0;
 }
.switch6-light > span, .switch-toggle > span { 
     color: #000000; 
    }
.switch6-light span span, .switch6-light label, .switch-toggle span span, .switch-toggle label 
{  
    color: #ffffff; 
}

.switch-toggle a, 
.switch6-light span span { display: none; cursor: pointer; }

/* Inner Box  */
.switch6-light { 
  font-family: 'Baloo 2', cursive !important;
    display: block; 
    height: 43px;
    background-color: #428713;
     position: relative; 
     padding: 7px;
     margin: 0px; 
     margin-left:0px;
    border-radius: 23px;
    }

.switch6-light a { 
    display: block; 
    transition: all 0.3s ease-out 0s; 
}

.switch6-light label, 
.switch6-light > span { 
    line-height: 30px;
    vertical-align: middle;
    
}

.switch6-light label {
    font-weight: 800; 
    margin-bottom: 0px; 
    max-width: 100%;

}
.switch6-light input { 

    position: absolute;
     opacity: 0; 
     z-index: 5;
     
     }
.switch6-light input:checked ~ a { 
    right: 0%;
 }
.switch6-light > span { 
    position: absolute; 
    left: -100px; 
    width: 100%; margin: 0px; 
    padding-right: 100px; 
    text-align: left; 
 
}
.switch6-light > span span { 
    position: absolute; 
    top: 0px; 
    left: 0px; 
    z-index: 5; 
    display: block; 
    width: 50%; 
    margin-left: 100px; 
    text-align: center; 
    font-size: 100%;
    font-weight: 700;
    
}
.switch6-light > span span:last-child { 
    left: 50%; 
}
.switch6-light a { 
    position: absolute; 
    right: 50%; 
    top: 0px; 
    z-index: 4; 
    display: block; 
    width: 50%; 
    height: 100%; 
    padding: 0px; 
    border-radius: 25px;
    background-color: #FF6D33;
    border-color: #FF6D33;
}
/* end of switch toggle */

.rounded{
    border-radius: 100% !important;
    object-fit: cover;
    width: 40px;
    height: 40px ;
}

    </style>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

  </head>
  <body style="overflow-x: hidden">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('storage/images/weblogo4.png')}}" alt="webLogo"height="250px" width="30px" class="img-fluid" /> &#xa0&#xa0 Apni Mandi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  @php
  // 
    // $sessionBasedvalid = session()->get('user_email')
    $sessionBasedPic = session()->get('user_pic');
    $passworderror = session()->get('loginPassword');
    $emailNotFound = session()->get('emailNotFound');
  //  dd( $sessionBasedPic);
  @endphp
 
    <div class="collapse navbar-collapse " id="navbarSupportedContent" >
      <div class="col-md-3"></div>
    <div class="col-md-6">
      <ul class="navbar-nav ">
        <li class="nav-item" id="home"onclick="active(this.id)">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item " id="Shop"onclick="active(this.id)">
          <a class="nav-link" href="{{url("/Shop")}}" >Shop</a>
        </li>
        <li class="nav-item " id="about" onclick="active(this.id)">
          <a class="nav-link" href="{{url("/about")}}" >About</a>
        </li>
        <li class="nav-item " id="contact" onclick="active(this.id)">
          <a class="nav-link" href="{{url("/contact")}}" >Contact</a>
        </li>
        @if ($sessionBasedPic=='')
        <li class="nav-item " id="signUp" onclick="active(this.id)">
          {{-- <a class="nav-link" href="{{url("/signup")}}" >Sign Up</a> --}}
          <a class="nav-link" href="#"  onclick="modal1()"> Sign Up </a>
        </li>
        <li class="nav-item " id="signUp" onclick="active(this.id)">
          {{-- <a class="nav-link" href="{{url("/signup")}}" >Sign Up</a> --}}
          <a class="nav-link" href="#"  onclick="modal()"> Sign In </a>
        </li>
        @else 
        @endif
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url("/lang/en")}}" role="button" data-toggle="dropdown" aria-expanded="false">
        English
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{url("/lang/en")}}">English</a>
          <a class="dropdown-item" href="{{url("/lang/ur")}}">Urdu</a>
      </li>
      </ul>
      </div>
   
      {{-- <p>{{$sessionBasedPic}}</p> --}}
      @if ($sessionBasedPic=='')
      <div class="col-md-3 " >
        {{-- <img src="{{asset('storage/images/noUserFileUploaded.png')}}" alt='webLogo' height='150px' width='40px' class='img-fluid float-right'/> --}}
      </div>
      @else
      <div class="col-md-1"></div>
        <div class="col-md-2 ">
         
          {{-- <li class="nav-item dropdown" style="::marker: none"> --}}

            <a class="nav-link dropdown-toggle  float-right " href="{{url("/lang/en")}}" role="button" data-toggle="dropdown" aria-expanded="false">
              {{-- <div class="circular--portrait mr-3"> --}}
                <img src="{{asset('storage/'.$sessionBasedPic)}}" alt='webLogo' height="40px" width="40px"  class='img-fluid rounded'   />
              {{-- </div> --}}
            </a>
            <div class="dropdown-menu  float-right">
              <a class="dropdown-item" id="ProfilePage" href="{{url("/ProfilePage")}}">Profile</a>
              @php
              $cartlen = session()->get('cartItems')
              @endphp
              @if($cartlen)
              <a class="dropdown-item" id="ProfilePage" href="{{url("/ProfilePage")}}">Cart <span class="float-right text-success">{{$cartlen}}</span></a>
              @else
              <a class="dropdown-item" id="ProfilePage" href="{{url("/ProfilePage")}}">Cart</a>
              @endif
              <a class="dropdown-item" href="{{url("/logout")}}">Logout</a>
            </div>
          {{-- </li> --}}
        </div>
      

      @endif
     
      
    </div>

 
</nav>


  <!-- Button trigger modal -->
<!-- Button trigger modal -->

<!-- Modal -->

<div class="modal fade " id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
 
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
        {{-- <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div> --}}
      <div class="modal-body" >
        <div class="container-fluid">
         
          <form action="{{url('/')}}/signUp" method="post" enctype="multipart/form-data" id="signUpForm">
            <h4 class="text-center">Sign Up</h4>
            @csrf
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend" style="border:none">
                  <span class="input-group-text" id="UserName1"><i class="fa-solid fa-user"></i> </span>
                </div>
                <input type="text" id="UserName" name="UserName" class="form-control" placeholder="Username" aria-label="Username" value="{{old('UserName')}}" aria-describedby="UserName1" data-toggle="tooltip" data-placement="right" title="Enter your name not more then 20 Characters" onfocus="color(this.id)" onblur="colorRevert(this.id)">
              </div>
              @error('UserName')
              <span class="text-warning">{{$message}}</span>
             @enderror
            </div>
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend" style="border:none">
                  <span class="input-group-text" id="email1"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="text" id="email" name="email" class="form-control" placeholder="example@gmail.com" aria-label="email" value="{{old('email')}}" aria-describedby="email1" data-toggle="tooltip" data-placement="right" title="Enter your email like Given Formate 'example@gmail.com'" onfocus="color(this.id)" onblur="colorRevert(this.id)">
              </div>
              @error('email')
              <span class="text-warning">{{$message}}</span>
             @enderror
            </div>
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend" style="border:none">
                  <span class="input-group-text" id="CNIC1"><i class="fa-solid fa-id-card"></i></span>
                </div>
                <input type="text" id="CNIC" name="CNIC" class="form-control" placeholder="3520147826311" aria-label="CNIC"  value="{{old('CNIC')}}" aria-describedby="CNIC1" data-toggle="tooltip" data-placement="right" title="Enter Your Name Cnic with out dashes" onfocus="color(this.id)" onblur="colorRevert(this.id)">
              </div>
              @error('CNIC')
              <span class="text-warning">{{$message}}</span>
             @enderror
            </div>
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend" style="border:none">
                  <span class="input-group-text" id="mobile1"><i class="fa-solid fa-phone"></i></span>
                </div>
                <input type="numeric" id="mobile" name="mobile" class="form-control" placeholder="03124513576" aria-label="mobile" value="{{old('mobile')}}" aria-describedby="mobile1" data-toggle="tooltip" data-placement="right" title="Enter Your Phone Number With out Country Code" onfocus="color(this.id)" onblur="colorRevert(this.id)">
              </div>
              @error('mobile')
              <span class="text-warning">{{$message}}</span>
             @enderror
            </div>
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend" style="border:none">
                  <span class="input-group-text" id="password1"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="************" aria-label="password" aria-describedby="password1" data-toggle="tooltip" data-placement="right" title="Enter Your Password:'Uk322085%' " onfocus="color(this.id)" onblur="colorRevert(this.id)">
                <div class="input-group-append">
                  <span class="input-group-text" id="eye" onclick="showPassowrd()"><i class='fa-solid fa-eye-slash'></i></span>
                </div>
              </div>
            </div>
            @error('password')
            <span class="text-warning">{{$message}}</span>
           @enderror
           {{-- <input type="profilePic" name="profilePic" id="profilePic" style="display:none" class="form-control" placeholder="************" aria-label="Confirm1" aria-describedby="Confirm1" onfocus="color(this.id)" onblur="colorRevert(this.id)"> --}}
            <div class="form-group">
                <div class="input-group mb-3">
                  <div class="input-group-prepend" style="border:none">
                    <span class="input-group-text" id="Confirm1"><i class="fa-solid fa-lock"></i></span>
                  </div>
                  <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="************" aria-label="Confirm1" aria-describedby="Confirm1" data-toggle="tooltip" data-placement="right" title="Enter Confirm Password must be same as Password" onfocus="color(this.id)" onblur="colorRevert(this.id)">
                 
                </div>
                @error('confirmPassword')
                <span class="text-warning">{{$message}}</span>
               @enderror
            </div>
            <div class="form-group">
              {{-- <input type="checkbox" name="farme" id="farme" />
              <label for="farme"><span><span></span></span>I am a Farmer</label> --}}
              <div class="switch6 " >
                <label class="switch6-light" >
                        <input type="checkbox" name="retailer" id="retailer" onclick="calBreak()" >
                        <span data-toggle="tooltip" data-placement="right" title="Which type of Acount You want">
                            <span>Farmer</span>
                            <span>Retailer</span>
                        </span>
                        <a class="btn btn-primary"></a>
                </label>
              </div>
            </div>
              <div class="form-group" data-toggle="tooltip" data-placement="right" title="Agreemant must be Checked">
                <input type="checkbox" name="agreeTerm" id="agreeTerm" class="agree-term" />
                <label for="agreeTerm" class="label-agree-term" ><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                @error('agree-term')
                <span class="text-warning">{{$message}}</span>
               @enderror
              </div>
              <div class="form-group form-button">
                <button type="submit" class="btn col-md-12 resgister">Register</button>
              </div>
          </form>
          <form action="{{url('/')}}/signIn" method="post" enctype="multipart/form-data" class="d-none" id="signInForm">
            @csrf
            <h4 class="text-center">Sign In</h4>
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend" style="border:none">
                  <span class="input-group-text" id="emailForSignIn1"><i class="fa-solid fa-envelope"></i></span>
                </div>
                <input type="text" id="emailForSignIn" name="emailForSignIn" value="{{old('emailForSignIn')}}" class="form-control" placeholder="example@gmail.com" aria-label="emailForSignIn" data-toggle="tooltip" data-placement="right" title="Enter your Registered Email" aria-describedby="emailForSignIn1" onfocus="color(this.id)" onblur="colorRevert(this.id)">
              </div>
             
              @error('emailForSignIn')
              <span class="text-danger">{{$message}}</span>
             @enderror
             
            </div>
         
            <div class="form-group">
              <div class="input-group mb-3">
                <div class="input-group-prepend" style="border:none">
                  <span class="input-group-text" id="passwordForSignIn1"><i class="fa-solid fa-lock"></i></span>
                </div>
                <input type="password" name="passwordForSignIn" id="passwordForSignIn" class="form-control" placeholder="************" aria-label="passwordForSignIn" aria-describedby="passwordForSignIn1" data-toggle="tooltip" data-placement="right" title="Enter Your Password" onfocus="color(this.id)" onblur="colorRevert(this.id)">
              
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
                <button type="submit" class="btn col-md-12 resgister" id="signUpButton">Sign In</button>
              </div>
          </form>
          <h6 class="text-center"><span id="not"> Don't have a Apni Mandi account yet? </span><a type="button" onclick="hide()" style="color:#428713" id="SignupSignin" >Register</a></h6>
        </div>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div> --}}
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary btn-lg d-none" data-toggle="modal" data-target="#modelId">
  Launch
</button>

{{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
   --}}

<script>

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


  window.onload = function(){

    var url = window.location.href;
    if(url.includes("Shop")){
      document.getElementById("Shop").classList.add("active");
    }
    else if(url.includes("about")){
      document.getElementById("about").classList.add("active");
    }
    else if(url.includes("contact")){
      document.getElementById("contact").classList.add("active");
    }
    else if(url.includes("signup")){
      document.getElementById("signUp").classList.add("active");
    }
    else if(url.includes("ProfilePage")){
      document.getElementById("ProfilePage").classList.add("active");
    }
    else{
      document.getElementById("home").classList.add("active");
    }
  }
function color(id){
   document.getElementById(id+"1").classList.add("inputfoucused");
}

function colorRevert(id){
   document.getElementById(id+"1").classList.remove("inputfoucused");
}

function hide(){

   if(document.getElementById("signInForm").classList.contains("d-none")){
    document.getElementById("not").innerHTML = "Don't have a Apni Mandi account yet?";
    document.getElementById("signInForm").classList.remove("d-none");
    document.getElementById("signUpForm").classList.add("d-none");
    document.getElementById("SignupSignin").innerHTML = " Sign Up";

   }
   else{
    document.getElementById("not").innerHTML = "already have an account ";
    document.getElementById("SignupSignin").innerHTML = " Log in";
    document.getElementById("signUpForm").classList.remove("d-none");
    document.getElementById("signInForm").classList.add("d-none");
   }
}

function modal(){
  //sign in
    document.getElementById("signUpForm").classList.add("d-none");
    document.getElementById("signInForm").classList.remove("d-none");
 
    $("[data-toggle = modal]").trigger({ type: "click" });
    // alert("ali");
}

function modal1(){
  // alert("ali");

  //sign Up
     document.getElementById("signUpForm").classList.remove("d-none");
    document.getElementById("signInForm").classList.add("d-none");
    $("[data-toggle = modal]").trigger({ type: "click" });
}

let hideEye=0;
function showPassowrd(){
  if (hideEye==0){
    // alert("oneclick");
    let a = document.getElementById("password");
 let b =a.value;
 a.setAttribute('type','text');
 document.getElementById("eye").innerHTML="<i class='fa-solid fa-eye'></i>"
 hideEye++;
  }
  else{
    // alert("Secondclick");
    let d = document.getElementById("password");
 let b =d.value;
 document.getElementById("eye").innerHTML = "<i class='fa-solid fa-eye-slash'></i>"
  d.setAttribute('type','password');
 hideEye--;
  }
}


let hideEye2=0;
function showPassowrd1(){
  if (hideEye2==0){
    // alert("oneclick");
    let a = document.getElementById("passwordForSignIn");
 let b =a.value;
 a.setAttribute('type','text');
 document.getElementById("Signeye").innerHTML="<i class='fa-solid fa-eye'></i>"
 hideEye2++;
  }
  else{
    // alert("Secondclick");
    let d = document.getElementById("passwordForSignIn");
 let b =d.value;
 document.getElementById("Signeye").innerHTML = "<i class='fa-solid fa-eye-slash'></i>"
  d.setAttribute('type','password');
 hideEye2--;
  }
}

</script>