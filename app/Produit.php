<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = ['title', 'subtitle', 'description', 'price','image', 'year', 'category_id'];

    public function getPrice(){
        //on veux diviser le prix par cent (avec "$this->price" on a accès au prix, on le divise par cent comme il est en cents, on le stocke ds 1 variable "$price")
        $price = $this->price / 100;
        //on retourne un fonction PHP qui permet de formater un nombre, on lui passe le prix, le nbre de décimal après la virgule, on sépare les milliers avec un espace  enfin on fait une concaténation pour les euros
        return number_format($price, 2, ',',' ') . ' €';
    }

    public function categories() 
{ 
    
    return $this->belongsToMany('App\Category'); 

    
}
    
public function findProduitsByCategory($categoryId) {

    $produits = static::where('categoryId', $categoryId);
    $data=[];
        foreach($produits as $produit){

            $data=[ 
                'id' => $produit->id,
                'title' => $produit->title,
                'slug' => $produit->slug,
                'price' => $produit->price,
                'subtitle' => $produit->subtitle,
                'realisation' => $produit->realisation,
                'description' => $produit->description,
                'year' => $produit->year,
                'category' => Category::findOrFail($produit -> categoryId) 
                ];
        }
        return $data();
    }  
    
    
    /*public function produits() 
{ 
    
    return $this->hasMany(Produit::class); 

    //try with ?:

    //return $this->hasMany('App\Product');
}
*/
/*
    public function category()
    { 
        //$products = Category::find(2)->products;
        return $this->belongsTo(Category::class); 
    }
*/
}
