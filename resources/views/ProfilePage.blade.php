
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
      // session()->put('user_pic',$img);
     $g= $loggedInUser->userType;
      session()->put('loggedInUseruserType',$g);
  @endphp  
  {{-- <p>{{$searchByemail}}</p> --}}
  {{-- <p>{{$findmail}}</p> --}}
  {{-- <p>usamafaheemahmed</p> --}}
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

         {{-- <p>{{$loggedInUser->profilePic}}</p>
         <p>{{$img}}</p> --}}

         <p><img src="{{asset('storage/'.$img)}}" alt='webLogo' height='50%' width='70%' class='img-fluid mt-3 roundeder'  /></p>
         
         
         
         
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
         <div>

       
          <p>For help contact: </p>
          <p><a href="mailto:usamafaheemahmed80@gmail.com"><i class="fa-brands fa-google"></i></a>
          <a  href="https://www.facebook.com/help/668969529866328/?helpref=uf_share"><i class="fa-brands fa-facebook"></i></a>
          <a  href="https://www.snapchat.com/add/usamafaheema?share_id=YRr4M8GoQMo&locale=en-GB"><i class="fa-brands fa-snapchat"></i></a>
          <a  href="https://instagram.com/usama.faheem.142?igshid=ZmZhODViOGI="><i class="fa-brands fa-instagram"></i></a>
          <a  href="whatsapp:contact=03124513576@s.whatsapp.com"><i class="fa-brands fa-whatsapp"></i></a>
         
        </div>
          </p>
            
          
        </div>
        @endif

        @endforeach 

        <div class="col-md-10" style="padding-top: 1%">

          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#" id='product' onclick="profileMenu(this.id)">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" id="profile" onclick="profileMenu(this.id)">Profile</a>
            </li>
            <li class="nav-item">
        
              <a class="nav-link" href="#" id="ratings" onclick="profileMenu(this.id)">Cart</a>
         
              {{-- <a class="nav-link" href="#" id="ratings" onclick="profileMenu(this.id)">Ratings</a> --}}
            </li>
          </ul>

          

          <div id="product1">
            <div class="row">
            {{-- <p>{{$products}}</p> --}}
            
            @foreach ($products as $products)
            @php
            $searchByemail = session()->get('user_email');
            $productSeller = $products->productSeller;
            @endphp
            {{-- <p>{{$searchByemail}}</p> --}}
            {{-- <p>{{$productSeller}}</p> --}}

              @if($searchByemail == $productSeller)
              <div class="col-md-3 mb-3">
              <div class="card-deck" style=" Padding-top:3%;">
                <div class="card" style="height:370px">
                  <img src="{{asset('storage/'.$products->imgPath)}}" class="card-img-top img-fluid" height="70%" width="10%" alt="ProductImage">
                  <div class="card-body">
                    <h5 class="card-title">{{$products->productName}}</h5>
                    <p class="card-text">{{$products->productDetails}}</p>
                    <p class="card-text"><small class="text-muted">{{$products->productCategory}}</small></p>
                    <button type="submit" class="card-text btn btn-danger col-md-12"><span class="Price">{{$products->productPrice}}</span></button>
                  </div>
                </div>
              </div>
            </div>
                @endif
            @endforeach
       
          
            {{-- <div class="col-md-12 borders text-center " data-toggle="modal" data-target="#staticBackdrop" >
        
              <p ><img src=" {{asset('storage/images/product.png')}}" alt='webLogo'  width='10%' class='img-fluid'  /></p>
              <br>
                  <h4>Currently You dont have any Product</h4>
        
              </div> --}}
            </div>
            <div class="card-deck mb-4" style="width: 30%; height:90%; Padding-top:3%;"  data-toggle="modal" data-target="#staticBackdrop" >
              <div class="card border-success">
               
                  <h5 class="addNewProduct">Add New Product </h5>
  
              </div>
            </div>
          </div>
       
       



          <div class=" deen mt-4 text-center d-none" id="profile1" >
            {{-- <center> --}}
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <!-- It is never too late to be what you might have been. - George Eliot -->
                    <form action="{{url('/')}}/FarmerUpdate" method="post" enctype="multipart/form-data" id="signUpForm">
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
            {{-- </center> --}}
          </div>



          {{-- Cart start --}}
          @php
          $cartlen = session()->get('cartItems');
          $user_email = session()->get('user_email');
            if($cartlen<0){
              $cartlen ='';
            }
          @endphp
          @if($cartlen)
          <div class=" text-center d-none" id="ratings1" >
          @foreach($cartData as $cartData)
          @php
            $CartMail=$cartData->Buyer;
          @endphp
          @if($CartMail==$user_email)
          
          <div class="col-md-12 mb-3">
            <div class="card-deck" style=" Padding-top:3%;">
              <div class="card">
                <div class="card-body text-left">
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <td style="width: 85%"></td>
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
         
        </div>
      </div>
    </div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('/')}}/Product" method="post" enctype="multipart/form-data">
      
      <div class="modal-body">
        <!-- <label for="itemName">Item name</label> -->
        @csrf
        <input type="text" class="form-control" id="itemName" name="productName" value="{{old('productName')}}" placeholder="Enter Product Name" >
        <!-- <label for="itemPrice">Item Price</label> -->
          <br>
          <input type="text" class="form-control" id="itemPrice" name="productPrice" placeholder="Enter Product Price">
            <!-- <label for="itemQuantity">Item Quantity</label> -->
             <br>
             <select class="form-control" name="productCategory" id="catagory">
                <option value="Vegetables" selected>Vegetables</option>
                <option value="Fruits">Fruits</option>
                <option value="Crops">Crops</option>
            </select>
            <br>
            <input type="text" class="form-control" id="itemQuantity" name="productQuantity" placeholder="Enter Product Quantity">
            <!-- <label for="itemDescription">Item Description</label> -->
            <br>
            <input type="textarea" class="form-control" id="itemDescription" name="productDescription"  placeholder="Enter Product Description">
            <!-- <label for="itemImage">Item Image</label> -->
            <br>
             <input type="file" class="form-control col-md-12" id="itemImage" name="image" placeholder="Enter Item Image">

         



      </div>
      <div class="modal-footer">
        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>
    
<script>
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

  </script>
     

  
@endsection
  

 
{{-- {{$userType}} --}}

