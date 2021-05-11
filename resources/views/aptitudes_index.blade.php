@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - Conoce tus aptitudes y habilidades (Test)</title>

@stop

@section('body')
    @parent

    <!-- HERO -->
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/colores1.grande.png');background-size: no-repeat;height: 100vh !important">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-1  col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                        </div>  
                        <div class="col-lg-10 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;">

                                    <?php 

                                      if(Session::get("license")=="P"){
                                          echo '<span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-right: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: white;border-radius: 50%;display: inline-block;margin-left: 10px;margin-right: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: white;border-radius: 50%;display: inline-block;margin-right: 10px;margin-left: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: white;border-radius: 50%;display: inline-block;margin-right: 10px;margin-left: 10px"></span>';
                                      } else {
                                          echo '<span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-right: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: white;border-radius: 50%;display: inline-block;margin-left: 10px;margin-right: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: white;border-radius: 50%;display: inline-block;margin-right: 10px;margin-left: 10px"></span>';
                                      }

                                    ?>

                                    <br><br><br>

                                   <h1 class="text-white" data-aos="fade-up">¿Conoces tus aptitudes y habilidades?</h1>

                                   <br><br>

                                   <p class="text-white" data-aos="fade-up" style="font-size: 16px;opacity: 0.7;background-color: black;padding: 2em;border-radius: 10px;">En esta primera sección descubrirás las aptitudes y habilidades más presentes en ti.<br><br>
                                   A continuación, se te presentará un listado de actividades y deberás indentificar qué tan hábil o capaz eres de realizar cada una de ellas. Es de suma importancia que te bases en qué tan capaz eres, no si es algo que te gustaría hacer o no.</p>
                                   <br><br>
                                   
                                  <button class="btn btn-info col-sm-4" type="button" onclick="buttonClick()" style="border-radius: 20px;">
                      Comenzar
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
        
        function buttonClick(){

            window.location ="aptitudes_test";
        }

        $(document).ready(function(){
        });

    </script>
    
@stop