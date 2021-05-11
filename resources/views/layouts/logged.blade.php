<!DOCTYPE html>
<html lang="en">
<head>

     
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">
     <link rel="stylesheet" href="css/owl.carousel.min.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <link rel="icon" type="image/png" href="./images/logo_clinkin_blanco_verde.png">
     
     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-digital-trend.css">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     
     @yield('head')

     @yield('style')
        
</head>
<body>

    @section('navbar')
        <!-- MENU BAR -->
        <nav class="navbar navbar-expand-lg" style="background: #4fb7b2 !important;padding: 0px !important">
            <div class="container">
                <a class="navbar-brand" href="index">
                 <img src="./images/logo_clinkin_blanco.png"  height="70"></img>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <p href="#" style="color: white;font-weight: bold">Hola <?php echo Session::get("name"); ?></p>
                        </li>
                        <li class="nav-item">
                            <a href="#" id="closeSession" onclick="closeSession(event)" class="nav-link contact">Cerrar sesión </a>
                        </li>
                        <img src="./images/premium_carga_masiva.png"  height="40" style="display: 

                        <?php 

                            if(Session::get('license')=="P"){
                                echo "display";
                            } else{
                                echo "none";
                            }

                        ?>"></img>
                    </ul>
                </div>
            </div>
        </nav>
    @show

    <?php 

        function microseconds() {
            $mt = explode(' ', microtime());
            return ((int)$mt[1]) * 1000000 + ((int)round($mt[0] * 1000000));
        }
    ?>
        
    @yield('body')
    
     <!-- SCRIPTS -->
     <script src="js/globals.js"></script>
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

<<<<<<< HEAD
     <script>
         

         this.url = '<?php echo \Config::get("APP_URL"); ?>' + '/closeLogin';

     </script>


=======
>>>>>>> b78b3e30a6eb7025a8990cee0f3a0df59a080ed8
     @yield('scripts')

</body>
</html>