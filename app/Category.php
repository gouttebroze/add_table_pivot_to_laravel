<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    /*On déclare ici avec la méthode products (au pluriel) qu’une catégorie a plusieurs 
    (hasMany) products (Product). On aura une méthode pour récupérer les poduits d’une 
    catégorie.*/
        /*public function products() 
    { 
        
        return $this->hasMany(Product::class); 

        //try with ?:
        //return $this->hasMany('App\Product');
    }*/

    public function produits() 
{ 
    
    return $this->belongsToMany('App\Produit'); 

}

/*public function produits() 
{ 
    
    return $this->hasMany(Produit::class); 

    //try with ?:

    //return $this->hasMany('App\Product');
}*/

}