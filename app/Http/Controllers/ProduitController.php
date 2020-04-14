<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Requests\Produit as ProduitRequest;
use App\{Produit, Category};

class ProduitController extends Controller
{   

   /* public function index()
    {
        //dd(Cart::content());

        // $query = $slug ? Category::whereSlug($slug)->firstOrFail()->products() : Product::query();
        $produits = Produit::all();
        //->paginate(5);
        $categories = Category::all();
        // return view('index', compact('products', 'categories', 'slug'));
        return view('produits.index', compact('produits', 'categories'));
    }
*/

    public function index(){

        if (request()->category) {

            $produits = Produit::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
                
            })->get();
                $categories = Category::all();
            } else {
        $produits = Produit::inRandomOrder()->take(12)->get();
        $categories = Category::all();
             }
        return view('produits.index')->with([
            'produits' => $produits,
            'categories' => $categories,
        ]);
        

        //retourner le json
        
        $produits = Produit::all();
        return response()->json($produits);
        
        

        /*
        if (request()->categorie) {
            //dd('OK_CATEGORY'); //juste pr voir si ça marche, si on passe ds cette condition, comme ça marche et que ça affiche OK_CATEGORIES, on fait:
            $produits = Produit::with('categories')->whereHas('categories', function ($query) { //->on fait 1 requete 'whereHase' sur la relation 'category' et on lui passe une closure qui prendra en paramètre la requete
                
                $query->where('slug', request()->categorie);// 1 clause 'where' ou on appelle la relation 'category' (où le slug est = à 'request->category')
            });//->paginate(6);
            } else { //sinon on appelle nos produits par défaut

            $produits = Produit::with('categories');//->paginate(6);
        }
        
       // dd($produits);
      //$categories = Category::all();
     $produits = Produit::all();
      //->paginate(5);
      //$categories = Category::all();
      
      return view('produits.index', compact('produits', 'categories'))->with('produits', $produits);
     */

    }

    public function findProduitsByCategory($category_id){

        return Produit::where('category_id', $category_id);
    }

    /*Route::get('/store/{name}',public function () {
        return view('produit.show', ['name' => $name]);
    })*/
    /*public function show(Produit $produit)
    {   
        $category = $id->category->id;    
        return view('produits.show', compact('produit', 'category'));*/

        /*$category = $produit->category->name;    
        return view('show', compact('produit', 'category'));
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
   /* public function show(Produit $produit)
    {   
        $category = $produit->category->name;    
        return view('show', compact('produit', 'category'));
    }*/
    public function show ($slug){


        $produit = Produit::where('slug', $slug)->firstOrFail();
        $category = Category::all();
        return view('produits.show', compact('produit', 'category'))->with('produit', $produit);
        //return view('show', compact('produit'));

        
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (ProduitRequest $produitRequest)
    {
        Produit::create($produitRequest->all());
        return redirect()->route('produits.index')->with('info', 'Le produit a bien été créé');
    }
}
