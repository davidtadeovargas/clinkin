<!DOCTYPE html>
<html lang="en">
<head>

     <title>Clinkin - Premium - Tus aptitudes y Habilidades</title>
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
        
        function startTestClick(){
            window.location = "premium_results_report_intereses_profesionales";
        }

     </script>
     
</head>
<body>

     <!-- HERO -->
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/Margen_resultados_test.png');background-size: no-repeat">
               <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-3  col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                        </div>  
                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;">
                                  
                                    <div class="row" style="text-align: center;">
                                      <div class="col-sm-10">
                                      </div>
                                      <div class="col-sm-2">
                                        <img src="./images/premium.png" class="col-sm-12" alt="" style="display: <?php 

                                                      if(Session::get('license')=="P"){
                                                          echo "block";
                                                      } else{
                                                          echo "none";
                                                      }

                                                  ?>">
                                      </div>
                                    </div>

                                   <h1 class="text-white" data-aos="fade-up" style="color:#009999 !important;font-weight: bold;text-decoration: underline;font-size: 30px">Tus aptitudes y habilidades</h1><br><br><br>

                                    <div class="row">
                                      <div class="col-sm-3">
                                          <img src="./images/habilidad_numerica.png" class="col-sm-12" alt="">
                                        </div>
                                      <div class="col-sm-9">
                                        <p class="text-white" style="font-size: 16px;padding: 1em;color:black !important;text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-3">
                                          <img src="./images/habilidad_numerica.png" class="col-sm-12" alt="">
                                        </div>
                                      <div class="col-sm-9">
                                        <p class="text-white" style="font-size: 16px;padding: 1em;color:black !important;text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-3">
                                          <img src="./images/habilidad_numerica.png" class="col-sm-12" alt="">
                                        </div>
                                      <div class="col-sm-9">
                                        <p class="text-white" style="font-size: 16px;padding: 1em;color:black !important;text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                      </div>
                                    </div>
                                   
                                   <br>
                                    <div class="row">
                                        <div class="col-sm-11">
                                        </div>
                                        <div class="col-sm-1">
                                            <button class="btn btn-info" type="button" onclick="startTestClick()" style="border-radius: 20px;">
                                              Siguiente
                                            </button>
                                        </div>
                                    </div>
                              </div>
                        </div>
                    </div>
               </div>
     </section>


     
     

    
     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>