@extends('sharedLayout.main')
@push('title')
    <title>Apni Mandi.Shop</title>

    <style>
      .card-img-top{
        height: 70%! !important;
        width: 70%! !important;
      }

      .card .card-img-top{
        height: 150px;

      }
      .btn-secondary{
        color: #ffff;
        background-color: #428713;
      }

      .btn-secondary:hover{
        color: #428713;
        background-color: #ffff;
      }
      .btn-secondary:focus{
       box-shadow: none;
      }

    </style>



    @endpush
    @section('main-section')

<div class="container">
<div class="row">


    @foreach ($products as $products)
    {{-- <p>{{$searchByemail}}</p> --}}
    {{-- <p>{{$productSeller}}</p> --}}

      <div class="col-md-3 mb-5 ">
      <div class="card-deck" style=" Padding-top:3%;">
        <div class="card" style="height:370px">
          <div class="card-img-top ">
            <img src="{{asset('storage/'.$products->imgPath)}}" class="card-img-top img-fluid"   alt="ProductImage">
          </div>
          <div class="card-body">
            <h5 class="card-title">{{$products->productName}} <span class="float-right d-none" id="Fillheart" onclick="like()"> <i id="Fillheart2" class=" fa-regular fa-heart"></i></span></h5>
            <p class="card-text">{{$products->productDetails}}</p>
            <p class="card-text">Product Quantity:<span class="float-right">{{$products->productQuantity}}</span></p>
            {{-- <p class="card-text"><small class="text-muted">{{$products->productCategory}}</small> <i class="fa-solid fa-cart-shopping float-right"></i></p> --}}
            <p class="card-text" style="font-size:12px"><small class="text-muted">{{$products->productSeller}}</small></p>
            <form action="{{url('/')}}/addToCart" method="post" enctype="multipart/form-data">
              @csrf
              <input type="text" name="productName" value="{{$products->productName}}" class="d-none">
              <input type="text" name="productID" value="{{$products->product_id}}" class="d-none">
              <input type="text" name="Seller" value="{{$products->productSeller}}" class="d-none">
              <input type="text" name="productPrice" value="{{$products->productPrice}}" class="d-none">
            <button type="submit" class="card-text btn btn-secondary col-md-12"><i class="fa-solid fa-cart-shopping"></i>  <span class="Price" id="Price">{{$products->productPrice}}</span>/-Rs</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endforeach
</div>
</div>



<script>
let hearts=0;
  function like()
  {
    // let heart= document.getElementById('Fillheart');
    // let heart2= document.getElementById('Fillheart2');
    // alert("jump");
    if(hearts==0){
     document.getElementById('Fillheart').innerHtml="<i class='fa-solid fa-heart'></i>";
     hearts++;
    }
    else{    
       document.getElementById('Fillheart').innerHtml="<i class='fa-regular fa-heart'></i>";
     hearts--;
    }

    
  }
  
  // function addTOCart(id){
  //   // alert(id);

  //   let data = id;
  //   // sessionStorage.setItem("cart", id);
    
  //   $.ajax({
  //        url: "{{url('/')}}/addToCart/"+id,
  //        data: data,
  //   });

  // }



</script>


    @endsection