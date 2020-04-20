@extends('template4')

@section('content')



  <!--navbar categories-->
<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      @foreach($categories as $category)
          <a href="{{ route('produits.index', ['category' => $category->slug]) }}">{{ $category->name }}</a>
      
      @endforeach
   </nav>
</div>

<!--breadcrumbs-->
  <div class="breadcrumbs">
    <div class="container">
      <a href="/">home</a>
      <i class="fa fa-chevron right-breadcrumbs-separator"></i>
      <span>Alternative Vintage Art's Shop</span>
    </div>
  </div>
  
<!--sidebar categories-->
  <div class="produits section-container">
    <div class="sidebar">
      <h3>By Categories</h3>
      <ul>
      @foreach($categories as $category)
          <li><a href="{{ route('produits.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
      @endforeach
      
      </ul>
    </div>
  </div>




  
    @foreach($produits as $produit)
      <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">
                  
                @foreach($produit->categories as $category)
                    {{ $category->name }}
                @endforeach

                </strong>
                
                

                <h5 class="mb-0"> {{ $produit->title }}</h5>
                
                <p class="card-text mb-auto">{{ $produit->realisation }}</p>
                <p class="card-text mb-auto">{{ $produit->getPrice() }}</p>
                
                <a href="{{ route('produits.show', $produit->slug) }}" class="stretched-link btn btn-info">voir !</a>
            
                <!--
                <div id="app">
            <v-app>
            <example-component></example-component>
            </v-app>
        </div>
-->

              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="{{ $produit->image }}" alt="">
              </div>
            </div>
      </div>
    @endforeach
    
  

@endsection
    
    

