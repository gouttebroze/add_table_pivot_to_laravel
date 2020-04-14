<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Blog Template · Bootstrap</title>

    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     Bootstrap core CSS 
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 Favicons 
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">-->



  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="https://cdn.vuetifyjs.com/images/logos/favicon.ico">





  
    
 <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      /* stylelint-disable selector-list-comma-newline-after */

.blog-header {
  line-height: 1;
  border-bottom: 1px solid #e5e5e5;
}

.blog-header-logo {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
  font-size: 2.25rem;
}

.blog-header-logo:hover {
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display", Georgia, "Times New Roman", serif;
}

.display-4 {
  font-size: 2.5rem;
}
@media (min-width: 768px) {
  .display-4 {
    font-size: 3rem;
  }
}

.nav-scroller {
  position: relative;
  z-index: 2;
  height: 2.75rem;
  overflow-y: hidden;
}

.nav-scroller .nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  padding-bottom: 1rem;
  margin-top: -1px;
  overflow-x: auto;
  text-align: center;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.nav-scroller .nav-link {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: .875rem;
}

.card-img-right {
  height: 100%;
  border-radius: 0 3px 3px 0;
}

.flex-auto {
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
}

.h-250 { height: 250px; }
@media (min-width: 768px) {
  .h-md-250 { height: 250px; }
}

/* Pagination */
.blog-pagination {
  margin-bottom: 4rem;
}
.blog-pagination > .btn {
  border-radius: 2rem;
}

/*
 * Blog posts
 */
.blog-post {
  margin-bottom: 4rem;
}
.blog-post-title {
  margin-bottom: .25rem;
  font-size: 2.5rem;
}
.blog-post-meta {
  margin-bottom: 1.25rem;
  color: #999;
}

/*
 * Footer
 */
.blog-footer {
  padding: 2.5rem 0;
  color: #999;
  text-align: center;
  background-color: #f9f9f9;
  border-top: .05rem solid #e5e5e5;
}
.blog-footer p:last-child {
  margin-bottom: 0;
}
    </style>

<!---->
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Griffy&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
   
  

  <script src="{{ asset('js/app.js') }}" defer></script>
</head>       

       <!-- Styles -->
       
       <link href="{{ asset('css/app.css') }}" rel='stylesheet'>

   
   <body>
      
   <!--test failed for my first component vue.js-->
      
   <!--
   <v-app> 
       
    <example-component></example-component>
    
       </v-app>
      
--> 
    <div id="app">
          <v-app>  
            
            <produits-component></produits-component>
        </v-app>
            
</div>  
 

       
   
  <!--header-->
  <nav class="navbar navbar-expand-lg">

<ul class="navbar-nav">
      <li class="active">
          <a href="http://localhost:8000/contact" class="nav-link">Contact</a>
      </li>

      <li class="nav-item">
            <a href="http://localhost:8000/products" class="nav-link">Products</a>
      </li>

      <li class="nav-item">
          <a href="productsController.php" class="nav-link">Vinyls</a>
      </li>
        
      <li class="nav-item">
          <a href="productsController.php" class="nav-link">CDs</a>
      </li>

      <li class="nav-item">
          <a href="productsController.php" class="nav-link">Graphzines</a>
      </li>
            
      <li class="nav-item">
          <a href="cartController.php" class="nav-link">Panier</a>
      </li>

        
    </ul>

</nav>

<!--Puis, j'affiche le nombre d'article acheter sur la page products
grâce au package Soppingcart, 

!!!A FAIRE:IL FAUT QUE JE RAJOUTE LA ROUTE A LA PLACE DU "#"!!!-->

<a class="text-muted" href="#"> Panier <span class="badge badge-pile badge-dark">{{ Cart::count() }}

</span></a>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif



    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="{{ route('produits.index') }}">Alternative Vintage Art's & Rock</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </header>


  <!--navbar categories =>!!!A CORRIGER!!!=>(erreur si je fais mon foreach: variable categories introuvable, j'ai mis mes foreach pr sidebare et navbar ds categories"dans mes view "produits"-->
  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      
   </nav>
  </div>
  
<!--sidebar categories-->
  <div class="produits section-container">
    <div class="sidebar">
      
      </ul>
    </div>
  </div>


  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">About Alternative Scene </h1>
      <p class="lead my-3">Une musique alternative est une musique qui s’affranchit de tout type d’appartenance de style, de forme de jeu, de famille musicale, de règles à respecter. Elle s’invente avec ses propres critères de composition, de réalisation ou de diffusion. On retrouve dans la musique alternative, de nombreuses influences musicales, sans pour autant que celle-ci s'enferme dans des codes spécifiques de genre. La notion d'alternative réside également dans l'idée d'une certaine liberté face aux systèmes industriels existants. On peut donc dire qu'il n'existe pas une seule forme de musique alternative, mais que celle-ci est forcément inclassable, ouverte et plurielle.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
      <ul>
        <li>
        Avant-garde
        </li>
        <li>
          Liste de genres musicaux
        </li>
        <li>
        Musique improvisée
        </li>
        <li>
        Musique contemporaine
        </li>
        <li>
        Culture underground
        </li>
        
        
      </ul>
    </div>
  </div>

  <div class="row mb-2">
  
      @yield('content')
    
    
    

  </div><!-- /.row -->

</main><!-- /.container -->


    <!--footer-->
<footer class="blog-footer">
  <p>Site make by Alternative Vintage Art's & Rock Music Distibution 2020</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
</body>
</html>
