
        @extends('sharedLayout.main')
        @push('title')
            <title>Apni Mandi.about</title>
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
                a{
                    color: #ffff
                }
                #data h2{
                    font-family: 'Baloo 2', cursive !important;
                }
                #data p{
                    font-family: 'Poppins', sans-serif;
                }
            </style>
        
        @endpush
        @section('main-section')

        <header class="jumbotron px-0 mx-0" >
            <div class="container">
                <div class="row">
                    <ul class="col-12 breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.html"> Home </a></li>
                        <li class="breadcrumb-item"><a href="./aboutus.html"> About </a></li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row row-header">
                    <div class="col-12 text-center">
                        <h1 style="color: #ffff;font-size: 30px;font-family: 'Baloo 2', cursive !important;">@lang("lang.aboutus")</h1>
                        <p style="font-family: 'Poppins', sans-serif;">We take inspiration from the World's best Crop related Application, and create a unique fusion
                            experience for all of you. Our
                            Services creations will tickle your culinary senses!</p>
                    </div>
                    <div class="col-12 col-sm">
                    </div>
                </div>
            </div>
        </header>

            <div>
                <div class="container mt-4">
                    <h1 style="font-family: 'Baloo 2', cursive !important;">@lang("lang.aboutus")</h1>
                    <hr>
                </div>
            </div>
    
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6" id="data" >
                        <h2>Our History</h2>
                        <p class="d-none d-sm-block text-justify">In this chapter, I outlined three key points from the literature study
                            that I believe will assist readers identify the solution to my research question. This study of
                            the literature is separated into three main sections that address the different types of
                            vegetables, how they are transported, and how much they cost.</p>
                        <p class="text-justify">The restaurant traces its humble beginnings to <em>The Frying Pan</em>, a successful chain
                            started by
                            our CEO, Mr. Peter Pan, that featured for the first time the world's best cuisines in a pan.</p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="card" style="background-color:#abff7b;">
                            <h3 class="card-header text-white" style="background-color:#033505; color:black;">Facts At a
                                Glance
                            </h3>
                            <figure style="background-color:#032001; color: white;">
                                <img class="card-img-top img-fluid" src="{{asset('storage/images/15(3).jpg')}}" alt="Trulli" style="width:100%">
                                <figcaption class="offset-md-4" style="text-justify: auto;">Fig.1 - Trulli, Puglia, Italy.
                                </figcaption>
                            </figure>
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-6">Started</dt>
                                    <dd class="col-6">3 Nev. 2022</dd>
                                    <dt class="col-6">Major Stake Holder</dt>
                                    <dd class="col-6">HK Fine Foods Inc.</dd>
                                    <dt class="col-6">Last Year's Turnover</dt>
                                    <dd class="col-6">$1,250,375</dd>
                                    <dt class="col-6">Buyer cities</dt>
                                    <dd class="col-6">40</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4 mb-4">
                        <div class="card card-body bg-light ">
                            <blockquote class="blockquote">
                                <p class=" text-center mb-0 text-justify">You better cut the pizza in four pieces because
                                    I'm not hungry enough to eat six. <br>
                                    Yogi Berra,
                                    The Wit and Wisdom of Yogi Berra,
                                    P. Pepe, Diversion Books, 2014</p>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
