
@extends('sharedLayout.main')
@push('title')
    <title>Apni Mandi.SignUp</title>

    <style>
  
      #loginlink{color: #ff7e1d;font-size: 20px; width: 800;font-family: 'Baloo 2', cursive !important;}
      #loginlink:hover{color: #428713;}
      h5 a{
        color: #428713;
      }
      h5 a:hover{
        color: #ff7e1d;
      }
      p a{
        color: #428713;
        margin-left: 10px ;
      }
      p a:hover{
        color: #ff7e1d;
        font-size: 20px;
      }

      p span{
        color: #428713;
      }
      p span:hover{
        color: #ff7e1d;
      }

      .borders{
        height:700px;
        /* border-style: dashed; */
        border: 2px dashed #4187136b ;
        margin-top:1%;
        padding-top: 20%;
        /* padding-left: 10% !important; */
        /* padding-right: 3% !important; */
        border-radius: 2%;
        /* width: 95%; */
      }
      .borders h4{
        font-family: 'Poppins', sans-serif;
      }
      #staticBackdropLabel{
        font-family: 'Baloo 2', cursive !important;
      }
      .modal-body .form-control{
        font-family: 'Poppins', sans-serif;
      }
      .active{
        border:none;
        box-shadow: none;
        outline:0;
      }
      .addNewProduct{
        color: #428713;
        text-align: center;
      }

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

.roundeder{
    border-radius: 100% !important;
    object-fit: cover;
    width: 150px;
    height: 150px ;
}
    </style>

