<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['libelle', 'statut'];

    protected $hidden = ['id_categorie', 'created_at', 'updated_at'];
}


