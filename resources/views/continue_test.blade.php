@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - Primeros pasos</title>

@stop

@section('body')
    @parent

    <!-- HERO -->
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/fondo_azul.png');background-size: no-repeat;height: 100vh !important">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-2  col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                        </div>  
                        <div class="col-lg-8 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;">
                                  <div class="row">
                                    <div class="col-sm-11">
                                      <p class="text-white" data-aos="fade-up" style="font-size: 16px;opacity: 0.7;background-color: black;padding: 2em;border-radius: 10px;font-weight: normal;text-align: left">
                                      Este test no tiene límite de tiempo, relájate y ve a tu propio ritmo incluso salir y entrar nuevamente retomando donde lo dejaste.
                                     </p>
                                    </div>
                                    <div class="col-sm-1">
                                      <img src="./images/reloj.png" width="90" height="90"></img>
                                    </div>
                                  </div>
                                   <br><br>
                                   <div class="row">
                                    <div class="col-sm-11">
                                      <p class="text-white" data-aos="fade-up" style="font-size: 16px;opacity: 0.7;background-color: black;padding: 2em;border-radius: 10px;font-weight: normal;text-align: left">
                                        Concéntrate y asegúrate de estar en un lugar tranquilo y sin distracciones. Recuerda que al escoger tu carrera, también estas esligiendo tu profesión de vida.
                                       </p>
                                    </div>
                                    <div class="col-sm-1">
                                      <img src="./images/Cerebro.png" width="90" height="90"></img>
                                    </div>
                                  </div>
                                   <br><br>
                                   <div class="row">
                                    <div class="col-sm-11">
                                      <p class="text-white" data-aos="fade-up" style="font-size: 16px;opacity: 0.7;background-color: black;padding: 2em;border-radius: 10px;font-weight: normal;text-align: left">
                                      Para que tus resultados sean lo más acertados posibles, responde con sinceridad en todas las preguntas.
                                     </p>
                                    </div>
                                    <div class="col-sm-1">
                                      <img src="./images/libreta.png" width="90" height="90"></img>
                                    </div>
                                  </div>  <br><br>                                 
                                  <button class="btn btn-info" type="button" onclick="continueButton()" style="border-radius: 20px;width: 200px">
                      Continuar
                  </button>


                              </div>
                        </div>

                        
                    </div>
               </div>
     </section>
    
@stop

@section('scripts')
    @parent

    <script type="text/javascript">
        
        function continueButton(){

            window.location ="aptitudes_index";
        }

        $(document).ready(function(){
        });

    </script>
    
@stop