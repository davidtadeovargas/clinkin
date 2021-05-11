@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - Bienvenido!</title>

@stop

@section('body')
    @parent

    <!-- HERO -->
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/fondo_azul.png');background-size: no-repeat;height: 100vh !important">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-3  col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                        </div>  
                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;">

                                   <h1 class="text-white" data-aos="fade-up">¡Bienvenido de nuevo!</h1><br>

                                   <p class="text-white" data-aos="fade-up" style="font-size: 16px;opacity: 0.7;background-color: black;padding: 2em;border-radius: 10px;font-weight: normal;text-align: left">Continúa el <span style="font-weight: bold;font-size: 16px;color: yellow">Test Vocacional Clinkin</span> donde lo dejaste.<br><br>
                                    Te recordamos:<br>
                                    *No hay límite de tiempo<br>
                                    *Concéntrate y asegúrate de estar en un lugar sin distracciones
                                    *Para resultados certeros, responde sinceramente.<br><br>
                                    Toma en cuenta que al escoger tu carrera, también estás escogiendo tu profesión de vida.
                                   </p>
                                   <br><br>
                                   
                                  <button class="btn btn-info" type="button" onclick="continueButton()" style="border-radius: 20px;">
                      Continuar Test
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

            window.location ="continue_test";
        }

        $(document).ready(function(){
        });

    </script>
    
@stop