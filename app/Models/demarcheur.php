<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demarcheur extends Model
{
    protected $table = 'demarcheurs';

    protected $fillable = ['nom', 'prenom', 'email', 'telephone', 'login', 'password', 'statut']; /*it's the parameters who will write with the user */

    protected $hidden = ['id_demarcheur', 'created_at','updated_at']; /*for not display these parameters in the form*/

    use HasFactory;
}
