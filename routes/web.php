<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\demarcheurController;
use App\Http\Controllers\categorieController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CartController;
use App\Models\produit;



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

    $produits = produit::InRandomOrder()->take(4)->get();
    return view('welcome')->with('produits', $produits);  /*take permet de specifier le nombre de produits qu'on veut prendre dans la BD*/
});


//panier
Route::post('/panier/ajouter', [CartController::class, 'store'])->name('Cart.store');

Route::get('/viderPanier', function(){

    Cart::destroy();
})->name('Cart.destroy');

Route::get('/MonPanier', [CartController::class, 'index'])->name('Cart.index');




Route::get('/product', function () {
    $produits = produit::InRandomOrder()->get();
     return view('product')->with('produits', $produits); /* it's here that we will be display ours products*/
});

Route::get('/aboutUs', function (){
        return view('aboutUs');
});

Route::get('/contactUs', function(){
    return view('contactUs');
});

Route::get('/new', function(){
        return view('new');
});

    //route permettant de le script javascrirpt
    // ->middleware('auth')
// Route::post('/contactUs', function(){
//         return '<script>
//                             document.querySelector(#send).onkeyup = function(){

                            //     var datas = document.querySelectorAll(.form-control);
                            //     swal(" votre requête est prise en considération, nous vous notifierons pour!", "success");
                            // }
//                 </script>';
// });

Route::get('/admin', function(){
    return view('admin/index');
});

Route::get('/dashboard', function(){

    return view('admin/dashboard');
})->name('dashboard');




    // for the part of the administration

    // for the root
Route::get('/root',[adminController::class, 'index']);
Route::post('/add', [adminController::class, 'add']);


    // for the demarcheurs

Route::get('/demarcheurs', function() {

    return view('admin.demarcheurs.index');   /*it's the line of code who display the form datas*/
});

Route::post('/in', [demarcheurController::class, 'in']);

Route::get('/demarcheurs/display', [demarcheurController::class, 'ListeDemarcheurs']);

Route::get('admin/demarcheurs/update/{id_demarcheur}', [demarcheurController::class,'read']);

Route::post('updateDemarcheur', [demarcheurController::class, 'updateDemarcheur']);

Route::get('delete/{id_demarcheur}', [demarcheurController::class, 'destroy']);


// Route::post('update{id_demarcheur}', function(){
//     return view('admin/demarcheurs/update');
// });

        //categories

Route::get('/categories', function() {

    return view('admin.categories.index');
});

Route::post('/insert', [categorieController::class, 'insert']);

Route::get('/categories/display', [categorieController::class, 'ListeCategorie']);

Route::get('delete/{id_categorie}', [categorieController::class, 'destroyCategorie']);


//produits

Route::get('/produits', function() {

    return view('admin.produits.index');   /*it's the line of code who display the form datas*/
});

Route::post('/insertProduit', [ProduitController::class, 'insertProduit']);

Route::get('/produits/display', [ProduitController::class, 'ListeProduits']);

Route::get('delete/{id_produit}', [produitController::class, 'destroyProduit']);

?>