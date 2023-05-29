<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataBaseConnectivity;
use App\Http\Controllers\database;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [dataBaseConnectivity::class, 'welcome']);
Route::get('/about', [dataBaseConnectivity::class, 'about']);
Route::get('/contact', [dataBaseConnectivity::class, 'contact']);
Route::get('/dataEntry', [dataBaseConnectivity::class, 'dataEntry']);
Route::get('/view', [dataBaseConnectivity::class, 'view']);
Route::get('/delete/{id}', [dataBaseConnectivity::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [dataBaseConnectivity::class, 'edit']);
Route::get('/logout', [dataBaseConnectivity::class, 'logout']);
Route::get('/ProfilePage', [dataBaseConnectivity::class, 'ProfilePage']);
Route::get('/Shop', [dataBaseConnectivity::class, 'Shop']);
Route::get('/ForGetPassword', [dataBaseConnectivity::class, 'ForGetPassword']);

Route::get("/session",function(){
$session = session()->all();
echo"<pre>";
print_r($session);
echo"</pre>";

});

Route::get("/addSession",[dataBaseConnectivity::class, 'addSession']);
    

// Route::get('/contactForm', [dataBaseConnectivity::class, 'contactForm']);

Route::post('/dataEntry',[dataBaseConnectivity::class, 'dataSending']);
Route::post('/signUp',[dataBaseConnectivity::class, 'signUp']);
Route::post('/signIn',[dataBaseConnectivity::class, 'signIn']);
Route::post('/update/{id}', [dataBaseConnectivity::class, 'update']);
Route::post('/addToCart', [dataBaseConnectivity::class, 'addTOCart']);
Route::post('/contactForm', [dataBaseConnectivity::class, 'contactForm']);
Route::post('/Product', [dataBaseConnectivity::class, 'Product']);
Route::post('/RetailerUpdate', [dataBaseConnectivity::class, 'RetailerUpdate']);
Route::post('/FarmerUpdate', [dataBaseConnectivity::class, 'FarmerUpdate']);
Route::post('/generateCode', [dataBaseConnectivity::class, 'generateCode']);
Route::post('/', [dataBaseConnectivity::class, 'removeCartItem'])->name('CartDelete');


Route::get('/lang/{lang?}', function($lang=Null){

        
    // die;
    if(url()->previous()=="http://127.0.0.1:8000/"||url()->previous()=="http://127.0.0.1:8000/lang/ur"||url()->previous()=="http://127.0.0.1:8000/lang/en" )
        {
            App::setlocale($lang);
             
            return View('welcome');
        }
    else {
        // echo url()->previous();
        //echo url()->current();
        App::setlocale($lang);
        $namelast = parse_url(url()->previous(),PHP_URL_PATH);
       // echo $namelast;
        //die;
        return View($namelast);
    }

});


Route::resource('database', database::class);



// Route::get('/customer', function(){
    
//     $customer = Customer::all();


//     echo"<pre>";
//     print_r($customer->toArray());
//     echo"</pre>";
    
//     // return view('customer');
// });
