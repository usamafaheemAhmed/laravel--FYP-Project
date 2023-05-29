

        @extends('sharedLayout.main')
        @push('title')
            <title>Apni Mandi.contact</title>

            <style>
                .jumbotron{
                    background-color: #428713;
                }
                .jumbotron p{
                    color:  #ffff;
                }
                .jumbotron a{
                    color:  #000000;
                }
                #data h2 {
                    font-family: 'Baloo 2', cursive !important;
                }
                #data p{
                    font-family: 'Poppins', sans-serif;
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

 .white_color_padding{
     /* background-color: #fff; */
     padding: 40px 30px 30px 30px ;
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
 .white_color_padding .form-control:focus {
    box-shadow: none;
}
 .white_color_padding .form-control {
     border: #e8e8e8 solid 1px;
     padding: 12px 19px;
     margin-bottom: 26px;
    border-radius: 1px;
     color: #000;
     width: 100%;
     height: 10%;
}
.white_color_padding .textarea{
     border: #e8e8e8 solid 1px;
     padding: 12px 19px;
     margin-bottom: 26px;
    border-radius: 1px;
     color: #000;
     width: 100%;
     height: 100%;
}

 .send {
    font-family: 'Baloo 2', cursive !important;
     font-size: 16px;
     border: #428713 solid 1px;
     background-color: #428713;
     color: #fff;
     padding: 11px 67px;
     float: right;
     transition: all 0.3s ease-in;
        border-radius: 0%;
}
.send:hover {
     background-color: #ff7e1d;
border: #ff7e1d solid 1px;
color: #fff;
transition: all 0.3s ease-in;

}
/** end contact section **/

.row-header h1{
    font-family: 'Baloo 2', cursive !important;
}
.row-header p{
 font-family: 'Poppins', sans-serif;
}
   
            </style>
        @endpush
        @section('main-section')

        
    <header class="jumbotron">
        <div class="container">
            <div class="row">
                <ul class="col-12 breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.html"> Home </a></li>
                    <li class="breadcrumb-item"><a href="./contactus.html"> contact </a></li>
                </ul>
            </div>

        </div>
        <div class="container">
            <div class="row row-header">
                <div class="col-12 text-center">
                    <h1 style="color: #ffff;font-size: 30px;">Contact</h1>
                    <p class="text-center">We take inspiration from the World's best Crop related Application, and
                        create a unique fusion
                        experience for all of you. Our
                        Services creations will tickle your culinary senses!</p>
                </div>
                <div class="col-12 col-sm">
                </div>
            </div>
        </div>
    </header>



        <div class="d-flex flex-column">
            <div class="container">

           
            <div class="col--md-12">
                <h3 style="font-size: 25px; padding-left: 25px;">Location Information</h3>
            </div>
            <div class="row" id="contactaddress1">
                <div class="col-md-6">
                    <h5 style="font-size: 25px; padding-left: 25px;">Our Address</h5>
                    <address style="font-size: 100%">
                        Main Campus,<br> Sector C DHA Phase 6,<br> Lahore,Pakistan <br>
                        <i class="fa fa-phone"></i>: (+92 312 4513576)<br>
                        <i class="fa fa-envelope"></i>:
                        <a style="color: #000" href="usamafaheemahmed80@gmail.com">usamafaheemahmed80@gmail.com</a>
                    </address>
                </div>
                {{-- <div class="col-md-6">
                    <h5 style="font-size: 25px;">Map of our Location</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.188128978216!2d74.44044121462943!3d31.464010657072127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391908dd6138ade3%3A0xa6cc469044e1fbc1!2sLahore%20Garrison%20University.!5e0!3m2!1sen!2s!4v1668029519605!5m2!1sen!2s"
                         style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>  --}}
                {{-- <div class="col-md-12 text-center">
                    <div class="btn-group" role="group" style="padding: 20px,20px,20px,20px;">
                        <a role="button" class="btn btn-primary" href="tel:+923124513576"><i class="fa fa-phone"></i> Call
                            us</a>
                        <a role="button" class="btn btn-danger" href="mailto:usamafaheem@gmail.com"><i
                                class="fa fa-google"></i> Gmail</a>
                        <a role="button" class="btn btn-info" href="skype:usama faheem?call"><i class="fa fa-skype"></i>
                            Skype</a>
                          <a role="button" class="btn btn-warning" href="https://www.snapchat.com/add/sahar_noor19?share_id=jj6yKBpYYzw&locale=en-GB"><i
                                class="fa fa-snapchat"></i> Snapchat</a>
                        <a role="button" class="btn btn-info"
                            href="https://www.facebook.com/help/668969529866328/?helpref=uf_share"><i
                                class="fa fa-facebook"></i> Facebook</a>
                    </div>
                </div> --}}
            </div>
             </div>
        </div>

    <div class="d-flex flex-column mt-4">
        <div id="contact" class="contact">
            <div class="container">
                <div class="white_color">
                    <div class="row">
        
                        <div class="col-md-6 white_color_padding">
                          
                         <x-contactform/>
            
                    </div>
                    <div class="col-md-6">
                        <div style="height: 100%">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.188128978204!2d74.44044121448131!3d31.46401065707245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391908dd6138ade3%3A0xa6cc469044e1fbc1!2sLahore%20Garrison%20University.!5e0!3m2!1sen!2s!4v1673993845559!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    </div>

                </div>

            </div>


        </div>
        <div class="col-md-5"></div>
    </div>

    
        @endsection