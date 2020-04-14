<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
    
        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Griffy&display=swap" rel="stylesheet">
        -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel='stylesheet'>
        <!-- Styles -->
        
    </head>


    <body>

    <div id="app">
            <v-app>
            <bar-component></bar-component>
            </v-app>
    </div>


    <nav class="navbar navbar-expand-lg">

<ul class="navbar-nav">
      <li class="active">
          <a href="http://localhost:8000/contact" class="nav-link">Contact</a>
      </li>
      <!--<div id="app">
  <v-app id="inspire">
    <div class="text-center">
      <v-btn class="mx-2" fab dark small color="primary">
        <v-icon dark>mdi-minus</v-icon>
      </v-btn>
      </v-app>
</div>-->
      <li class="nav-item">
            <a href="http://localhost:8000/store" class="nav-link">Store</a>
      </li>

      <li class="nav-item">
          <a href="productsController.php" class="nav-link">Discs</a>
      </li>
      
      <li class="nav-item">
          <a href="productsController.php" class="nav-link">Graphzines</a>
      </li>
        
      <li class="nav-item">
          <a href="productsController.php" class="nav-link">About Underground Arts & Music</a>
      </li>

      
            
      <li class="nav-item">
          <a href="cartController.php" class="nav-link">Panier</a>
      </li>

        
    </ul>

    </nav>
   

    
    

       
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

           


@yield('content')            

    
               
   
<!--
    <div id="app">
    <v-app></v-app>
    </div>
-->
<div id="slide1">

        <div class="slide_inside">
            
                <div class="container">
                    
                    
                    <header>  
                                
                            <h1 class=".h1">Alternative Vintage Arts & Rock</h1>
                        
                        <div id="h2">
                            <h2 class="h2">Vinyls & Books on Underground Scene</h2>
                        
                      </div>
                    </header>                 
                    </br> 

                    


                </div>
        
        </div>
    
    </div>

    <div id="slide2">

        <div class="slide_inside">

                    
                            <h1 class=".h1">VINYLS </h1>
                            <h1 class=".h1">GRAPHZINES</h1>
                        
                            <marquee scrollamount="15" scrolldelay="30" 
                            onmouseover="this.stop();" onmouseout="this.start();">
                            <img src="images/la-tranchee-racine-numero-2-bis.jpg" alt="graphzine" style=width:300px height=500px >：&nbsp;&nbsp;&nbsp;&nbsp;<images src="img/la-tranchee-racine-numero-7.png" alt="graphzine" style=width:300px height=500px > :&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="images/el-ultimo-grito-numero-02.jpg" alt="graphzine" style=width:300px height=500px >：&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="images/la-tranchee-racine-numero-1.jpg" alt="graphzine" style=width:300px height=500px >！&nbsp;&nbsp;&nbsp;&nbsp;</marquee>
        
        </div>
    
    </div>

    <div id="slide3">

        <div class="slide_inside">
             
            <h3>Une musique alternative est une musique qui s’affranchit de tout type 
              d’appartenance de style, de forme de jeu, de famille musicale, de règles 
              à respecter. Elle s’invente avec ses propres critères de composition, de 
              réalisation ou de diffusion. On retrouve dans la musique alternative, de 
              nombreuses influences musicales, sans pour autant que celle-ci s'enferme 
              dans des codes spécifiques de genre. La notion d'alternative réside 
              également dans l'idée d'une certaine liberté face aux systèmes 
              industriels existants. On peut donc dire qu'il n'existe pas une seule 
              forme de musique alternative, mais que celle-ci est forcément 
              inclassable, ouverte et plurielle. </h3></br>
                <h3><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
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
        
        
      </ul></h3>
                  
        
        </div>
    
    </div>

    <div id="slide4">

            <div class="slide_inside">
    
                        
                    <footer>
                        
                        <p>© 2020 Alernative Vintage Art's & Rock</p>


<!-----------------------effet_paralax_de_défilement-------------------------->
                        <marquee scrollamount="4" scrolldelay="30" 
                        onmouseover="this.stop();" onmouseout="this.start();">
                        登陆温馨提示：&nbsp;&nbsp;&nbsp;&nbsp;尊敬的国民彩票会员，您好，
                        出现登陆卡顿，和登陆不上的，请清除缓存，重新登陆即可，
                        谢谢&nbsp;&nbsp;&nbsp;&nbsp;国民彩票提醒您：我司充值渠道已全面恢复，
                        目前支持，支付宝扫码，银联快捷支付，QQ钱包，微信支付，网银存款，
                        银行卡划款等超多种充值渠道，全面提升您的存款速度，
                        欢迎您的游戏！：&nbsp;&nbsp;&nbsp;&nbsp;
                        国民彩票提醒您：我司充值渠道已全面恢复，目前支持，支付宝扫码，银联快捷支付，
                        QQ钱包，微信支付，网银存款，银行卡划款等超多种充值渠道，全面提升您的存款速度，
                        欢迎您的游戏！&nbsp;&nbsp;&nbsp;&nbsp;</marquee>
                            
                    </footer>    
                            
                           
            
            </div>
        
        </div>


        
        
    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>



<!--reconstruction recupé avec mon repository GitHub 
du "template" après plantage suite insertion effets parrallaxe-->

<!--a mettre-->
<!--
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
-->
        <!-- Bootstrap CSS -->
<!--bien remettre-->
<!--
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
-->
    
    
        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Griffy&display=swap" rel="stylesheet">
        -->
<!--bien remettre-->
<!--
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel='stylesheet'>
-->
        
<!--
    </head>
    <body>

    <nav class="navbar navbar-expand-lg">

<ul class="navbar-nav">
      <li class="active">
          <a href="http://localhost:8000/contact" class="nav-link">Contact</a>
      </li>

-->
      <!--à supprimer?: voir quel composent est appellé! -->
      <!--<div id="app">
  <v-app id="inspire">
    <div class="text-center">
      <v-btn class="mx-2" fab dark small color="primary">
        <v-icon dark>mdi-minus</v-icon>
      </v-btn>
      </v-app>
</div>-->

<!--nav bar (besoin de jQuery!, script à recupérer)--> 
<!--
      <li class="nav-item">
            <a href="http://localhost:8000/store" class="nav-link">Store</a>
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
-->   
    
    
<!--autentification laravel-->   
<!--    
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

           

@yield('title')
@yield('content') 
-->           

<!--header à revoir structure (class attribué) pour SASS  --> 
<!-- 
                <div class="title m-b-md">
                Alternative Vintage Arts & Rock
                </div>
   
-->
      <!--à supprimer?: voir quel composent est appellé! -->
<!--
    <div id="app">
    <v-app></v-app>
    </div>
--> 


<!--
            </div>
        </div>
    </body>

-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!--

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>

-->