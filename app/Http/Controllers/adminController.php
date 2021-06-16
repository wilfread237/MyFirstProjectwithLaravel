<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    
    //
    function index() {
        return view('admin.root.index');
    }

    function add(Request  $request) {
        $request->validate([
            'login'=>'required',
            'password'=>'required',
            'statut'=>'required'
        ]);

        $query = DB::table('admins')->insert([
            'login'=>$request->input('login'),
            'password'=>$request->input('password'),
            'statut'=>$request->input('statut')
        ]);
    }

   
     
//  $query = DB::insert('insert into admins(login, password, statut) values(?,?,?)');
}
