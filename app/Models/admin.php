<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admins';

    protected $fillable = ['login', 'password', 'statut']; /*it's the parameters who will write with the user */

    protected $hidden = ['id_admin', 'created_at','updated_at']; /*for not display these parameters in the form*/
    use HasFactory;
}
