@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - Resultados</title>

    @section('style')
      @parent

    @stop

@stop

@section('body')
    @parent
    
      <div id="dialogPremium" data-aos="fade-up" style="background-color: white;padding: 2em;border-radius: 10px;color: black !important;position: absolute;z-index: 99999;margin: 100px;text-align: center;display: <?php 

          if(Session::get('license')=="P"){
              echo "none";
          } else{
              echo "block";
          }

        ?>">
        <div class="row">
            <div class="col-sm-11">
            </div>
            <div class="col-sm-1">
                <img src="./images/quitar.png" alt="Girl in a jacket" width="30" style="cursor: pointer;" onclick="closePremiumDialog()">
            </div>
        </div>
        <h1 class="text-white" data-aos="fade-up" style="font-size: 26px;color: #4fb7b2 !important; text-align: center;font-weight: bold;" id="dialogTitle">! Es momento de seleccionar la carrera ideal para ti !</h1><br>
        <p class="text-white" id="dialogText" style="font-size: 16px;color: grey !important;">Hasta ahora has logrado identificar tus aptitudes y habilidades, pero ¿qué tanto deseas acercarte a tu propósito de vida? Contrata nuestra versión Premium y, adicional, obtén la información detallada de cada uno de tus oportunidades profesionales (desde su objetivo hasta su plan de estudios), junto con las universidades que las ofrecen y sus becas disponibles.</p>
            
        <h1 class="text-white" id="dialogText" style="font-size: 20px;color: grey !important;font-weight: bold !important;">Adquiere esta extensión por tan solo $$$</h1>

        <br>
        <button class="btn btn-info col-sm-6" type="button" onclick="premiumClick()" style="border-radius: 20px;">
                                              Cambiar a Premium
                                              <img src="./images/premium_carga_masiva.png" class="col-sm-2" alt="" style="width: 70px;height: 40px">
                                            </button>
    </div>

     <!-- HERO -->
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/fondo premium.png');background-size: cover;">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-3  col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                        </div>  
                        <div class="col-lg-12 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;padding: 0em">

                                  <div class="row">
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-3">
                                    </div>
                                    <div class="col-sm-3">
                                      <a href="" id="printerButton">
                                        <img src="./images/impresora.png" style="text-align: right;cursor: pointer;" class="col-sm-3" alt="">
                                        </img>
                                      </a>
                                    </div>  
                                  </div>

                                  <h1 class="text-white"  style="font-weight: bold;color: white;font-size: 35px">¡Es momento de decidir!</h1>
                                  

                                   <h1 class="text-white"  style="color:white !important;font-weight: bold;font-size: 25px">Conoce tus resultados y elige tu profesión"</h1><br><br>

                                   <div class="row" style=";padding: 2em">
                                      <div class="col-sm-2">
                                        <img src="./images/icono resultados.png" class="col-sm-5" alt="">
                                      </div>
                                      <div class="col-sm-10">
                                       <h1 class="text-white"  style="color:white !important;font-weight: bold;font-size: 17px;text-align: left;">Tus aptitudes y habilidades</h1>
                                      </div>
                                    </div>
                                    <div class="row" style=";padding: 2em">
                                      <div class="col-sm-3">
                                        <img src="./images/intereses y aptitudes/{{$response['aptitudes']['Aptitud1']->image}}" class="col-sm-10" alt="">
                                      </div>
                                      <div class="col-sm-9">
                                        <p class="text-white"  style="font-size: 16px;opacity: 0.8;background-color: black;padding: 1em;border-radius: 10px;color:black;text-align:justify; ">{{$response["aptitudes"]["Aptitud1"]->descrip}}</p>
                                      </div>
                                    </div>
                                    <div class="row" style=";padding: 2em">
                                      <div class="col-sm-3">
                                        <img src="./images/intereses y aptitudes/{{$response['aptitudes']['Aptitud2']->image}}" class="col-sm-10" alt="">
                                      </div>
                                      <div class="col-sm-9">
                                        <p class="text-white"  style="font-size: 16px;opacity: 0.8;background-color: black;padding: 1em;border-radius: 10px;color:black;text-align:justify; ">{{$response["aptitudes"]["Aptitud2"]->descrip}}</p>
                                      </div>
                                    </div>
                                    
                                    <div class="row" style=";padding: 2em">
                                      <div class="col-sm-3">
                                        <img src="./images/intereses y aptitudes/{{$response['aptitudes']['Aptitud3']->image}}" class="col-sm-10" alt="">
                                      </div>
                                      <div class="col-sm-9">
                                        <p class="text-white"  style="font-size: 16px;opacity: 0.8;background-color: black;padding: 1em;border-radius: 10px;color:black;text-align:justify; ">{{$response["aptitudes"]["Aptitud3"]->descrip}}</p>
                                      </div>
                                    </div>
                                   <br>
                                   
                                   <div class="row" style=";padding: 2em">
                                      <div class="col-sm-2">
                                        <img src="./images/icono resultados.png" class="col-sm-5" alt="">
                                      </div>
                                      <div class="col-sm-10">
                                       <h1 class="text-white"  style="color:white !important;font-weight: bold;font-size: 17px;text-align: left;">Tus interéses ocupacionales</h1>
                                      </div>
                                    </div>
                                  
                                    <div class="row" style=";padding: 2em">
                                      <div class="col-sm-3">
                                        <img src="./images/intereses y aptitudes/{{$response['intereses']['Interes1']->image}}" class="col-sm-10" alt="">
                                      </div>
                                      <div class="col-sm-9">
                                        <p class="text-white"  style="font-size: 16px;opacity: 0.8;background-color: black;padding: 1em;border-radius: 10px;color:black;text-align:justify; ">{{$response['intereses']['Interes1']->descrip}}</p>
                                      </div>
                                    </div>
                                    <div class="row" style=";padding: 2em">
                                      <div class="col-sm-3">
                                        <img src="./images/intereses y aptitudes/{{$response['intereses']['Interes2']->image}}" class="col-sm-10" alt="">
                                      </div>
                                      <div class="col-sm-9">
                                        <p class="text-white"  style="font-size: 16px;opacity: 0.8;background-color: black;padding: 1em;border-radius: 10px;color:black;text-align:justify; ">{{$response['intereses']['Interes2']->descrip}}</p>
                                      </div>
                                    </div>
                                    <div class="row" style=";padding: 2em">
                                      <div class="col-sm-3">
                                        <img src="./images/intereses y aptitudes/{{$response['intereses']['Interes3']->image}}" class="col-sm-10" alt="">
                                      </div>
                                      <div class="col-sm-9">
                                        <p class="text-white"  style="font-size: 16px;opacity: 0.8;background-color: black;padding: 1em;border-radius: 10px;color:black;text-align:justify; ">{{$response['intereses']['Interes3']->descrip}}</p>
                                      </div>
                                    </div>
                                    <div class="row" style=";padding: 2em">
                                      <div class="col-sm-2">
                                        <img src="./images/icono resultados.png" class="col-sm-5" alt="">
                                      </div>
                                      <div class="col-sm-10">
                                       <h1 class="text-white"  style="color:white !important;font-weight: bold;font-size: 17px;text-align: left;">Tus áreas profesionales</h1>
                                      </div>
                                    </div>
                                   <div class="row" style=";padding: 2em">
                                      <div class="col-sm-3">
                                        <img src="./images{{$response['areas']['Area1']->image}}" class="col-sm-10" alt="">
                                      </div>
                                      <div class="col-sm-9">
                                        <p class="text-white"  style="font-size: 16px;opacity: 0.8;background-color: black;padding: 1em;border-radius: 10px;color:black;text-align:justify; ">{{$response['areas']['Area1']->descrip}}</p>
                                      </div>
                                    </div>
                                    <div class="row" style=";padding: 2em">
                                      <div class="col-sm-3">
                                        <img src="./images{{$response['areas']['Area2']->image}}" class="col-sm-10" alt="">
                                      </div>
                                      <div class="col-sm-9">
                                        <p class="text-white"  style="font-size: 16px;opacity: 0.8;background-color: black;padding: 1em;border-radius: 10px;color:black;text-align:justify; ">{{$response['areas']['Area2']->descrip}}</p>
                                      </div>
                                    </div>
                                    <div class="row" style=";padding: 2em">
                                      <div class="col-sm-3">
                                        <img src="./images{{$response['areas']['Area3']->image}}" class="col-sm-10" alt="">
                                      </div>
                                      <div class="col-sm-9">
                                        <p class="text-white"  style="font-size: 16px;opacity: 0.8;background-color: black;padding: 1em;border-radius: 10px;color:black;text-align:justify; ">{{$response['areas']['Area3']->descrip}}</p>
                                      </div>
                                    </div>
                                    <div class="row" style=";padding: 2em">
                                      <div class="col-sm-2">
                                        <img src="./images/areas/{{$response['areas']['Area3']->image}}" class="col-sm-5" alt="">
                                      </div>
                                      <div class="col-sm-10">
                                       <h1 class="text-white"  style="color:white !important;font-weight: bold;font-size: 17px;text-align: left;">Tus áreas profesionales</h1>
                                      </div>
                                    </div>
                                    <div class="row" style=";padding: 2em">
                                        @foreach($response["carreras"] as $Carrera)

                                          <div class="col-sm-4">
                                            <img src="./images/fisiomatematicas.png" class="col-sm-7" alt="">
                                          </div>
                                                  
                                        @endforeach
                                    
                                    </div>
                                    <br>
                                    <br>

                                    <div class="row" style="display: <?php 

                            if(Session::get('license')=="P"){
                                echo "none";
                            } else{
                                echo "display";
                            }

                        ?>">">
                                      <div class="col-sm-12">
                                        <p class="text-white"  style="box-shadow: 5px 15px 15px 5px #888888;font-size: 16px;opacity: 1;background-color: white !important;padding: 2em;border-radius: 10px;color:black !important;text-align:center; "><span style="color: #00b8e6;font-weight: bold !important;font-size: 20px">¡Aún estas a tiempo de adquirir los beneficios del test vocacional Premium!</span>
                                          <br><br>
                                        <span style="color: grey;font-weight: bold !important;font-size: 20px">Conoce y compara los perfiles de cada carrera junto con las universidades y sus becas disponibles para ti.</span></p>
                                      </div>
                                    </div>
                                    <br><br>
                                    <div class="row">
                                        <div class="<?php 

                                                if(Session::get('license')=="P"){
                                                    echo "";
                                                } else{
                                                    echo "col-sm-6";
                                                }

                                              ?>">
                                          <button class="btn btn-info col-sm-6" type="button" onclick="premiumClick()" style="border-radius: 20px;display: <?php 

                                                if(Session::get('license')=="P"){
                                                    echo "none";
                                                } else{
                                                    echo "block";
                                                }

                                              ?>">
                                              Adquirir Premium
                                              <img src="./images/premium_carga_masiva.png" class="col-sm-3" alt="">
                                            </button>
                                        </div>
                                        <div class="<?php 

                                                if(Session::get('license')=="P"){
                                                    echo "col-sm-12";
                                                } else{
                                                    echo "col-sm-6";
                                                }

                                              ?>">
                                            <button class="btn btn-info <?php 

                                                if(Session::get('license')=="P"){
                                                    echo "col-sm-3";
                                                } else{
                                                    echo "col-sm-6";
                                                }

                                              ?>" type="button" onclick="exitTestClick()" style="border-radius: 20px;">
                                              Salir del Test
                                            </button>
                                        </div>
                                    </div>
                              </div>
                        </div>

                        
                    </div>
               </div>
     </section>

@stop

@section('scripts')
    @parent

    <script type="text/javascript">
        
        // A $( document ).ready() block.
        $( document ).ready(function() {
            console.log( "ready!" );

            var link = document.getElementById('printerButton');
            link.href = "{{ \Config::get("APP_URL") }}/api/files/download_results_pdf";
            link.download = 'empty.pdf';
        });

        function closePremiumDialog(){
            $("#dialogPremium").css("display", "none");
        }

        function exitTestClick(){
            window.location = "index";
        }

        function premiumClick(){
          var win = window.open("https://www.facebook.com/enviameunclink/", '_blank');
          win.focus(); 
        }

        
     </script>
    
@stop