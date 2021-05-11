@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - ¿Qué carrera debería estudiar?</title>

    @section('style')
      @parent

    @stop

@stop

@section('body')
    @parent
    
    <!-- HERO -->
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/fondo_azul.png');background-size: no-repeat;height: 100vh !important">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-1  col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                        </div>  
                        <div class="col-lg-10 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;">

                                  <?php 

                                      if(false){
                                          echo '<span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-right: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-left: 10px;margin-right: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-right: 10px;margin-left: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-right: 10px;margin-left: 10px"></span>';
                                      } else {
                                          echo '<span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-right: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-left: 10px;margin-right: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-right: 10px;margin-left: 10px"></span>';
                                      }

                                    ?><br><br>
                                    
                                   <h1 class="text-white" data-aos="fade-up">¿Qué carrera debería estudiar?</h1>

                                   <br><br>

                                   <p class="text-white" data-aos="fade-up" style="font-size: 16px;opacity: 0.7;background-color: black;padding: 2em;border-radius: 10px;text-align: left;">¡La recta final! Aquí descubrirás tus intereses universitarios, es decir, qué tipo de careras se acoplan a tus interes y aptitudes personales.<br><br>
                                   A continuación, se te presentará un listado de actividades que deberás priorizar en orden de tus preferencias, tomando como principal opción con las que te sentirás más satisfecho al momento de realizarlas.<br><br>
                                   En caso de que todas las actividades sean de tu interés, toma en cuenta las que más te motivarían en este momento.
                                    </p>
                                   
                                   
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
            window.location = "carreras_test_1?next=1";
         }

     </script>
    
@stop