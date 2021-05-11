<!DOCTYPE html>
<html lang="en">
<head>

     <title>Clinkin - Iniciar sesión</title>
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

     <script type="text/javascript">
         
         function closeDialog(){
            $("#dialog").css("display", "none");
        }

         function iniciarButton(e){

            e.preventDefault();

            const email = $("#email").val();
            const password = $("#password").val();
            const code = $("#code").val();
            
            if(email == ""){
                $("#dialog").css("display","block");
                $("#titleDialog").text("Ups!");
                $("#textDialog").text("Ingresa tu correo electrónico");
                $("#email").focus();
                return false;
            }
            if(password == ""){
                $("#dialog").css("display","block");
                $("#titleDialog").text("Ups!");
                $("#textDialog").text("Ingresa tu contraseña");
                $("#password").focus();
                return false;
            }
            if(code == ""){
                $("#dialog").css("display","block");
                $("#titleDialog").text("Ups!");
                $("#textDialog").text("Ingresa el código del test");
                $("#code").focus();
                return false;
            }
            
            disableFields();

            $.ajax({
                type: 'POST',
                url: '{{ \Config::get("APP_URL") }}/login',
                data: JSON.stringify ({'email': email,'password': password,'code': code}),
                success: function(data) { 
                      
                    enableFields();

                    if(data.res == "ok"){
                      window.location.href = "welcome";
                    }
                    else{
                      alert("Ups, tuvimos algunos inconvenientes porfavor intenta de nuevo :(");
                    }

                    return false;
                },
                error: function (error) {
                    enableFields();
                    alert('error; ' + eval(error));
                },
                contentType: "application/json",
                dataType: 'json'
            });

            return false;
        }

        function disableFields(){

            $("#email").prop( "disabled", true ); //Disable
            $("#password").prop( "disabled", true ); //Disable
            $("#code").prop( "disabled", true ); //Disable
            $("#buttonInit").prop( "disabled", true ); //Disable
          }

      function enableFields(){

        $("#email").prop( "disabled", false ); //Disable
        $("#password").prop( "disabled", false ); //Disable
        $("#code").prop( "disabled", false ); //Disable
        $("#buttonInit").prop( "disabled", false ); //Disable
      }

     </script>

</head>
<body>

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
                        <a href="index" class="nav-link smoothScroll">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="about_test" class="nav-link smoothScroll">Acerca del test</a>
                    </li>
                    <li class="nav-item">
                        <a href="products" class="nav-link">Productos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="dialog" data-aos="fade-up" style="background-color: white;display: none; padding: 2em;border-radius: 10px;color: black !important;position: absolute;z-index: 99999;margin: 100px;text-align: center;">
        <div class="row">
            <div class="col-sm-11">
            </div>
            <div class="col-sm-1">
                <img src="./images/quitar.png" alt="Girl in a jacket" width="30" style="cursor: pointer;" onclick="closeDialog()">
            </div>
        </div>
        <h1 class="text-white" data-aos="fade-up" id="titleDialog" style="font-size: 33px;color: #00bfff !important; text-align: center;">Título</h1><br>
        <p class="text-white" style="font-size: 16px;color: black !important;" id="textDialog">Cuerpo</p>
            
    </div>

     <!-- BLOG -->
     <section class="blog" style="background-image: url('./images/fondo_azul.png');background-size: no-repeat;">
          <div class="container">
               <div class="row">

                    <div class="col-lg-12 col-12 py-5 mt-5 mb-3 text-center">

                      <h1 class="mb-4" data-aos="fade-up" style="font-size: 55px;color: white">Test Vocacional</h1>
                      <p class="mb-4" data-aos="fade-up" style="font-size: 20px;color: white;font-weight: normal;margin-top: -20px !important;">¡Convierte tu pasión en un proyecto de vida!</p>
                    </div>

                    <div class="col-md-3">
                    </div>

                    <div class="col-md-6 newsletter-form" style="padding: 0px !important; margin-top:0px !important">
                      <form action="#" method="get" enctype="multipart/form-data">
                      <div class="form-group mt-4"  data-aos-delay="400">
                        <input name="email" type="email" class="form-control" 
                        		id="email" aria-describedby="emailHelp" placeholder="Correo electrónico" style="border-radius: 20px;" required value="artumarc.test@gmail.com">
                          <input name="password" type="password" class="form-control" 
                            id="password" aria-describedby="emailHelp" placeholder="Contraseña" style="border-radius: 20px;" required value="Caracas#2021.">

                            <input name="code" type="number" class="form-control" 
                            id="code" aria-describedby="emailHelp" style="border-radius: 20px;" placeholder="Código del test" value="654321" required>

                        
                      </div>

                      <div class="form-group form-check" data-aos-delay="500" style="text-align: center;">

                        <button type="submit" style="background-color:  #80bfff;width: 200px !important"  data-aos-delay="500" class="btn w-100 mt-3" onclick="iniciarButton(event)" id="buttonInit">Iniciar</button>
                        <div class="clearfix"></div>
                      <br>
                        <label class="form-check-label" style="color: white;font-weight: bold;" for="monthly">¿Olvidaste tu contraseña?</label><br>
                        <label class="form-check-label" style="color: white;font-weight: bold;" for="monthly">¿Eres nuevo en Clinkin? <a href="#" style="font-weight: bold;color: white">Regístrate</a></label><br><br>
                      </div>

                      </form>
                    </div>
                    <div class="col-md-3">
                    </div>

               </div>
          </div>
     </section>

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>