@endpush
@section('main-section')


  @foreach ($loggedInUser as $loggedInUser)

  @php
      $findmail = $loggedInUser->email;
      $searchByemail = session()->get('user_email');
      $findid = $loggedInUser->id;
      $img = $loggedInUser->profilePic;
      session()->put('user_pic',$img);
     $g= $loggedInUser->userType;
      session()->put('loggedInUseruserType',$g);

      // $_loggedInUserName = $loggedInUser->userName;
      // $_loggedInEmail = $loggedInUser->email;
      // $_loggedInCNIC= $loggedInUser->CNIC;
      // $_loggedInPhoneNumber= $loggedInUser->phoneNumber;
      // $_loggedInUserPassword= $loggedInUser->userPassword;
      // $_loggedInProfilePic= $loggedInUser->profilePic;
      // $_loggedInAddress= $loggedInUser->Address;

  @endphp  
  {{-- <p>{{$searchByemail}}</p> --}}
  {{-- <p>usamafaheemahmed</p> --}}
  @if ($findmail == $searchByemail)
  
  
    {{-- <p> {{$loggedInUser->id}}</p> --}}

    <div class="container-fluid">
      <div class="row">
        {{-- <div class="col-md-2   border" style="height: 800px; overflow: hidden"> --}}
        <div class="col-md-2   border" style="height: 800px; ">
          <div class="text-center">

         @if ($img=='')

          <p><img src="{{asset('storage/images/noUserFileUploaded.png')}}" alt='webLogo' height='50%' width='70%' class='img-fluid mt-3'  /></p>

         @else
{{-- 
         <p>{{$loggedInUser->profilePic}}</p>
         <p>{{$img}}</p> --}}

         <p><img src="{{asset('storage/'.$img)}}" alt='webLogo' height='50%' width='70%' class='img-fluid roundeder mt-3'  /></p>
         
         
         
         
         @endif
          <p class="text-center"><span><i class="fa-solid fa-quote-left"></i> {{$loggedInUser->userType}} <i class="fa-solid fa-quote-right"></i></span></p>

         <div class="text-left">
           <p><span> <i class="fa-solid fa-user"></i> {{$loggedInUser->userName}}</span></p>
           <p style="word-wrap: break-word;"><span><i class="fa-solid fa-envelope"></i> {{$loggedInUser->email}}</span></p>
           <p><span><i class="fa-solid fa-phone"></i> {{$loggedInUser->phoneNumber}}</span></p>
           <p><span><i class="fa-solid fa-id-card"></i> {{$loggedInUser->CNIC}}</span></p>
           {{-- <p style="overflow: hidden"><span>{{$loggedInUser->userPassword}}</span></p> --}}
 
           </div>
          </div>

     
          <p>For help contact: </p>
          <p><a href="mailto:usamafaheemahmed80@gmail.com"><i class="fa-brands fa-google"></i></a>
          <a  href="https://www.facebook.com/help/668969529866328/?helpref=uf_share"><i class="fa-brands fa-facebook"></i></a>
          <a  href="https://www.snapchat.com/add/usamafaheema?share_id=YRr4M8GoQMo&locale=en-GB"><i class="fa-brands fa-snapchat"></i></a>
          <a  href="https://instagram.com/usama.faheem.142?igshid=ZmZhODViOGI="><i class="fa-brands fa-instagram"></i></a>
          <a  href="whatsapp:contact=03124513576@s.whatsapp.com"><i class="fa-brands fa-whatsapp"></i></a>
         
          
          </p>
            
          
        </div>
        @endif

        @endforeach 

        <div class="col-md-10" style="padding-top: 1%">

          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" id='product' onclick="profileMenu(this.id)">Cart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="profile" onclick="profileMenu(this.id)">Profile</a>
            </li>
            <li class="nav-item d-none">
        
              <a class="nav-link" href="#" id="ratings" onclick="profileMenu(this.id)">Ratings</a>
         
              {{-- <a class="nav-link" href="#" id="ratings" onclick="profileMenu(this.id)">Ratings</a> --}}
            </li>
          </ul>

          @php
          $cartlen = session()->get('cartItems');
          $user_email = session()->get('user_email');
          
            if($cartlen<0){
              $cartlen ='';
            }
          @endphp
          {{-- <p>{{$user_email}}</p> --}}
          @if($cartlen)
       

          <div id="product1">
             {{-- Cart start --}}
     
          @foreach($cartData as $cartData)
          @php
            $CartMail=$cartData->Buyer;
          @endphp
          @if($CartMail==$user_email)
          
          <div class="col-md-12">
            <div class="card-deck" style=" Padding-top:3%;">
              <div class="card">
                <div class="card-body text-left">
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <td style="width: 80%"></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </thead>
                    <tr>
                      <td>
                        <h5 class="card-title">{{$cartData->UserName}}</h5>
                        <p class="card-text">{{$cartData->seller}}</p>
                        <p class="card-text"><small class="text-muted">{{$cartData->productPrice}}</small></p>
                      </td>
                      <td>
                        <h5 class="card-title">{{$cartData->productQuantity}}</h5>
                      </td>
                      <td>
                        <form action="{{url('/')}}/removeCartItem" method="post" enctype="multipart/form-data" id="signUpForm">
                          @csrf
                          <input type="text" name="cartId" value="{{$cartData->id}}" class="d-none">
                          <Button type="submit" class="btn btn-outline-danger"> Remove</Button>
                        </form>
                      </td>
                    </tr>
                  </table>
                 
                </div>
              </div>
            </div>
          </div>

      
          @endif
        @endforeach
      </div>

      {{-- cart end --}}

          @else
          <div class="borders text-center d-none" id="ratings1" >
            {{-- <center> --}}
          <p ><img src=" {{asset('storage/images/product.png')}}" alt='webLogo'  width='10%' class='img-fluid'  /></p>
          <br>
              <h4>Currently You dont have any Cart</h4>
            {{-- </center> --}}
          </div>
          @endif
        
          {{-- $_loggedInUserName = $loggedInUser->userName;
          $_loggedInEmail = $loggedInUser->email;
          $_loggedInCNIC= $loggedInUser->CNIC;
          $_loggedInPhoneNumber= $loggedInUser->phoneNumber;
          $_loggedInUserPassword= $loggedInUser->userPassword;
          $_loggedInProfilePic= $loggedInUser->profilePic;
          $_loggedInAddress= $loggedInUser->Address; --}}
       

          <div class="  mt-4 text-center d-none deen" id="profile1" >
            <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-9">
                <!-- It is never too late to be what you might have been. - George Eliot -->
                <form action="{{url('/')}}/RetailerUpdate" method="post" enctype="multipart/form-data" id="signUpForm">
                    @csrf
                    <div class="row">
                    <div class="form-group col-md-6">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend" style="border:none">
                          <span class="input-group-text" id="UserName11"><i class="fa-solid fa-user"></i> </span>
                        </div>
                        <input type="text" id="UserName1" name="UserName" class="form-control" placeholder="Username" aria-label="Username" value="{{$loggedInUser->userName}}" aria-describedby="UserName1" data-toggle="tooltip" data-placement="right" title="Enter your name not more then 20 Characters" onfocus="color(this.id)" onblur="colorRevert(this.id)">
                      </div>
                      @error('UserName')
                      <span class="text-warning">{{$message}}</span>
                     @enderror
                    </div>
                    <div class="form-group col-md-6">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend" style="border:none">
                          <span class="input-group-text" id="email11"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <input type="text" id="email1" name="email" class="form-control" placeholder="example@gmail.com" aria-label="email" value="{{$loggedInUser->email}}" aria-describedby="email1" data-toggle="tooltip" data-placement="right" title="Enter your email like Given Formate 'example@gmail.com'" onfocus="color(this.id)" onblur="colorRevert(this.id)">
                      </div>
                      @error('email')
                      <span class="text-warning">{{$message}}</span>
                     @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend" style="border:none">
                          <span class="input-group-text" id="CNIC11"><i class="fa-solid fa-id-card"></i></span>
                        </div>
                        <input type="text" id="CNIC1" name="CNIC" class="form-control" placeholder="3520147826311" aria-label="CNIC"  value="{{$loggedInUser->CNIC}}" aria-describedby="CNIC1" data-toggle="tooltip" data-placement="right" title="Enter Your Name Cnic with out dashes" onfocus="color(this.id)" onblur="colorRevert(this.id)">
                      </div>
                      @error('CNIC')
                      <span class="text-warning">{{$message}}</span>
                     @enderror
                    </div>
                    <div class="form-group col-md-6">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend" style="border:none">
                          <span class="input-group-text" id="mobile11"><i class="fa-solid fa-phone"></i></span>
                        </div>
                        <input type="numeric" id="mobile1" name="mobile" class="form-control" placeholder="03124513576" aria-label="mobile" value="0{{$loggedInUser->phoneNumber}}" aria-describedby="mobile1" data-toggle="tooltip" data-placement="right" title="Enter Your Phone Number With out Country Code" onfocus="color(this.id)" onblur="colorRevert(this.id)">
                      </div>
                      @error('mobile')
                      <span class="text-warning">{{$message}}</span>
                     @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend" style="border:none">
                          <span class="input-group-text" id="passwordRetailer11"><i class="fa-solid fa-lock"></i></span>
                        </div>
                        <input type="password" name="password" id="passwordRetailer1" class="form-control" placeholder="************" value="" aria-label="password" aria-describedby="password1" data-toggle="tooltip" data-placement="right" title="Enter Your Password:'Uk322085%' " onfocus="color(this.id)" onblur="colorRevert(this.id)">
                        <div class="input-group-append">
                          <span class="input-group-text" id="eyeRetailer" onclick="showeyeRetailerPassowrd()"><i class='fa-solid fa-eye-slash'></i></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="text-warning">{{$message}}</span>
                   @enderror
                    </div>
              
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend" style="border:none">
                            <span class="input-group-text" id="image11"><i class="fa-solid fa-image"></i></span>
                          </div>
                          <input type="file" name="image" id="image1" class="form-control" placeholder="Your Image" value="{{$loggedInUser->profilePic}}"  data-toggle="tooltip" data-placement="right" title="Enter Your Profile Pic"  onfocus="color(this.id)" onblur="colorRevert(this.id)" >
                      </div>
                      @error('image')
                      <span class="text-warning">{{$message}}</span>
                     @enderror
                      </div>
                    </div>
                      <div class="form-group">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend" style="border:none">
                            <span class="input-group-text" id="address11"><i class="fa-solid fa-location-dot"></i></span>
                          </div>
                          <input type="numeric" id="address1" name="address" class="form-control" placeholder="address" aria-label="address" value="{{$loggedInUser->Address}}" aria-describedby="mobile1" data-toggle="tooltip" data-placement="right" title=" address for mate area City Country" onfocus="color(this.id)" onblur="colorRevert(this.id)">
                        </div>
                        @error('address')
                        <span class="text-warning">{{$message}}</span>
                       @enderror
                      </div>
            
            
                      <div class="form-group form-button">
                        <button type="submit" class="btn col-md-12 resgister">Update</button>
                      </div>
                    </form>
            </div>
            </div>
          </div>

     
          
    

          {{-- <div class="  mt-4 text-center d-none deen" id="profile1" >
            <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-9">
                <!-- It is never too late to be what you might have been. - George Eliot -->
                <form action="{{url('/')}}/RetailerUpdate" method="post" enctype="multipart/form-data" id="signUpForm">
                    @csrf
                    <div class="row">
                    <div class="form-group col-md-6">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend" style="border:none">
                          <span class="input-group-text" id="UserName11"><i class="fa-solid fa-user"></i> </span>
                        </div>
                        <input type="text" id="UserName1" name="UserName" class="form-control" placeholder="Username" aria-label="Username" value="{{old('UserName')}}" aria-describedby="UserName1" data-toggle="tooltip" data-placement="right" title="Enter your name not more then 20 Characters" onfocus="color(this.id)" onblur="colorRevert(this.id)">
                      </div>
                      @error('UserName')
                      <span class="text-warning">{{$message}}</span>
                     @enderror
                    </div>
                    <div class="form-group col-md-6">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend" style="border:none">
                          <span class="input-group-text" id="email11"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <input type="text" id="email1" name="email" class="form-control" placeholder="example@gmail.com" aria-label="email" value="{{old('email')}}" aria-describedby="email1" data-toggle="tooltip" data-placement="right" title="Enter your email like Given Formate 'example@gmail.com'" onfocus="color(this.id)" onblur="colorRevert(this.id)">
                      </div>
                      @error('email')
                      <span class="text-warning">{{$message}}</span>
                     @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend" style="border:none">
                          <span class="input-group-text" id="CNIC11"><i class="fa-solid fa-id-card"></i></span>
                        </div>
                        <input type="text" id="CNIC1" name="CNIC" class="form-control" placeholder="3520147826311" aria-label="CNIC"  value="{{old('CNIC')}}" aria-describedby="CNIC1" data-toggle="tooltip" data-placement="right" title="Enter Your Name Cnic with out dashes" onfocus="color(this.id)" onblur="colorRevert(this.id)">
                      </div>
                      @error('CNIC')
                      <span class="text-warning">{{$message}}</span>
                     @enderror
                    </div>
                    <div class="form-group col-md-6">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend" style="border:none">
                          <span class="input-group-text" id="mobile11"><i class="fa-solid fa-phone"></i></span>
                        </div>
                        <input type="numeric" id="mobile1" name="mobile" class="form-control" placeholder="03124513576" aria-label="mobile" value="{{old('mobile')}}" aria-describedby="mobile1" data-toggle="tooltip" data-placement="right" title="Enter Your Phone Number With out Country Code" onfocus="color(this.id)" onblur="colorRevert(this.id)">
                      </div>
                      @error('mobile')
                      <span class="text-warning">{{$message}}</span>
                     @enderror
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend" style="border:none">
                          <span class="input-group-text" id="passwordRetailer11"><i class="fa-solid fa-lock"></i></span>
                        </div>
                        <input type="password" name="password" id="passwordRetailer1" class="form-control" placeholder="************" aria-label="password" aria-describedby="password1" data-toggle="tooltip" data-placement="right" title="Enter Your Password:'Uk322085%' " onfocus="color(this.id)" onblur="colorRevert(this.id)">
                        <div class="input-group-append">
                          <span class="input-group-text" id="eyeRetailer" onclick="showeyeRetailerPassowrd()"><i class='fa-solid fa-eye-slash'></i></span>
                        </div>
                    </div>
                    @error('password')
                    <span class="text-warning">{{$message}}</span>
                   @enderror
                    </div>
              
                    <div class="form-group col-md-6">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend" style="border:none">
                            <span class="input-group-text" id="image11"><i class="fa-solid fa-image"></i></span>
                          </div>
                          <input type="file" name="image" id="image1" class="form-control" placeholder="Your Image" value="{{old('job')}}"  data-toggle="tooltip" data-placement="right" title="Enter Your Profile Pic"  onfocus="color(this.id)" onblur="colorRevert(this.id)" >
                      </div>
                      @error('image')
                      <span class="text-warning">{{$message}}</span>
                     @enderror
                      </div>
                    </div>
                      <div class="form-group">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend" style="border:none">
                            <span class="input-group-text" id="address11"><i class="fa-solid fa-location-dot"></i></span>
                          </div>
                          <input type="numeric" id="address1" name="address" class="form-control" placeholder="address" aria-label="address" value="{{old('address')}}" aria-describedby="mobile1" data-toggle="tooltip" data-placement="right" title=" address for mate area City Country" onfocus="color(this.id)" onblur="colorRevert(this.id)">
                        </div>
                        @error('address')
                        <span class="text-warning">{{$message}}</span>
                       @enderror
                      </div>
            
            
                      <div class="form-group form-button">
                        <button type="submit" class="btn col-md-12 resgister">Update</button>
                      </div>
                    </form>
            </div>
            </div>
          </div> --}}
        
          <div class="borders text-center d-none" id="ratings1" >
            {{-- <center> --}}
          <p ><img src=" {{asset('storage/images/product.png')}}" alt='webLogo'  width='10%' class='img-fluid'  /></p>
          <br>
              <h4>Currently You dont have any Reating</h4>
            {{-- </center> --}}
          </div>
        </div>
      </div>
    </div>

