
        @extends('sharedLayout.main')
        @push('title')
            <title>Apni Mandi</title>
            <style>
                
            .text-bg{ text-align: left; padding-top: 10%; padding-left: 10%;}
            .text-bg  span {
            font-size: 41px;
            line-height: 51px;
            font-family: 'Baloo 2', cursive !important;
            color: #020500
                    }
                    .text-bg h1 {
                font-family: 'Baloo 2', cursive !important;

                 color: #43960f;
                padding-top: 10px;
                font-size: 71px;
                line-height: 85px;
                padding-bottom: 45px;
                font-weight: bold;
                }
                .text-bg p {
                font-family: 'Poppins', sans-serif;

                   font-size: 20px;
                   display: block;
                   color: #020500;
                    line-height: 30px;
                    padding-bottom: 50px;
                    font-weight: 500;
                }
                .Vegetable  {padding-bottom: 50px;}
                .Vegetable .Vegetable_fom {
             padding: 15px 30px;
            box-shadow: inherit;
             border: inherit;
            width: 60%;
            font-size: 19px;
            box-shadow: #b0b0b0 0px -2px 9px 0px;
                }
                .Vegetable .Vegetable_fom::placeholder {
                    font-family: 'Poppins', sans-serif;
                }
                .Search_btn {
                  padding: 15px 0px;
                  border: rgba(255,109,51,255) solid 1px;
                  background: rgba(255,109,51,255);
                     color: #fff;
                     margin-left: -5px;
                     font-weight: 500;
                     font-size: 18px;
                     max-width: 194px;
                     width: 100%;

                     box-shadow: #b0b0b0 0px -2px 9px 0px;
                     transition: all 0.3s ease-in;
                }
                .Search_btn:hover {
             background: #428713;
                border: #428713 solid 1px;
             color: #fff;
             transition: all 0.3s ease-in;

                }
                .textBGA{
                    font-family: 'Baloo 2', cursive !important;
                    font-size: 16px;
                border: #428713 solid 1px;
                background-color: #428713;
                color: #fff !important;
                padding: 9px 0px;
                max-width: 171px;
                width: 100%;
                display: inline-block;
                text-align: center;
                margin-right: 10px;
                border-bottom: none;
                }
                .textBGA:hover{
                    background-color: rgba(255,109,51,255);
                    border: rgba(255,109,51,255) solid 1px;
                   color: #fff;
                }
                .about {
                     background-color: #fff;
                     box-shadow: #ddd 0px 0px 13px 5px;
                     margin: 200px 30px 20px 30px;     
                } 
                .about .about-box {
                    text-align: left;
                    float: right;
                    width: 100%;
                    max-width: 539px;
                    padding: 40px 0;
                }
                
                .about .about-box::after {
                 position: absolute;
                 content: "";
                 background-image: url("{{asset('storage/images/crros.png')}}") ;
                /* background: url(../images/crros.png); */
                height: 244px;
                width: 187px;
                bottom: 0;
                left: 0;
                background-repeat: no-repeat; 
                }
            .about .about-box h2 {
               
                font-family: 'Baloo 2', cursive !important;
                font-weight: bold;
                color: #fff;
                 line-height: 40px;
                 font-size: 45px;
                 text-transform:uppercase;
                 background: rgba(255,109,51,255);
                 display: inline-block;
                 padding: 20px 30px;

             }
            .about .about-box p {
                font-family: 'Poppins', sans-serif;
                font-size: 17px;
                line-height: 28px;
                color: #000;
                padding: 40px 0px;
            }

            .about .about-box a {
                font-size: 16px;
            border: #070905 solid 1px;
            background-color: #070905;
            color: #fff;
            padding: 9px 0px;
            max-width: 171px;
            width: 100%;
            display: inline-block;
            text-align: center;
            text-transform: uppercase;
            border-radius: 30px;
             }


 .about .about-box a:hover{ 
     background-color: #428713;
     border: #428713 solid 1px;
     color: #fff;
     text-underline-position: none;
 }
 .about .about-box_img figure {
     margin: 0;
}
 .about .about-box_img figure img {
    width: 80%;
    height:2%; 
    margin: 0 50px auto;
}
.padding_rl {padding: 0;}


#slider{
    background-color: #F8F9FA; 
    padding-bottom: 50px;
}

/** vegetable section **/
.vegetable {
     background-color: #fff;
     margin-top: 70px;
}

.vegetable_shop h3 {
    font-family: 'Baloo 2', cursive !important;
    font-size: 31px;
    line-height: 35px;
    color: #000;
    font-weight: 500;
    padding-bottom: 17px;
    display: block;
}


