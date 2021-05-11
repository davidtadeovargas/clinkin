@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - ¿Qué te interesa hacer en el futuro? (Test)</title>

    @section('style')
      @parent

    @stop

@stop

@section('body')
    @parent
    
    <!-- HERO -->
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/fondolargo.png');background-size: no-repeat;height: 100vh !important">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-1  col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                        </div>  
                        <div class="col-lg-10 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;">

                                  <?php 

                                      if(Session::get("license")=="P"){
                                          echo '<span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-right: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-left: 10px;margin-right: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: white;border-radius: 50%;display: inline-block;margin-right: 10px;margin-left: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: white;border-radius: 50%;display: inline-block;margin-right: 10px;margin-left: 10px"></span>';
                                      } else {
                                          echo '<span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-right: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-left: 10px;margin-right: 10px"></span>
                                          <span class="dot" style="height: 20px;width: 20px;background-color: white;border-radius: 50%;display: inline-block;margin-right: 10px;margin-left: 10px"></span>';
                                      }

                                    ?><br><br>

                                   <h1 class="text-white" data-aos="fade-up">¿Qué te interesa hacer en el futuro?</h1>

                                   <br><br>

                                   <p class="text-white" data-aos="fade-up" style="font-size: 16px;opacity: 0.7;background-color: black;padding: 2em;border-radius: 10px;">En esta segunda sección evaluarás tus intereses ocupacionales, además de descubrir qué actividades son de tu mayor agrado y en cuáles encuentras mayor satisfacción.<br><br>
                                   Se te presentará un listado de actividades donde indicarás qué tanto te gustaría realizar cada una de ellas, independientemente de que sepas hacerlas o no.</p>
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
            window.location = "intereses_test";
         }

     </script>

@stop