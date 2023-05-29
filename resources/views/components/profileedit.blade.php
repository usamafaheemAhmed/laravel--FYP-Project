<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <form action="{{url('/')}}/signUp" method="post" enctype="multipart/form-data" id="signUpForm">
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
        @error('password')
        <span class="text-warning">{{$message}}</span>
       @enderror
        </div>
  
        <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend" style="border:none">
                <span class="input-group-text" id="image1"><i class="fa-solid fa-image"></i></span>
              </div>
              <input type="file" name="image" id="image" class="form-control" placeholder="Your Image" value="{{old('job')}}"  data-toggle="tooltip" data-placement="right" title="Enter Your Password:'Uk322085%' "  onfocus="color(this.id)" onblur="colorRevert(this.id)" >
          </div>
          @error('image')
          <span class="text-warning">{{$message}}</span>
         @enderror
          </div>
     
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend" style="border:none">
                <span class="input-group-text" id="age1"><i class="fa-solid fa-phone"></i></span>
              </div>
              <input type="numeric" id="age" name="age" class="form-control" placeholder="03124513576" aria-label="mobile" value="{{old('mobile')}}" aria-describedby="mobile1" data-toggle="tooltip" data-placement="right" title="Enter Your Phone Number With out Country Code" onfocus="color(this.id)" onblur="colorRevert(this.id)">
            </div>
            @error('mobile')
            <span class="text-warning">{{$message}}</span>
           @enderror
          </div>


          <div class="form-group form-button">
            <button type="submit" class="btn col-md-12 resgister">Register</button>
          </div>
      

</form>












</div>