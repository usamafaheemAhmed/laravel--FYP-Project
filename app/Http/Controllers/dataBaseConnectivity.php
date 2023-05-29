<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Contact_form;
use App\Models\SignUp;
use App\Models\products;
use App\Models\cart;

use Mail;
use App\Mail\Mailer;


class dataBaseConnectivity extends Controller
{
    public  function welcome(){
        return view('welcome');
    }
    public function about(){
        return view('About');
    }
    public function ForGetPassword(){
        return view('ForGetPassword');
    }
    public function contact(){
        return view('Contact');
    }
    public function dataEntry(){
  
        return view('dataEntry');
    }
    public function ProfilePage(){
    //    return redirect()->back();
      
        $logotype = session()->get('userTypeLogedin');
        
       
        // echo $logotype;
        // die;
        if($logotype == "Retailer"){
            $loggedInUser = SignUp::all();
            $products = products::all();
            $cartData = cart::all();
                
        
            $data = compact('loggedInUser','products','cartData');
            // print_r($data) ;
            // die;
            return view('ProfilePageRetailer')->with($data);
        }
        else{
            $loggedInUser = SignUp::all();
            $products = products::all();
            $cartData = cart::all();
                
        
            $data = compact('loggedInUser','products','cartData');
            return view('ProfilePage')->with($data);
        }
    }
    public function dataSending(Request $request)
    {
      
    
        $request->validate([
            'firstName' => 'required|min:3|max:20',
            'middleName' => 'min:3|max:12',
            'lastName' => 'required|min:3|max:12',
            'email' => 'required|email',
            'job' => 'min:3|max:20',
            'mobile'=> 'required|numeric|digits:11',
            // 'image'=> 'file'
            // 'email' => 'required|email',
            // 'password' => 'required|min:5|max:12',
            // 'confirmPassword' => 'required|same:password'
        ]);
       
        // //insert data into database
        $customer = new Customer;
        $customer->firstName = $request->firstName;
        $customer->middleName = $request->middleName;
        $customer->lastName = $request->lastName;
        $customer->email = $request->email;
        $customer->job = $request->job;
        $customer->mobile = $request->mobile;

        $image=$request->hasFile('image');

        if($image){
            $newFile = $request->file('image');
            $file_path = $newFile->store('UploadedImages');
            $newFile->store('public/UploadedImages');
            echo asset('storage/'.$file_path);
        }

       $customer->imgPath = $file_path;
       $customer->save();
        
        return redirect('view')->with('customer', $customer);


        // echo"<pre>";
        // print_r($request->all());
        // echo"</pre>";

        // $name = request('name');
        // $email = request('email');
        // $password = request('password');
        // $confirmPassword = request('confirmPassword');
       
    }
    public function view(){
        $customer = Customer::all();
        $data = compact('customer');
        return view('View')->with($data);
    }

    public function delete($id){
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('view');
    }
    public function edit($id){
        $customer = Customer::find($id);
        return $customer;
    }


    public function update( Request $request, $id){

        // $request->validate([
        //     'firstName' => 'required|min:3|max:12',
        //     'middleName' => 'min:3|max:12',
        //     'lastName' => 'required|min:3|max:12',
        //     'email' => 'required|email',
        //     'job' => 'min:3|max:20',
        //     'mobile'=> 'required|numeric|digits:12',
        // ]);
        $customer = Customer::find($id);


     
        $customer->firstName = $request->firstName;
        $customer->middleName = $request->middleName;
        $customer->lastName = $request->lastName;
        $customer->email = $request->email;
        $customer->job = $request->job;
        $customer->mobile = $request->mobile;
        $customer->save();

        $customer = Customer::all();
        $data = compact('customer');
        return view('ProfilePage')->with($data);
    }




