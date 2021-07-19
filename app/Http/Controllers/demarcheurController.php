<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\demarcheur;

class demarcheurController extends Controller
{

    // this is the function that insert of data in database
    function in(Request  $request) {

        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required|email|unique:demarcheurs',
            'telephone'=>'required',
            'login'=>'required',
            'password'=>'required',
            'statut'=>'required'
        ]);

        $query = DB::table('demarcheurs')->insert([
            'nom'=>$request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'email'=>$request->input('email'),
            'telephone'=>$request->input('telephone'),
            'login'=>$request->input('login'),
            'password'=>$request->input('password'),
            'statut'=>$request->input('statut')
        ]);

        // if($query){

        //     return back()->with('success', 'les informations ont été inséré !!!');
        // }else{
        //     return back()->with('fail', 'Quelque chose a échouée !!!');
        // }

        return redirect('/demarcheurs/display');  //le redirect permet de spécifier la vue de destination

    
    }  

        //fonction permettant d'afficher tous les demarcheurs 

        public function ListeDemarcheurs() {

            $display = demarcheur::latest()->paginate(100); //permet de='afficher de manière ascendante.
            return view('admin/demarcheurs/display', ['demarcheur'=>$display]);

        }

            public function read($id_demarcheur){
                $data = demarcheur::find($id_demarcheur);
                return view('admin/demarcheurs/update', ['data' => $data]);
            }

       public function updateDemarcheur(Request $request) {

        $data = demarcheur::find($request->id_demarcheur);
        $this->nom = $request->nom;
        $this->prenom = $request->prenom;
        $this->email = $request->email;
        $this->telephone = $request->telephone;
        $this->login = $request->login;
        $this->password = $request->password;
        $this->statut = $request->statut;
        $data->save();
        return redirect('/demarcheurs/display');
       }

       public function destroy($id_demarcheur) {
           $data = DB::delete('delete from demarcheurs where id_demarcheur = ?', [$id_demarcheur]);
           return redirect('/demarcheurs/display');
       }










    // public function display() {     //selon le query-builder

    //     $demarcheurs = DB::table('demarcheurs')->get();

    //     return view('admin.demarcheurs.display', ['demarcheurs' => $demarcheurs]);
    // }


//     public function display() selon moi
//     {
//         $demarcheurs = DB::select('select * from demarcheurs where statut = "actif"')->get();

//         return view('admin.demarcheurs.display', ['demarcheurs' => $demarcheurs]);
//     }

 }
