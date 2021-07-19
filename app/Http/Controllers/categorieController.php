<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\categorie;

class categorieController extends Controller
{
    
    function insert(Request  $request) {

        $request->validate([
            'libelle'=>'required',
            'statut'=>'required'
        ]);

        $query = DB::table('categories')->insert([
            'libelle'=>$request->input('libelle'),
            'statut'=>$request->input('statut')
        ]);

        
        return redirect('/categories/display'); 

    
    }  

        

        public function ListeCategorie() {

            $display = categorie::latest()->paginate(100); 
            return view('admin/categories/display', ['categorie'=>$display]);

        }


        public function destroyCategorie($id_categorie) {
            $data = DB::delete('delete from categories where id_categorie = ?', [$id_categorie]);
            return redirect('/categories/display');
        }

      


}