    public function contactForm(Request $request){
    

        $request->validate([
            'userName' => 'required|min:3|max:20',
            'email' => 'required|email',
            'message' => 'min:3|max:50',
            'phoneNumber'=> 'required|numeric|digits:11',
            // 'image'=> 'file'
            // 'email' => 'required|email',
            // 'password' => 'required|min:5|max:12',
            // 'confirmPassword' => 'required|same:password'
        ]);
        
        $contact = new Contact_form;
        $contact->userName = $request->userName;
        $contact->email =  $request->email;
        $contact->phoneNumber =  $request->phoneNumber;
        $contact->message = $request->message;
        $contact->save();


        // echo"<pre>";
        // print_r($request->all());
        // echo"</pre>";

        $data = [
            'subject'=>'customer Care',
            'body'=>'hello i am usama',
            'userName'=>$request->userName,
            'email' => $request->email,
            'phoneNumber'=>$request->phoneNumber,
            'message' => $request->message,
            'img'=>"{{asset('storage/images/weblogo4.png')}}"

        ];
        try{
            Mail::to('uk32208@gmail.com')->send(new Mailer($data));
            return view('welcome');
        }
        catch (Exception $th){
            return response()->json(['Sorry mail not sent']);
        }

        return  view('welcome');

    }
        
    public function signUp(Request $request){
 
        $request->validate([
            'UserName' => 'required|min:3|max:20',
            'email' => 'required|email',
            'CNIC' => 'required|digits:13',
            'mobile'=> 'required|numeric|digits:11',
            'agree-term'=> 'on',
            'password' => 'required|string|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            // // 'password' => 'required|string|min:6',
            'confirmPassword' => 'required|same:password'
        ]);
        
        // $userType = '';
        // $searchBYemail = $request->email;
        // $searchBYUser = $request->UserName;
        
        if (SignUp::where('email', '=', $request->email)->exists()) {
            // $loggedInUser = SignUp::all();
            // $products = products::all();
            // $cartData = cart::all();
            // $data = compact('loggedInUser','products','cartData');
            //    $logintype= session()->get('userTypeLogedin');
            //     if($logintype=="Retailer"){

            //         return view('ProfilePageRetailer')->with($data);
            //     }
            //     else{

            //         return view('ProfilePage')->with($data);
            //     }
            $request->session()->put("cartItems",$cartlegnth);
            return redirect()->back();
         }
         else{
    
                if($request->retailer == 'on'){
                    $userType = "Retailer"; 
                    $signup = new SignUp;
                    $signup->userName = $request->UserName;
                    $signup->email =  $request->email;
                    $signup->CNIC =  $request->CNIC;
                    $signup->phoneNumber = $request->mobile;
                    // $signup->userPassword = Hash::make($request->password);
                    $signup->userPassword = md5($request->password);
                    $signup->userType = $userType;
                    $signup->profilePic = 'images/noUserFileUploaded.png';
                    
                    
                    $signup->save();
    
                    $request->session()->put('user_email',$request->email);
                    
                    $Images = SignUp::where('email', '=', $request->email)->get();
                    $Images[0]->profilePic; 
        
                    $request->session()->put('user_pic',$Images[0]->profilePic); 

                   
                    $loggedInUser = SignUp::all();
                     $products = products::all();
                     $cartData = cart::all();

                     $cart = cart::where('Buyer', '=', $request->email)->get();
                     // echo"<pre>";
                     // print_r($userData->all());
                     //   print_r($cart->all());
                     //   echo"</pre>";
                     // die;
                     // echo count($cart);
                     // die;
                     $cartlegnth= count($cart);
                     session()->put("cartItems",$cartlegnth);
                     
                     $data = compact('loggedInUser','products','cartData');
            
    
                     $request->session()->put('userTypeLogedin','Retailer');
                     $request->session()->put('Productsfount','');
    
    
                    return view('ProfilePageRetailer')->with($data);
                }
                else{
                    $userType = "Farmer"; 
                    $signup = new SignUp;
                    $signup->userName = $request->UserName;
                    $signup->email =  $request->email;
                    $signup->CNIC =  $request->CNIC;
                    $signup->phoneNumber = $request->mobile;
                    // $signup->userPassword = Hash::make($request->password);
                    $signup->userPassword = md5($request->password);
                    $signup->userType = $userType;
                    $signup->profilePic = 'images/noUserFileUploaded.png';
                    $signup->save();
    
                    $request->session()->put('user_email',$request->email);
                    $request->session()->put('userTypeLogedin','Farmer');

                    $Images = SignUp::where('email', '=', $request->email)->get();
                    $Images[0]->profilePic; 
        
                    $request->session()->put('user_pic',$Images[0]->profilePic); 



                    $loggedInUser = SignUp::all();
                     $products = products::all();
                     $cartData = cart::all();

                     $cart = cart::where('Buyer', '=', $request->email)->get();
                     // echo"<pre>";
                     // print_r($userData->all());
                     //   print_r($cart->all());
                     //   echo"</pre>";
                     // die;
                     // echo count($cart);
                     // die;
                     $cartlegnth= count($cart);
                     session()->put("cartItems",$cartlegnth);
                     
                     $data = compact('loggedInUser','products','cartData');
            
    
    
                     $request->session()->put('Productsfount','');
    
    
                    return view('ProfilePage')->with($data);
                }
        
              
            
 
           
    

         }
    }

