<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Griffy&display=swap" rel="stylesheet">

        <!--<script src="https://unpkg.com/vue/dist/vue.js"></script>
        <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
-->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel='stylesheet'>
    
        <style>
            html, body, footer {
           background-color: #fff;
                color: #636b6f;
                font-family: 'Griffy', cursive;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>

    <body>

            <div id="app">
                
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <!--je retire la balise d'ancrage <a></a> pour y mettre mon router link-->
            <router-link to="/accueil" class="nav-link">Accueil</router-link>
      </li>
      <li class="nav-item">
            <router-link to="/store" class="nav-link">Liste des produits</router-link>
      </li>
        </ul>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a href="http://localhost:8000/store" class="nav-link">Produits</a>
      </li>
      <li class="active">
          <a href="http://localhost:8000/contact" class="nav-link">Contact</a>
      </li>
    
      

    
        
    </ul>

    </nav>
  </div>
</nav>

</div>
   


    <div class="container">
<!-- balise pour le composant router-view -->
<!-- le composant correspondant à la route sera rendu ici, c'est là qu'il apparaîtra -->
            <router-view></router-view>
    </div>

<!--autentification laravel-->
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif




            
            




            <div class="content">
                <div class="title m-b-md">
                Alternative Vintage Arts & Rock
                </div>

@yield('content')
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    
                </div>
            </div>
        </div>

    <!--footer avec 1 ancre qui renvoie en haut de la page-->
        <footer>
            <p>Site make by Alternative Vintage Art's & Rock's Music Distibution 2020</a> by <a href="https://www.linkedin.com/in/hugues-gouttebroze-5aa59619b/">Hugues</a>.</p>
                <p>
                    <a href="#">Back to top</a>
                </p>
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>

