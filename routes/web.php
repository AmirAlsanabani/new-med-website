<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\FoodInteractionSearchController;
use App\Http\Controllers\IllnessInteractionSearchController;
use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Mail\WebsiteFeedback;
use Illuminate\Support\Facades\Mail;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
search routes
*/

Route::post('/search', [FoodInteractionSearchController::class, 'search'])->name('search');

Route::post('/Illnesssearch', [IllnessInteractionSearchController::class, 'Illnesssearch'])->name('Illnesssearch');


Route::get('/medicinesearch', 'App\Http\Controllers\SearchController@results')->name('search.results');


Route::get('/medicine/{id}', 'App\Http\Controllers\MedicineController@show')->name('medicine.show');



/* 
Route::post('/signup', 'SignUpController@store')->name('signup.store');
Route::get('admin/invoice/create','InvoiceController@create');
Route::get('admin/api/product','InvoiceController@getAutocompleteData'); 

*/

/*
normal routes
*/
Route::get('/', function () { 
    return view('index');
});


Route::get('/index', function () {
    return view('index');
});


Route::get('aboutus', function () {
    return view('aboutus');
});


Route::get('feedback', function () {
    return view('feedback');
});


Route::get('feedback-sideeffects', function () {
    return view('feedback-sideeffects');
});


Route::get('feedback-website', function () {
    return view('feedback-website');
});

Route::get('foodinteractionmain', function () {
    return view('foodinteractionmain');
});

Route::get('foodinteraction', function () {
    return view('foodinteraction');
});


Route::get('illnessinteraction', function () {
    return view('illnessinteraction');
});


Route::get('medicineinteraction', function () {
    return view('medicineinteraction');
});


Route::get('advancedsearch', function () {
    return view('advancedsearch');
});


Route::get('medicine', function () {
    return view('medicine');
});


Route::get('medicinecategory', function () {
    return view('medicinecategory');
});


Route::get('mymedicine', function () {
    return view('mymedicine');
});


Route::get('profile', function () {
    return view('profile');
});


Route::get('q&a', function () {
    return view('q&a');
});


Route::get('settings', function () {
    return view('settings');
});


Route::get('signin', function () {
    return view('signin');
});


Route::get('signup', function () {
    return view('signup');
});
