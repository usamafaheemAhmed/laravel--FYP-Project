

        @extends('sharedLayout.main')
        @push('title')
            <title>Apni Mandi.contact</title>
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
            <div class="col--md-12">
                <h3 style="font-size: 25px; padding-left: 25px;">Location Information</h3>
            </div>
            <div class="col-md-12" id="contactaddress1">
                <div class="col-md-4">
                    <h5 style="font-size: 25px; padding-left: 25px;">Our Address</h5>
                    <address style="font-size: 100%">
                        Main Campus,<br> Sector C DHA Phase 6,<br> Lahore, <br>Pakistan
                        <i class="fa fa-phone"></i>: (+92 312 4513576)<br>
                        <i class="fa fa-envelope"></i>:
                        <a href="usamafaheemahmed80@gmail.com">usamafaheemahmed80@gmail.com</a>
                    </address>
                </div>
                <div class="col-md-6 ">
                    <h5 style="font-size: 25px;">Map of our Location</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.188128978216!2d74.44044121462943!3d31.464010657072127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391908dd6138ade3%3A0xa6cc469044e1fbc1!2sLahore%20Garrison%20University.!5e0!3m2!1sen!2s!4v1668029519605!5m2!1sen!2s"
                        max-width="100%" height="600%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> 
                <div class="col-md-11">
                    <div class="btn-group" role="group" style="padding: 20px,20px,20px,20px;">
                        <a role="button" class="btn btn-primary" href="tel:+923124513576"><i class="fa fa-phone"></i> Call
                            us</a>
                        <a role="button" class="btn btn-danger" href="mailto:usamafaheem@gmail.com"><i
                                class="fa fa-google"></i> Gmail</a>
                        <a role="button" class="btn btn-info" href="skype:usama faheem?call"><i class="fa fa-skype"></i>
                            Skype</a>
                    </div>
                    <div class="btn-group" role="group">
                        <a role="button" class="btn btn-success" href="whatsapp:contact=03124513576@s.whatsapp.com"><i
                                class="fa fa-whatsapp"></i> Whatsapp</a>
                        <a role="button" class="btn btn-warning"
                            href="https://www.snapchat.com/add/sahar_noor19?share_id=jj6yKBpYYzw&locale=en-GB"><i
                                class="fa fa-snapchat"></i> Snapchat</a>
                        <a role="button" class="btn btn-info"
                            href="https://www.facebook.com/help/668969529866328/?helpref=uf_share"><i
                                class="fa fa-facebook"></i> Facebook</a>
                    </div>
                </div>
            </div>

        </div>

    <div class="d-flex flex-column">
        <div class="col-12">
            <h3 style="font-size: 25px; padding-left: 25px;">Send us your Feedback</h3>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <Form>
                <div class="form-group">
                    <div class="row">
                        <label for="userid" class="col-md-2 col-from-lable">User ID </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="userid" placeholder="User ID">
                            <p id="useridp" style="color:red ;"></p>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-2 col-from-lable pt-4">First Name </label>
                        <div class="col-md-10 pt-4">
                            <input type="text" class="form-control" id="firstname" placeholder="First Name">
                            <p id="firstnamep" style="color:red ;"></p>
                        </div>
                    </div>

                    <div class="row">
                        <label class="pt-4" >Middal Name </label>
                        <div class="col-md-10 pt-4" style="margin-left: 13px;">
                            <input type="text" class="form-control" id="middalname" placeholder="Middal Name">
                            <p id="middalnamep" style="color:red ;"></p>
                        </div>
                    </div>

                    <div class="row">
                        <label  class="col-md-2 col-from-lable pt-4">Last Name </label>
                        <div class="col-md-10 pt-4">
                            <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                            <p id="lastnamep" style="color:red ;"></p>
                        </div>
                    </div>
                </div>
                <div class="row pt-4">
                    <label class="mt-3">Contect telephone </label>
                    <div class="col-md-2">
                        <div class="nice-select form-control" style=" width:155px;height:45px;" data-value="92">
                            <span class="current">Pakistan (+92)</span>
                            <ul class="list">
                                <li class="option selected" data-value="92">Pakistan (+92)</li>
                                <li class="option " data-value="297">Aruba (+297)</li>
                                <li class="option " data-value="880">Bangladesh (+880)</li>
                                <li class="option " data-value="1">Canada (+1)</li>
                                <li class="option " data-value="86">China (+86)</li>
                                <li class="option " data-value="20">Egypt (+20)</li>
                                <li class="option " data-value="81">Japan (+81)</li>
                                <li class="option " data-value="977">Nepal (+977)</li>
                                <li class="option " data-value="90">Turkey (+90)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="telnum" class="form-control" id="telnum" placeholder="Tel. Number">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label for="email" class="col-md-2 col-from-lable">email id </label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="emailid" placeholder="Email Id">
                        <p id="emailp" style="color:red ;"></p>
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <div class="col-md-6 offset-md-2">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" Id="approve" value="">
                            <label class="from-check-label" for="approve">May we contact you?</label>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="nice-select form-control" style="width:70px;height: 50px;" tabindex="0"><span
                                class="current">Tel.</span>
                            <ul class="list">
                                <li class="option selected" data-value="Tel.">Tel.</li>
                                <li class="option " data-value="Email">Email</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Feedback" class="col-md-3 col-from-lable">Your Feedback </label>
                    <div class="col-md-9">
                        <p id="firstnamep" style="color:rgb(155, 154, 154) ;">Please type your sincere Feedback</p>
                        <textarea class="form-control" id="Feedback" name="Feedback" rows="12"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-md-2 col-md-10">
                        <button onclick="idtaken()" type="submit" class="btn btn-primary">
                            send feedback
                        </button>
                    </div>
                </div>
            </Form>
        </div>
        <div class="col-md-5"></div>
    </div>

    
        @endsection