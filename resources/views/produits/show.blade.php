@extends('template')

@section('content')



      <div class="col-md-12">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                
                <h5 class="mb-0"> {{ $produit->title }}</h5>
                <div class="mb-1 text-muted">{{ $produit->created_at }}</div>
                <p class="card-text mb-auto">{{ $produit->realisation }}</p>
                <p class="card-text mb-auto">Année de sortie: {{ $produit->year }}</p>
                <p class="card-text mb-auto">{{ $produit->description }}</p>
                <p class="card-text mb-auto">{{ $produit->getPrice() }}</p>

                 <!--Package Shopingcart-->
                 <form action="{{ route('cart.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="produit_id" value=" {{ $produit->id }}">
                    <!--<input type="hidden" name="produit_name" value=" {{ $produit->produit_name }}">
                    <input type="hidden" name="price" value=" {{ $produit->price }}">-->

                    <!--on place ces trois ressources dans notre fonctions $produit-->
                    
                    <button type="submit" class="btn btn-dark">Ajouter au panier</button>
                </form>
                <!--<a href="{{ route('produits.show', $produit->subtitle) }}" class="stretched-link btn btn-info">Ajouter au panier</a>-->
              </div>
              <div class="col-auto d-none d-lg-block">
              <img src="{{ $produit->image }}" alt="">
              </div>
            </div>
      </div>
    
    


@endsection