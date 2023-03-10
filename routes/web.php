<?php

use App\Http\Controllers\ContactController;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
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

// Facades <- patron de diseño para acceder a un valor de forma sencilla

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/contact', fn () => Response::view('contact'));
// Route::get('/contact', function () {
//     return Response::view('contact');
// });

// Route::post('/contact', function (Request $request) {
//     $data = $request->all();
//     Contact::create($data);
//     return "contact stored";
//     // dd($request->get('phone_number'));
// });

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/', [ContactController::class, 'store'])->name('contacts.store');
