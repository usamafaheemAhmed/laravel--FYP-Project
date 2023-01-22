
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
        margin-left: 8%;
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

/** footer **/
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



    </style>

  </head>
  <body style="overflow-x: hidden">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('storage/images/weblogo4.png')}}" alt="webLogo"height="250px" width="30px" class="img-fluid" /> &#xa0&#xa0 Apni Mandi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
    <div class="collapse navbar-collapse " id="navbarSupportedContent" >
      <form class="form-inline my-2 my-lg-0 " style="  width: 30%;">
        <input class="form-control " style="width: 100%;" type="search" placeholder="Search" aria-label="Search">
        {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
      </form>
      <ul class="navbar-nav">
        <li class="nav-item" id="home"onclick="active(this.id)">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item " id="view"onclick="active(this.id)">
          <a class="nav-link" href="{{url("/view")}}" >View</a>
        </li>
        <li class="nav-item " id="about" onclick="active(this.id)">
          <a class="nav-link" href="{{url("/about")}}" >About</a>
        </li>
        <li class="nav-item " id="contact" onclick="active(this.id)">
          <a class="nav-link" href="{{url("/contact")}}" >Contact</a>
        </li>
        <li class="nav-item " id="signUp" onclick="active(this.id)">
          <a class="nav-link" href="{{url("/signup")}}" >Sign Up</a>
        </li>
      </ul>
      
    </div>

 
</nav>

<script>

  window.onload = function(){
    var url = window.location.href;
    if(url.includes("view")){
      document.getElementById("view").classList.add("active");
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
    else{
      document.getElementById("home").classList.add("active");
    }
  }
</script>
