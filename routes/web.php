<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\demarcheurController;


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

    // for the part of site

Route::get('/', function () {
    return view('welcome');  /*it is the view page that display the differents pages of us site web*/
});




Route::get('/product', function () {
     return view('product'); /* it's here that we will be display ours products*/
});

Route::get('/aboutUs', function (){
        return view('aboutUs');
});

Route::get('/contactUs', function(){
    return view('contactUs');
});


    // for the part of the administration

    // for the root
Route::get('/root',[adminController::class, 'index']);
Route::post('/add', [adminController::class, 'add']);


    // for the demarcheurs

Route::get('/demarcheurs', function() {

    return view('admin.demarcheurs.index');   /*it's the line of code who display the form datas*/
});

// Route::post('/insert', function(){
//         return view('/admin.demarcheurs.display');
// });

Route::post('/insert', [demarcheurController::class, 'insert']);

// Route::get('/demarcheurs/display', function() {

//     return view('admin.demarcheurs.display');   /*it's the line who display the datas table */
// });