<!-- Button trigger modal -->


<script>

function color(id){
   document.getElementById(id+"1").classList.add("inputfoucused");
}

function colorRevert(id){
   document.getElementById(id+"1").classList.remove("inputfoucused");
}

  function profileMenu(id)
  {

    document.getElementById(id).classList.add("active");
    document.getElementById(id+1).classList.remove("d-none");
    if(id=="profile"){
    document.getElementById("ratings1").classList.add("d-none");
    document.getElementById("product1").classList.add("d-none");
    document.getElementById("product").classList.remove("active");
    document.getElementById("ratings").classList.remove("active");
    }
    else  if(id=="product"){
    document.getElementById("ratings1").classList.add("d-none");
    document.getElementById("profile1").classList.add("d-none");
    document.getElementById("profile").classList.remove("active");
    document.getElementById("ratings").classList.remove("active");
    }
    else if(id=="ratings"){
    document.getElementById("profile1").classList.add("d-none");
    document.getElementById("product1").classList.add("d-none");
    document.getElementById("product").classList.remove("active");
    document.getElementById("profile").classList.remove("active");
    }
    
  }

let RetailerHided = 0;

function showeyeRetailerPassowrd(){
  if (RetailerHided==0){
       // alert("oneclick");
 let a = document.getElementById("passwordRetailer1");
 let b =a.value;
 a.setAttribute('type','text');
 document.getElementById("eyeRetailer").innerHTML="<i class='fa-solid fa-eye'></i>"
 RetailerHided++;
  }
else {

  // alert("Secondclick");
  let d = document.getElementById("passwordRetailer1");
 let b =d.value;
 document.getElementById("eyeRetailer").innerHTML = "<i class='fa-solid fa-eye-slash'></i>"
  d.setAttribute('type','password');
  RetailerHided--;

}


}



  </script>
     

  
@endsection
  

