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
Route::get('/signup', [dataBaseConnectivity::class, 'signup']);
Route::get('/view', [dataBaseConnectivity::class, 'view']);
Route::get('/delete/{id}', [dataBaseConnectivity::class, 'delete'])->name('delete');
Route::get('/edit/{id}', [dataBaseConnectivity::class, 'edit']);

Route::post('/signup',[dataBaseConnectivity::class, 'dataSending']);
Route::post('/update/{id}', [dataBaseConnectivity::class, 'update']);


Route::resource('database', database::class);



// Route::get('/customer', function(){
    
//     $customer = Customer::all();


//     echo"<pre>";
//     print_r($customer->toArray());
//     echo"</pre>";
    
//     // return view('customer');
// });