.vegetable_shop p {
    font-family: 'Poppins', sans-serif;
     font-size: 17px;
     line-height: 28px;
     color: #000;
}


.vegetable_img span {
    z-index: 999;
    display: flex;
    align-content: center;
    align-items: center;
    right: 0;
    top: 44%;
    background: rgba(255,109,51,255);
    padding: 19px 27px;
    border-radius: 88px;
    margin-right: -20px;
    position: absolute;
    color: #fff;
    font-size: 19px;
}

.margin_top span {
    z-index: 999;
    display: flex;
    align-content: center;
    align-items: center;
    right: 0;
    top: 27%;
    background: #428713;
    padding: 19px 25px;
    border-radius: 88px;
    margin-right: -20px;
    position: absolute;
    color: #fff;
    font-size: 19px;
}
.vegetable_img figure {margin: 0;}
.vegetable_img figure img {width: 100%}
.margin_top {
    margin-top: -90px;
}
.titlepage {
    text-align: center;
     padding-bottom: 60px;
}
.titlepage span {padding-top: 30px; display: inline-block; font-size: 17px; color: #000;}
.llow {color: #488d1c; font-weight: bold;}
 .titlepage h2 {
    font-family: 'Baloo 2', cursive !important;
     text-transform: uppercase;
     padding: 0;
     font-weight: bold;
     color: #000;
     line-height: 55px;
     font-size: 50px;
}


/** testomonial **/
.clients {
     background: #fff;
     margin-top: 90px;
   
} 
.clients .titlepage {padding-bottom: 0px;}
.clients .titlepage h2 {
    color: #000;
margin-bottom: -77px;
text-align: right;
}

.clients_red {
     background: #fff;
     padding-bottom: 50px;
     background: url("{{asset('storage/images/test.png')}}");
     /* background: url(../images/test.png); */
     min-height: 978px;
     background-repeat: no-repeat;
     display: flex;
     align-items: center;
     flex-wrap: wrap;
} 

.cross_inner h3 {
    font-family: 'Baloo 2', cursive !important;
    text-align: left;
    padding-left: 60px;
    padding-top: 58px;   
    font-size: 30px;
    line-height: 25px;
    padding-bottom: 58px;
color: #fff;
}
.cross_inner p {
    font-family: 'Poppins', sans-serif;
    font-size: 17px;
    line-height: 28px;
    color: #fff;
    padding-left: 60px;
    padding-right: 60px;
}
.testomonial_img {
    padding: 15px;
    background: #fff;
}
.testomonial_img figure {margin: 0;}
.testomonial_img figure img  {width: 100%;} 
.testomonial_img i {
display: flex;
justify-content: center;
flex-wrap: wrap;
padding-top: 10px;
}


.testimonial_cont p {
color: #fff;
padding-left:50px;
font-size: 19px;
line-height: 30px;
font-weight: 400;

}
#testimonial_slider .carousel-indicators {
     bottom: -50px;
}

#testimonial_slider .carousel-indicators li {
     width: 25px;
height: 25px;
background-color: #052501;
border-radius: 100%;
}
#testimonial_slider .carousel-indicators li.active {
     background-color: #4bc714;
}


.testimonial_cont {
    background: #428713cc;
    min-height: 295px;
    padding: 60px 40px;
}
.text_align_center {
    text-align: center;
background: #428713;
}
.ornage_color {
font-family: 'Baloo 2', cursive !important;
font-size: 19px;
line-height: 10px;
font-weight: normal;
}



/** contact section **/
.contact {
padding-bottom: 90px;
background-size: cover;
background: url("{{asset('storage/cornSeeds.png')}}");
background-size: cover;
background-repeat: no-repeat;
background-size: 100%;

}
.contact_bg .titlepage {padding-bottom: 20px; text-align: right !important; padding-right: 10px;}
#map {
    height: 100%;
    min-height: 470px;
}

