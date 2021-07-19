<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class produit extends Model Implements HasMedia
{
    use HasFactory;

    use InteractsWithMedia;

    protected $fillable = ['libelle', 'description', 'stock', 'image', 'id_categorie', 'prix_vente', 'prix_achat'];

    protected $hidden = ['id_produit', 'created_at', 'updated_at'];


   //  public function create(Resquest $resquest) {

   //    $file = $resquest->file('image');
   //    $input  = $resquest->all();
   //    $produit = $this->create($input);

   //    $produit->addMedia($file)->toMediaCollection();
   //  }


  //  public function media(){
     
  //   $produit = produit::find(1);
  //   $produit
  //      ->addMedia($pathToFile)
  //      ->toMediaCollection();
  //  }

             

     public function getPrice(){

       $this->prix_vente =  floatval($this->prix_vente);

        $prix_vente = $this->prix_vente / 100 ; 

        return number_format($prix_vente, 2 ,'', '') . ' XAF';
     }


     public function search(){

        $produit = produit::find($resquest->id_produit);

        return $produit;

     }

     public static function last(){
        return static::all()->last(); 
    }

  
}
