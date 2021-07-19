<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Controllers\Upload;
use Illuminate\Support\Facades\DB;
use App\Models\produit;

use Illuminate\Http\Request;



   
class ProduitController extends Controller Implements HasMedia
{
    

    function insertProduit(Request $request ) {

        $request->validate([

            'libelle'=>'required',
            'description'=>'required',
            'stock'=>'required',
            'image'=>'required',
            'id_categorie'=>'required',
            'prix_vente'=>'required',
            'prix_achat'=>'required',
            'statut'=>'required'
        ]);

        $query = DB::table('produits')->insert([
            'libelle'=>$request->input('libelle'),
            'description'=>$request->input('description'),
            'stock'=>$request->input('stock'),
            'image'=>$request->input('image'),
            'id_categorie'=>$request->input('id_categorie'),
            'prix_vente'=>$request->input('prix_vente'),
            'prix_achat'=>$request->input('prix_achat'),
            'statut'=>$request->input('statut')
        ]);

        // $query->addMedia($request['image'])->toMediaCollection('image');

        // 'image'=>Upload::rename(). Upload::getExtension($_FILES['image']['name']),
        // $request->upload_files($_FILES['image']['tmp_name'], 'Image' . 'image'),

        return redirect('/produits/display');  
        

    
    }  

    public function ListeProduits() {

        $display = produit::all(); //permet de='afficher de manière ascendante.
        return view('admin/produits/display', ['produit'=>$display]);

    }


    public function destroyProduit($id_produit) {
        $data = DB::delete('delete from produits where id_produit = ?', [$id_produit]);
        return redirect('/produits/display');
    }


}