    public function signIn(Request $request){
      

        $request->validate([
            'emailForSignIn' => 'required|email|exists:SignUp,email',
            'passwordForSignIn' => 'required|string|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ]);

        // return  SignUp::where('email', '=', $request->emailForSignIn)->get();
        // die;
        $found   =    SignUp::where('email', '=', $request->emailForSignIn)->get();
        
        
        // echo"<pre>";
        // print_r($request->all());
        // print_r($found[0]->email);
        // echo"<br>";
        // print_r($found[0]->userPassword);
        // print_r($found[0]->profilePic);
        // echo"</pre>";
        
        
        
        // die;
        if($found[0]->email==$request->emailForSignIn)
        {

       
        // $found   =    SignUp::where('email', '=', $request->emailForSignIn)->get();
    
        // echo"<pre>";
        // print_r($request->all());
        // print_r($found[0]->email);
        // print_r($found[0]->userPassword);
        // print_r($found[0]->profilePic);
        // echo"</pre>";
        $gotPassword =$found[0]->userPassword;
        $userType =$found[0]->userType;       
        $img =$found[0]->profilePic; 
        // echo $img;
        $request->session()->put('user_pic',$img);      
        $password = md5($request->passwordForSignIn);
        // echo $password;
        // die;
        if($gotPassword==$password){
        // echo"<pre>";
        //    print_r($found[0]->profilePic);
        // echo"</pre>";
        $request->session()->put('user_pic', $found[0]->profilePic);      

                if($userType == "Retailer"){
                    $request->session()->put('user_email',$found[0]->email);

                    $loggedInUser = SignUp::all();
                    $products = products::all();
                    $cartData = cart::all();

                    $cart = cart::where('Buyer', '=', $request->emailForSignIn)->get();
                    // echo"<pre>";
                    // print_r($userData->all());
                    //   print_r($cart->all());
                    //   echo"</pre>";
                    // die;
                    // echo count($cart);
                    // die;
                    $cartlegnth= count($cart);
                    session()->put("cartItems",$cartlegnth);
                
        
                    $data = compact('loggedInUser','products','cartData');
                    $request->session()->put('Productsfount','1');
                    $request->session()->put('userTypeLogedin','Retailer');
                    
                    return view('ProfilePageRetailer')->with($data);
                }
                else {
                    $request->session()->put('user_email',$request->emailForSignIn);

                    $loggedInUser = SignUp::all();
                    $products = products::all();
                    $cartData = cart::all();
                
        
                    $data = compact('loggedInUser','products','cartData');
                    $request->session()->put('Productsfount','1');

                    $cart = cart::where('Buyer', '=', $request->emailForSignIn)->get();
                    // echo"<pre>";
                    // print_r($userData->all());
                    //   print_r($cart->all());
                    //   echo"</pre>";
                    // die;
                    // echo count($cart);
                    // die;
                    $cartlegnth= count($cart);
                    session()->put("cartItems",$cartlegnth);

           
                    $request->session()->put('userTypeLogedin','Farmer');
                    return view('ProfilePage')->with($data);
                }
          
        }
        else{
            $request->session()->flash('loginPassword',"Password is not Correct");
            return redirect()->back();
        }
    }
        else{
        $request->session()->flash('emailNotFound',"Email not found");
        return redirect()->back();
         }
     
        
    }

    public function logout(Request $request){







        $request->session()->flush();



        return redirect('/');
    }


    public function addSession(Request $request){
      
        $request->session()->put('user_name','Usama Faheem Ahmed');
        $request->session()->put('user_id','1');


        
        return redirect('/session');
    }


    public function Shop(){
    
        $products = products::all();
        $data = compact('products');
        return View('Shop')->with($data);
    }




    public function Product(Request $request){
    


        $request->validate([
            'productName' => 'required|min:3|max:20',
            'productPrice' => 'numeric|min:3',
            'productQuantity' => 'numeric|min:3',
            'productCategory' => 'required',
            'productDescription' => 'min:3|max:20',
        ]);
       

        // echo"<pre>";
        // print_r($request->all());
        // // print_r($products->all());
        // echo"</pre>";
        // die;
        // //insert data into database
        $products = new products;
        $products->productName = $request->productName;
        $products->productCategory = $request->productCategory;
        $products->productDetails = $request->productDescription;
        $products->productPrice = $request->productPrice;
        $products->productQuantity = $request->productQuantity;
        $products->productSeller = $request->session()->get('user_email');
        $products->product_likes = "0";
        $products->product_Dislikes = "0";
        $products->product_sales = "0";


        $image=$request->hasFile('image');

        if($image){
            $newFile = $request->file('image');
            $file_path = $newFile->store('UploadedImages');
            $newFile->store('public/UploadedImages');
            // echo asset('storage/'.$file_path);
        }

       $products->imgPath = $file_path;
       $products->save();





        // echo"<pre>";
        // print_r($request->all());
        // print_r($products->all());
        // echo"</pre>";
        // die;



       session()->put('Productsfount','1');


        $loggedInUser = SignUp::all();
        $products = products::all();
        $cartData = cart::all();

        $cart = cart::where('Buyer', '=', $request->emailForSignIn)->get();
        // echo"<pre>";
        // print_r($userData->all());
        //   print_r($cart->all());
        //   echo"</pre>";
        // die;
        // echo count($cart);
        // die;
        $cartlegnth= count($cart);
        session()->put("cartItems",$cartlegnth);
    

        $data = compact('loggedInUser','products','cartData');


            return view('ProfilePage')->with($data);
    }



    public function RetailerUpdate(Request $request){
        $request->validate([
            'UserName' => 'min:3|max:20',
            'email' => 'email',
            'CNIC' => 'digits:13',
            'mobile'=> 'numeric|digits:11',
            'age'=> 'numeric',
            // 'password' => 'string|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
           
        ]);


        //  echo"<pre>";
        // print_r($request->all());
        // // print_r($products->all());
        // echo"</pre>";
        // die;
    
        $emailFinder= session()->get('user_email');
        // echo $emailFinder;
        // die;
        $SignUp =  SignUp::where('email', '=', $emailFinder)->get();

        //   echo"<pre>";
        // // print_r($request->all());
        // print_r($SignUp->all());
        // echo"</pre>";
        // die;
     
        $SignUp[0]->userName = $request->UserName;
        $SignUp[0]->email = $request->email;
        $SignUp[0]->CNIC = $request->CNIC;
        $SignUp[0]->phoneNumber = $request->mobile;
        // $SignUp[0]->userPassword = $request->password;
        $SignUp[0]->Address = $request->address;
        $image=$request->hasFile('image');


        // echo $image;
        // die;
        if($image){
            $newFile = $request->file('image');
            $file_path = $newFile->store('UploadedImages');
            $newFile->store('public/UploadedImages');
        }


        $SignUp[0]->profilePic = $file_path ;
        $SignUp[0]->save();

        // echo"<pre>";
        // // print_r($request->all());
        // print_r($SignUp->all());
        // echo"</pre>";
        // die;
        $logotype = session()->get('userTypeLogedin');
        
       
        // echo $logotype;
        // die;
        if($logotype == "Retailer"){
            $loggedInUser = SignUp::all();
            $products = products::all();
            $cartData = cart::all();
                
        
            $data = compact('loggedInUser','products','cartData');
            // print_r($data) ;
            // die;
            return view('ProfilePageRetailer')->with($data);
        }
        else{
            $loggedInUser = SignUp::all();
            $products = products::all();
            $cartData = cart::all();
                
        
            $data = compact('loggedInUser','products','cartData');
            return view('ProfilePage')->with($data);
        }
    }

    public function FarmerUpdate(Request $request){
        $request->validate([
            'UserName' => 'min:3|max:20',
            'email' => 'email',
            'CNIC' => 'digits:13',
            'mobile'=> 'numeric|digits:11',
            'address'=> 'min:3|max:50',
            // 'password' => 'string|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
           
        ]);


        //  echo"<pre>";
        // print_r($request->all());
        // // print_r($products->all());
        // echo"</pre>";
        // die;
    
        $emailFinder= session()->get('user_email');
        echo $emailFinder;
        // die;
        $SignUp =  SignUp::where('email', '=', $emailFinder)->get();

          echo"<pre>";
        // print_r($request->all());
        print_r($SignUp->all());
        echo"</pre>";
        die;
     
        $SignUp[0]->userName = $request->UserName;
        $SignUp[0]->email = $request->email;
        $SignUp[0]->CNIC = $request->CNIC;
        $SignUp[0]->phoneNumber = $request->mobile;
        // $SignUp[0]->userPassword = $request->password;
        $SignUp[0]->Address = $request->address;
        $image=$request->hasFile('image');


        // echo $image;
        // die;
        if($image){
            $newFile = $request->file('image');
            $file_path = $newFile->store('UploadedImages');
            $newFile->store('public/UploadedImages');
        }


        $SignUp[0]->profilePic = $file_path ;
        $SignUp[0]->save();

        // echo"<pre>";
        // // print_r($request->all());
        // print_r($SignUp->all());
        // echo"</pre>";
        // die;
        $logotype = session()->get('userTypeLogedin');
        
       
        // echo $logotype;
        // die;
        if($logotype == "Retailer"){
            $loggedInUser = SignUp::all();
            $products = products::all();
            $cartData = cart::all();
                
        
            $data = compact('loggedInUser','products','cartData');
            // print_r($data) ;
            // die;
            return view('ProfilePageRetailer')->with($data);
        }
        else{
            $loggedInUser = SignUp::all();
            $products = products::all();
            $cartData = cart::all();
                
        
            $data = compact('loggedInUser','products','cartData');
            return view('ProfilePage')->with($data);
        }
    }



    public function addTOCart(Request $request){


        //  echo"<pre>";
        // print_r($request->all());
        // // print_r($products->all());
        // echo"</pre>";
        // die;

        $products=1;
        session()->put('ProductsInCart',++$products);
        session()->put('ProductsID',$request->productID);
        session()->put('ProductsPrice',$request->productPrice);


        $loggedInUser = SignUp::all();
        $products = products::all();

        $userMail = session()->get("user_email");
        if($userMail){
            $userData =  SignUp::where('email', '=', $userMail)->get();
            // echo"<pre>";
            // print_r($userData->all());
            // // // print_r($products->all());
            // echo"</pre>";
            // die;

          $cart = New cart;

          $cart->UserName =   $request->productName;
          $cart->Buyer =  $userData[0]->email;
          $cart->seller =  $request->Seller;
          $cart->productId =  $request->productID;
          $cart->productPrice =  $request->productPrice;
          $cart->productQuantity =  1;
          $cart->save();

        //   echo"<pre>";
        //   // print_r($userData->all());
        //   print_r($cart->all());
        //   echo"</pre>";
        //   // die;


    
            $cart = cart::where('Buyer', '=', $userMail)->get();
            // echo"<pre>";
            // print_r($userData->all());
            //   print_r($cart->all());
            //   echo"</pre>";
            // die;
            // echo count($cart);
            // die;
            $cartlegnth= count($cart);
            session()->put("cartItems",$cartlegnth);
          
          
            $products = products::all();
            $data = compact('products');
            return View('Shop')->with($data);
        }
        else{
            return redirect()->back();
        }
        
     
    }




    public function removeCartItem(Request $request){
       
    //    try{

        echo "<pre>";
        print_r($request->all());
        echo "</pre>";


        $id = $request->cartId;
        echo $id;
        die;
        if($id){
            return redirect()->back();
        }else {

            $cart = cart::find($id);
            $cart->delete();
            
            $logotype = session()->get('userTypeLogedin');
            
           
            // echo $logotype;
            // die;
            if($logotype == "Retailer"){
                $loggedInUser = SignUp::all();
                $products = products::all();
                $cartData = cart::all();
                    
            
                $data = compact('loggedInUser','products','cartData');
                return view('ProfilePageRetailer')->with($data);
            }
            else{
                $loggedInUser = SignUp::all();
                $products = products::all();
                $cartData = cart::all();
                    
            
                $data = compact('loggedInUser','products','cartData');
                return view('ProfilePage')->with($data);
            }
        }
       
    //    }
    //    catch (Exception $e){
    //     report($e);
    //    return redirect()->back();
    //     }
    }
  


    public function generateCode(Request $request){

        $request->validate([
            'email' => 'required|email|',
            // 'password' => 'string|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ]);
        // echo $request->email;

        

        
        $foundMail = SignUp::where('email', '=', $request->email)->get();
        $encrypt = $foundMail[0]->email;
        $id = $foundMail[0]->id;
        $encryptPassword = $foundMail[0]->userPassword;
        $inputEmail = $request->email;
        $phone = md5($foundMail[0]->id );
        $phoneNumber = substr($phone,-4);
        $contact = "03124513676";
        $massage="don't share with others Code is :".$phoneNumber;
        // echo $phone;
        // die;

        // echo $encrypt;
        // echo $inputEmail;
        // echo $phoneNumber;
        // echo $request->code;

        if($encrypt === $inputEmail){

            if($phoneNumber == $request->code){
                $phoneNumber = "Uk322085%";

                // $foundMail = SignUp::find($id);




                // // echo $foundMail[0]->userPassword;


                $request->session()->flash("showTost",$phoneNumber);
                return view('ForGetPassword');
            }
            else{
                $data = [
                    'subject'=>'Forget Password',
                    'body'=>'Hello! this mail is Generated By Computer Please don\'t reply Back ',
                    'userName'=>$foundMail[0]->userName,
                    'email' => $foundMail[0]->email,
                    'phoneNumber'=>$contact,
                    'message' => $massage,
                    'img'=>"{{asset('storage/images/weblogo4.png')}}"
        
                ];
                try{
                    Mail::to($encrypt)->send(new Mailer($data));
                    return view('ForGetPassword');
                }
                catch (Exception $th){
                    return response()->json(['Sorry mail not sent']);
                }
            }
        }


    }












}