.white_color {background: #fff; box-shadow: 0px 0px 11px 0px;}
.map figure {margin: 0px;}
.map figure img {width: 100%;}

 .white_bg {
     background-color: #fff;
     padding: 40px 30px 30px 30px 
}
 .contact .titlepage {
     text-align: center;
}
 .contact .titlepage h3 {
     padding: 0px 0px 6px 0px;
     text-transform: uppercase;
     font-weight: bold;
     color: #fff;
     line-height: 46px;
     border-bottom: #fff solid 1px;
     font-size: 40px;
     width: 367px;
     margin: 0 auto;
     margin-bottom: 60px;
}
 .contact .contact_bg {
    max-width: 541px;
    
     padding: 0;
     padding: 60px 0px;
}
 .contact .contact_bg .contactus {
     border: #e8e8e8 solid 1px;
     padding: 12px 19px;
     margin-bottom: 26px;
      border-radius: 1px;
     color: #000;
     width: 100%;
}
 .contact .contact_bg .textarea {
     margin-bottom: 25px;
         padding: 29px 19px;
     color: #000 !important;
     width: 100%;
         border: #e8e8e8 solid 1px;
    border-radius: 1px;
        padding-top: 50px;
}
 .contact .contact_bg .send {
    font-family: 'Baloo 2', cursive !important;
     font-size: 16px;
     border: #428713 solid 1px;
     background-color: #428713;
     color: #fff;
     padding: 11px 67px;
     float: right;
     transition: all 0.3s ease-in;
}
 .contact .contact_bg .send:hover {
     background-color: #ff7e1d;
border: #ff7e1d solid 1px;
color: #fff;
transition: all 0.3s ease-in;

}
/** end contact section **/



         </style>
        @endpush
        @section('main-section')
{{--         
        <div class="container text-center" style="height: 629px">
            <h1 style="padding-top:25%">Welcome to our Web</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        </div> --}}


        {{-- first container for slideshow --}}
       
        <div class="container-fluid" id ="slider">
            <div id="carouselId" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
                    <li data-target="#carouselId" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" >
                    <div class="carousel-item active">
                 
                   
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="text-bg ">
                                            <span>Welcome To Apni Mandi</span>
                                            <h1 style="color:rgba(255,109,51,255);">Vegetables Shop</h1>
                                            <p class="text-justify">It is a long established fact that a reader will be
                                                distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal </p>
                                            <form class="Vegetable">
                                                <input class="Vegetable_fom" placeholder="Vegetable" type="text"
                                                    name=" Vegetable">
                                                <button class="Search_btn">Search</button>
                                            </form>
                                            <a href="#" class="textBGA">Contact Us</a> <a href="#" class="textBGA">Vegetable</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="images_box">
                                            <figure><img src="{{asset('storage/images/img2.png')}}" alt="img2"></figure>
                                        </div>
                                    </div>
                                </div>
                     
                       
                       
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid padding_dd">
                          
    
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="text-bg">
                                            <span>Welcome To Apni Mandi</span>
                                            <h1 style="color:rgba(255,109,51,255);">Fruits Shop</h1>
                                            <p class="text-justify">It is a long established fact that a reader will be
                                                distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal </p>
                                            <form class="Vegetable">
                                                <input class="Vegetable_fom" placeholder="Fruits" type="text"
                                                    name=" Vegetable">
                                                <button class="Search_btn">Search</button>
                                            </form>
                                            <a href="#" class="textBGA">Contact Us</a> <a href="#" class="textBGA">Fruits</a>
                                        </div>
                                    </div>
    
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="images_box">
                                            <figure><img src="{{asset('storage/images/mixFruits.png')}}" alt="img2" class="img-flex" width="739px" height="587px"></figure>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container-fluid padding_dd">
                    
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="text-bg">
                                            <span>Welcome To Apni Mandi</span>
                                            <h1 style="color:rgba(255,109,51,255);">Crop Shop</h1>
                                            <p class="text-justify">It is a long established fact that a reader will be
                                                distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal </p>
                                            <form class="Vegetable">
                                                <input class="Vegetable_fom" placeholder="Crops" type="text"
                                                    name=" Vegetable">
                                                <button class="Search_btn">Search</button>
                                            </form>
                                            <a href="#" class="textBGA">Contact Us</a> <a href="#"class="textBGA">Crops</a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="images_box">
                                            <figure><img src="{{asset('storage/images/fullCorn.png')}}" alt="img2" class="img-flex" width="739px" height="587px"></figure>
                                        </div>
                                    </div>
                                </div>
                      
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselId" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-target="#carouselId" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </button>
            </div>
            
        </div>
       
    {{-- second continder for About --}}

    <div id="about" class="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box">
                        <h2>About us</h2>
                        <p class="text-justify">It is a long established fact that a reader will be distracted by the
                            readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages andIt is a
                            long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to using 'Content here, content here', making it
                            look like readable English. Many</p>
                        <a href="./aboutus.html">Read more</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
                    <div class="about-box_img">
                        <figure><img src="{{asset('storage/images/cornSeeds.png')}}" alt="#" class="img-fluid" /></figure>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- vegetable -->
    <div id="vegetable" class="vegetable">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2 style="color: rgba(255,109,51,255) ;"> Fresh <strong class="llow"
                                style="color: #428713 ;">vegetable</strong> </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 ">
                    <div class="vegetable_shop">
                        <h3>Best Vegetables Shop</h3>
                        <p class="text-justify">It is a long established fact that a reader will be distracted by the
                            readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages andIt is a
                            long established fact that a reader will be distracted </p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 ">
                    <div class="vegetable_img">
                        <a href="./loading.html"><figure><img src="{{asset('storage/images/v1.jpg')}}" alt="#" /></figure></a>
                        <a href="./loading.html"><span>01</span></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 ">
                    <div class="vegetable_img margin_top">
                        <a href="./loading.html"> <figure><img src="{{asset('storage/images/v2.jpg')}}" alt="#" /></figure></a>
                        <a href="./loading.html"><span>02</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end vegetable -->

 <!-- clients -->
 <div id="testimonial" class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>testimonial</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clients_red">
    <div class="container">
        <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="testomonial_section">

                        <div class="full testimonial_cont">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                    <div class="testomonial_img">
                                        <figure><img src="{{asset('storage/images/us1.png')}}" alt="#" /></figure>
                                        <i><img src="{{asset('storage/images/test_con.png')}}" alt="#" /></i>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                    <div class="cross_inner">
                                        <h3>Usama Faheem Ahmed<br><strong class="ornage_color">Fresh Software
                                                Engineer</strong></h3>
                                        <p class="text-justify">To me, being a software engineer is using
                                            creativity, intelligence, and
                                            art to bring life to the code and create apps that solve practical
                                            problems. Working with 0s and 1s to give them a meaning that both robots
                                            and people can understand is my passion. In plain terms, it is similar
                                            to being an architect, except that we create software instead of
                                            buildings.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item active">

                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont ">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                    <div class="testomonial_img">
                                        <figure><img src="{{asset('storage/images/Tauheed.jpeg')}}" alt="#" /></figure>
                                        <i><img src="{{asset('storage/images/test_con.png')}}" alt="#" /></i>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                    <div class="cross_inner">
                                        <h3>Tauheed Akram<br><strong class="ornage_color">Invester & Business
                                                Man</strong></h3>
                                        <p class="text-justify">For me, being a software engineer entails using
                                            creativity, wit, and art
                                            to give the code life and create programmes that address practical
                                            problems. Giving 0s and 1s a meaning that both machines and people can
                                            understand is my passion when working with them. It is similar to being
                                            an architect, but instead of designing and building buildings, we design
                                            and develop software. 
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="carousel-item">

                    <div id="testomonial" class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont ">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 pa_right">
                                    <div class="testomonial_img">
                                        <figure><img src=" {{asset('storage/images/Ms.-Sadia-Zafar-updated.jpeg')}}" alt="#" /></figure>
                                        <i><img src="{{asset('storage/images/test_con.png')}}" alt="#" /></i>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 pa_left">
                                    <div class="cross_inner">
                                        <h3>Ms.Sadia Zafar<br><strong class="ornage_color">Senior Software Engineer
                                                & Supervisor</strong></h3>
                                        <p class="text-justify">
                                            The role of a supervisor is a lot more than just overseeing other people's work. 
                                            A supervisor's duties include mentoring, problem-solving, and acting as a liaison between lower 
                                            management and subordinates. A capable person who can mentor and train staff members will be the 
                                            perfect choice. This project was very interesting and unique. 
                                            We were able to learn a lot about the different types of problems farmers face on selling goods.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- end clients -->

<div id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2 style="color: #428713 ;">Contact <strong class="llow"
                            style="color: rgba(255,109,51,255) ;">us</strong></h2>
                </div>
            </div>

        </div>
        <div class="white_color">
            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <form class="contact_bg">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Your Name" type="text" name="Your Name">
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Email" type="text" name="Email">
                                </div>
                                <div class="col-md-12">
                                    <input class="contactus" placeholder="Phone Number" type="text"
                                        name="Phone Number">
                                </div>
                                <div class="col-md-12">
                                    <textarea class="textarea" placeholder="Message" type="text"
                                        name="Message"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Send</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.188128978204!2d74.44044121448131!3d31.46401065707245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391908dd6138ade3%3A0xa6cc469044e1fbc1!2sLahore%20Garrison%20University.!5e0!3m2!1sen!2s!4v1673993845559!5m2!1sen!2s" width="539" height="520" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

</div>

</div>


        <script>
                document.cookie = "myjavascriptVar = " + 0;            
        </script>
            @endsection
