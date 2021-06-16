<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class demarcheurController extends Controller
{

    // this is the function that insert of data in database
    function insert(Request  $request) {

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

        if($query){

            return back()->with('success', 'les informations ont été inséré !!!');
        }else{
            return back()->with('fail', 'Quelque chose a échouée !!!');
        }

    
    }


    public function display()
    {
        $demarcheurs = DB::select('select * from demarcheurs where statut = "actif"');

        return view('admin.demarcheurs.display', ['demarcheurs' => $demarcheurs]);
    }

}
