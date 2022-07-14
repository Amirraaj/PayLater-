<?php

use App\Http\Controllers\Admin\Auth\CollectionController;
use App\Http\Controllers\Admin\Index\indexController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\contact1Controller;
use App\Http\Controllers\Admin\Auth\HomeController;
use App\Http\Controllers\Admin\Auth\OderdetailController;
use App\Http\Controllers\Admin\Auth\RbootController;
use App\Http\Controllers\Admin\Auth\ShoesController;
use App\Http\Controllers\Admin\login\loginController;
use App\Http\Controllers\Admin\login\registerController;

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

Route::get('/', function () {
    return view('welcome');
});



//front end navbar connection is done in this route section
Route::get('/collection',[indexController::class,'Collection'])->name('Collectionindex.display');
Route::get('/index',[indexController::class,'Index'])->name('Index.display');
Route::get('/shoes',[indexController::class,'shoes'])->name('Shoes.display');
Route::get('/racingboot',[indexController::class,'racingboot'])->name('Racingboot.display');
Route::get('/contact',[indexController::class,'contact'])->name('Contact.display');

//Contact us information are inserted into database and are shown in the Admin Contact section in this route field
Route::post('/contact/store',[contact1Controller::class,'Contactstore'])->name('contact-store');
Route::get('/admincontact', [contact1Controller::class, 'contactshow'])->name('contact-list');
Route::get('/category/{id}/delete', [contact1Controller::class, 'DeleteData'])->name('contact.delete');

//home backend route
Route::post('/adminindex',[HomeController::class,"First"])->name('Homefirst-store');
Route::get('/adminindex',[HomeController::class,"Firstshow"])->name('First-list');

//Shoes Back End section
Route::get('/adminshoes',[ShoesController::class,"ShoesShow"])->name('Shoes-Admin-Display');
Route::post('/shoes/store',[ShoesController::class,"AddShoes"])->name('Shoes-store');
Route::get('/adminshowshoes',[ShoesController::class,"ShoesDetail"])->name('Shoes-Detail-Display');
Route::get('/Shoes/{id}/delete',[ShoesController::class,"DeleteShoes"])->name('Shoes-detail-delete');

//backend collection controller
Route::get('/admincollection',[CollectionController::class,"ShowCollection"])->name('collection-admin-displayy');
Route::post('/collection/store',[CollectionController::class,"Data"])->name('Collection-store');

//backend Racing Boot Contoller
Route::get('/adminracingboot',[RbootController::class,"Showboot"])->name('Racingboot-admin-displayy');
Route::post('/racingboot/store',[RbootController::class,"Dataadd"])->name('Racingboot-store');

//backend shoes oder controller
Route::get('/adminoder',[OderdetailController::class,"ShowDetail"])->name('show-oders');
Route::get('/product/{id}',[ShoesController::class,"getProductDetail"])->name('product-detail');
Route::post('/oderstore',[indexController::class,"AddOder"])->name('oderdetail-store');
Route::get('/getoder/{id}/del',[OderdetailController::class,"deliver"])->name('deliver-data');

//login in and register
Route::get('/register',[registerController::class,"register"])->name('register-page');
Route::get('/password',[registerController::class,"password"])->name('password-page');
Route::post('/registernow',[registerController::class,"Adddata"])->name('insert-data');
Route::get('/admin',[loginController::class,"login"])->name('login-page');
Route::post('/admin', [LoginController::class, 'authenticate'])->name('auth.login-user');

Route::post('/changepass',[registerController::class,"changepass"])->name('change-password');

