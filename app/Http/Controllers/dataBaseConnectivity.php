<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class dataBaseConnectivity extends Controller
{
    public  function welcome(){
        return view('welcome');
    }
    public function about(){
        return view('About');
    }
    public function contact(){
        return view('Contact');
    }
    public function signup(){
  
        return view('Signup');
    }
    public function dataSending(Request $request)
    {
      
    
        $request->validate([
            'firstName' => 'required|min:3|max:12',
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
        return view('View')->with($data);
    }

}
