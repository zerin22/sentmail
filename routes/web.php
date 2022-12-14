<?php

use App\Http\Controllers\MailController;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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


Route::controller(MailController::class)->group(function(){
    Route::get('/email', 'Email')->name('email');
    Route::get('/send-email', 'sendEmail')->name('send-email');
});


// Route::get('/sendmail', function(){

//     Mail::to("hello@email.com")->send(new TestEmail());
// });
