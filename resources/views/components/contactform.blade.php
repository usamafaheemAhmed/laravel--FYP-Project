{{-- <div> --}}
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->


    <div class="col-md-12 ">
        <form action="{{url('/')}}/contactForm" method="post" enctype="multipart/form-data">
            @csrf
        <div class="col-md-12">
            <input class="form-control" placeholder="Your Name" type="text" name="userName" id="userName" value="{{old('userName')}}" >
            @error('userName')
                            <span class="text-warning">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-12">
            <input class="form-control" placeholder="Email" type="text" name="email" id="email" value="{{old('email')}}" >
            @error('email')
                            <span class="text-warning">{{$message}}</span>
                        @enderror
        </div>
        <div class="col-md-12">
            <input class="form-control" placeholder="Phone Number" type="text" name="phoneNumber" id="phoneNumber" value="{{old('phoneNumber')}}" >
            @error('phoneNumber')
            <span class="text-warning">{{$message}}</span>
             @enderror
        </div>
        <div class="col-md-12" style="height: 170px">
            <textarea class="form-control textarea" placeholder="Message" type="text" name="message" id="message" value="{{old('message')}}" ></textarea>
            @error('message')
            <span class="text-warning">{{$message}}</span>
             @enderror
        </div>
        <div class="col-md-12 mt-4">
            <button class="btn btn-success send">Send</button>
        </div>
     
    </form>
    </div>






{{-- </div> --}}