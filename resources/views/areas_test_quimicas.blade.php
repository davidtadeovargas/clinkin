@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - Químicas</title>

    @section('style')
      @parent

      <style type="text/css">
         
         progress {
          border: none;
          width: 400px;
          height: 20px;
          background: crimson;
          border-radius: 50px !important;
        }

        progress {
          color: white;
          border-radius: 50px !important;
        }

        progress::-webkit-progress-value {
          background: white;
          border-radius: 50px !important;
        }

        progress::-moz-progress-bar {
          background: white;
          border-radius: 50px !important;
        }

        progress::-webkit-progress-value {
          background: #ffcc00;
          border-radius: 50px !important;
        }

        progress::-webkit-progress-bar {
          background: white;
          border-radius: 50px !important;
        }

      </style>

    @stop

@stop

@section('body')
    @parent
    
    <!-- HERO -->
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/coloreslarga2.png');background-size: no-repeat;">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-1 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                        </div>  
                        <div class="col-lg-10 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;padding: 0px !important">
                                    <progress max="100" value="80" style=""></progress>
                                    <br><br>

                                   <div id="dialog" data-aos="fade-up" style="background-color: white;padding: 2em;border-radius: 10px;color: black !important;margin: 10px;text-align: center;">
                                        <h1 class="text-white col-sm-12" data-aos="fade-up" style="color: black !important;text-align: center;font-size: 30px">Químicas</h1>
                                        <br><br>
                                        <p class="text-white" style="font-size: 14px;color: black !important;text-align: left;">En esta área se aplican las matemáticas y la física, se desarrolla la capacidad de comprensión y análisis, la expresión de ideas con claridad y administración del tiempo de forma ordenada y metódico.<br>
                                        Se desarrolla el razonamiento lógico y sistemático para la solución de problemas tanto en la académico como en lo profesional. Se estudian las leyes del espacio, universo y sus fenómenos, con base en la observación, la experimentación y control.</p><br>
                                        <p class="text-white" style="font-size: 14px;color: black !important;text-align: center;">Selecciona las tres carreras que más te interesen o llamen tu atención:</p><br>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="row">
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <p class="text-white col-sm-10" style="font-size: 14px;color: black !important;text-align: left;">Ingeniero en tecnologias de la información</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="row">
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <p class="text-white col-sm-10" style="font-size: 14px;color: black !important;text-align: left;">Ingeniero en tecnologias de la información</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="row">
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <p class="text-white col-sm-10" style="font-size: 14px;color: black !important;text-align: left;">Ingeniero en tecnologias de la información</p>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="row" style="text-align: right;">
                                        <div class="col-sm-4">
                                        </div>
                                        <div class="col-sm-4">
                                            <button class="btn btn-info col-sm-12" type="button" onclick="nextButtonClicked()" style="border-radius: 20px;">
                                                Aceptar
                                            </button>
                                        </div>
                                        <div class="col-sm-4">
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
        
        function nextButtonClicked(){

            window.location = "<?php 

                            if(Session::get('license')=="P"){
                                echo "carreras_results_carreras";
                            } else{
                                echo "premium_results_report_index";
                            }

                        ?>";
        }

     </script>
    
@stop