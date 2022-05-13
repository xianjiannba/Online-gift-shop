<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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
    return view('home');
});



Route::get('managegoods',function(){
    return view('managegoods');
});

Route::get('register',function(){
    return view('register');
});

Route::get('Adminlogin',function(){
    return view('Admin/Adminlogin');
});

Route::any('User',function (){
    return view('user');
});
Route::any('Createwl',function (){
    return view('Wishlist/Createwl');
});

Route::any('Wishlist/1',function (){
    return view('Wishlist/Additem');
});

Route::any('thanks',function (){
    return view('Guest/Thanks');
});

Route::any('testpay',function (){
    return view('Paypal/1');
});

Route::any('searchwl',function (){
    return view('Guest/Searchwl');
});



Route::any('adduser',[TestController::class,'adduser']);

Route::any('showitem',[TestController::class,'showitem']);

Route::any('changeitem',[TestController::class,'changeitem']);

Route::any('loginb',[TestController::class,'login']);

Route::any('showitem1',[TestController::class,'showitem1']);

Route::any('showitemFurniture',[TestController::class,'showitemFurniture']);

Route::any('showitemDailylife',[TestController::class,'showitemDailylife']);

Route::any('showitemAppliance',[TestController::class,'showitemAppliance']);

Route::any('showitemJewelry',[TestController::class,'showitemJewelry']);

Route::any('showitemcosmetics',[TestController::class,'showitemcosmetics']);

Route::any('login',[TestController::class,'loginif']);

Route::any('Createwishlist',[TestController::class,'createwishlist']);

Route::any('additem',[TestController::class,'additem']);

Route::any('showlistitem',[TestController::class,'showlistitem']);

Route::any('continueadd',[TestController::class,'continueadd']);
Route::any('addend',[TestController::class,'addend']);

Route::any('Viewwl',[TestController::class,'viewwl']);

Route::any('Checkwl',[TestController::class,'checkwl']);

Route::any('Searchwl',[TestController::class,'searchwl']);

Route::any('Createguest',[TestController::class,'createguest']);

Route::any('Goshopping',[TestController::class,'goshopping']);
Route::any('Finishshopping',[TestController::class,'finishshopping']);

Route::get('email',[TestController::class,'createEmailForm']);

Route::post('email',[TestController::class,'sendEmail'])->name('send.email');

Route::any('adminlogin',[TestController::class,'adminlogin']);

Route::any('manageuser',[TestController::class,'manageuser']);

Route::any('deleteuser',[TestController::class,'deleteuser']);

Route::any('editusershow',[TestController::class,'editusershow']);

Route::any('edituser',[TestController::class,'edituser']);

Route::any('Adminpage',[TestController::class,'Adminpage']);

Route::any('checkorder',[TestController::class,'checkorder']);
