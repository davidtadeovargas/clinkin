@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - Conoce tus aptitudes y habilidades</title>

    @section('style')
      @parent

      <style>
        
        .center {
          position: absolute;
         top: 50%;
         height: 250px;
         margin-top: -250px; /* Half of the height */
         left: 50%;
         width:400px;
         margin-left: -400px; /* Half of the width */
         border-radius: 5px;
         background:#111;
         padding:10px;
         display: none;
        }

        .dot {
        }
        .dot1 {
            content:url("./images/1-seleccionado.png");
            border-radius: 50%;
            display: inline-block;
        }
        .dot2 {
            content:url("./images/2-seleccionado.png");
            border-radius: 50%;
            display: inline-block;
        }
        .dot3 {
            content:url("./images/3-seleccionado.png");
            border-radius: 50%;
            display: inline-block;
        }
        .dot4 {
            content:url("./images/4-seleccionado.png");
            border-radius: 50%;
            display: inline-block;
        }
        .dot5 {
            content:url("./images/5-seleccionado.png");
            border-radius: 50%;
            display: inline-block;
        }
        
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
    
    <div id="dialog" class="center" data-aos="fade-up" style="background-color: white;padding: 2em;border-radius: 10px;color: black !important;z-index: 99999;margin: 100px;text-align: center;">
        <div class="row">
            <div class="col-sm-11">
            </div>
            <div class="col-sm-1">
                <img src="./images/quitar.png" alt="Girl in a jacket" width="30" style="cursor: pointer;" onclick="closeDialog()">
            </div>
        </div>
        <h1 class="text-white" data-aos="fade-up" style="font-size: 33px;color: #00bfff !important; text-align: center;">Ups!</h1><br>
        <p class="text-white" style="font-size: 16px;color: black !important;">Antes de continuar primero responde a todas las preguntas</p>
            
    </div>

     <!-- HERO -->
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/colores1.grande.png');background-size: no-repeat;">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-1 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                        </div>  
                        <div class="col-lg-10 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;padding: 0px !important">

                                    <progress max="100" value="80" style=""></progress>
                                    <br><br>
                                   <h1 class="text-white" data-aos="fade-up">¿Conoces tus aptitudes y habilidades?</h1>

                                   <br>

                                   <p class="text-white" data-aos="fade-up" style="font-size: 16px;opacity: 0.7;background-color: black;padding: 2em;border-radius: 10px;">¿Qué tan bien consideras que podrías realizar las siguientes actividades?<br>
                                   ¡Ojo! Contesta sin importar si te gusta o si tienes experiencia, sólo qué tan hábil crees que eres para realizarlas.</p>
                                   <br>
                                   
                                   <div id="dialog" data-aos="fade-up" style="background-color: white;padding: 2em;border-radius: 10px;color: black !important;margin: 10px;text-align: center;">
                                        <div class="row">
                                            <div class="col-sm-6">
                                            </div>
                                            <div class="col-sm-6" style="text-align: center;">
                                                <img src="./images/cara_1.png" style="max-width: 60px" class="col-sm-2" alt="">
                                                <img src="./images/cara_2.png" style="max-width: 60px" class="col-sm-2" alt="">
                                                <img src="./images/cara_3.png" style="max-width: 60px" class="col-sm-2" alt="">
                                                <img src="./images/cara_4.png" style="max-width: 60px" class="col-sm-2" alt="">
                                                <img src="./images/cara_5.png" style="max-width: 60px" class="col-sm-2" alt="">
                                            </div>
                                        </div>
                                        <br> 
                                        @foreach($preguntas as $Pregunta)
                                              
                                              <?php 
                                                
                                                $dot1 = "";
                                                $dot2 = "";
                                                $dot3 = "";
                                                $dot4 = "";
                                                $dot5 = "";

                                                if($Pregunta['value']==0){
                                                    $dot1 = "dot dot1";
                                                }
                                                else if($Pregunta['value']==1){
                                                    $dot2 = "dot dot2";
                                                }
                                                else if($Pregunta['value']==3){
                                                    $dot3 = "dot dot3";
                                                }
                                                else if($Pregunta['value']==4){
                                                    $dot4 = "dot dot4";
                                                }
                                                else if($Pregunta['value']==5){
                                                    $dot5 = "dot dot5";
                                                }

                                                if(\Config::get('ENV')=="test" && $dot1 == "" && $dot2 == "" && $dot3 == "" && $dot4 == "" && $dot5 == ""){
                                                     $dot1 = "dot dot1";
                                                }

                                              ?>

                                              <div class="row">
                                                  <div class="col-sm-6">
                                                      <p class="text-white" style="font-size: 14px;color: black !important;text-align: left;">{{$Pregunta["name"]}}</p>
                                                  </div>
                                                  <div class="col-sm-6" style="text-align: center;">
                                                      <img src="./images/cara_1_circule.png?{{round(microtime(true) * 1000)}}" style="max-width: 55px;cursor: pointer;" class="col-sm-2 clickables_images unselected clickables_question_{{$Pregunta['id']}} {{$dot1}}" data-id="{{$Pregunta['id']}} " data-value="0" alt="" id="question_one_{{$Pregunta['id']}}">
                                                      <img src="./images/cara_2_circule.png?{{round(microtime(true) * 1000)}}" style="max-width: 55px;cursor: pointer;" class="col-sm-2 clickables_images unselected clickables_question_{{$Pregunta['id']}} {{$dot2}}" data-id="{{$Pregunta['id']}}" data-value="1" alt="" id="question_two_{{$Pregunta['id']}}" name="2">
                                                      <img src="./images/cara_3_circule.png?{{round(microtime(true) * 1000)}}" style="max-width: 55px;cursor: pointer;" class="col-sm-2 clickables_images unselected clickables_question_{{$Pregunta['id']}} {{$dot3}}" data-id="{{$Pregunta['id']}}" data-value="3" alt="" id="question_three_{{$Pregunta['id']}}" name="3">
                                                      <img src="./images/cara_4_circule.png?{{round(microtime(true) * 1000)}}" style="max-width: 55px;cursor: pointer;" class="col-sm-2 clickables_images unselected clickables_question_{{$Pregunta['id']}} {{$dot4}}" data-id="{{$Pregunta['id']}}" data-value="4" alt="" id="question_four_{{$Pregunta['id']}}" name="4">
                                                      <img src="./images/cara_5_circule.png?{{round(microtime(true) * 1000)}}" style="max-width: 55px;cursor: pointer;" class="col-sm-2 clickables_images unselected clickables_question_{{$Pregunta['id']}} {{$dot5}}" data-id="{{$Pregunta['id']}}" data-value="5" alt="" id="question_five_{{$Pregunta['id']}}" name="5">
                                                  </div>
                                              </div>

                                        @endforeach
                                        
                                        <br>
                                    </div>
                                    <div class="row" style="text-align: right;">
                                        <div class="col-sm-5">
                                        </div>
                                        <div class="col-sm-5">
                                        </div>
                                        <div class="col-sm-2">
                                            <button class="btn btn-info col-sm-12" type="button" onclick="nextButtonClicked()" id="buttonNext" style="border-radius: 20px;">
                                                Siguiente
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
        
        var totalLinesSelected = 0;
        const questionNumbers = {{ sizeof($preguntas) }};
        const arrayQuestions = {};

        $(document).ready(function(){
              
              $(".clickables_images").click(function(){

                    const id = $(this).attr("id");
                    
                    $(".clickables_question_" + $(this).attr("data-id")).removeClass("dot");

                    $(".clickables_question_" + $(this).attr("data-id")).removeClass("dot1");
                    $(".clickables_question_" + $(this).attr("data-id")).removeClass("dot2");
                    $(".clickables_question_" + $(this).attr("data-id")).removeClass("dot3");
                    $(".clickables_question_" + $(this).attr("data-id")).removeClass("dot4");
                    $(".clickables_question_" + $(this).attr("data-id")).removeClass("dot5"); 
                    
                    if($("#" + id).hasClass("unselected")){
                      totalLinesSelected += 1;
                      $("#" + id).removeClass("unselected");
                      $("#" + id).addClass("selected"); 
                    }

                    const dataValue = $(this).attr("data-value");

                    if(dataValue==0){
                      $("#" + id).addClass("dot dot1"); 
                    } else if(dataValue==1){
                      $("#" + id).addClass("dot dot2");
                    } else if(dataValue==3){
                      $("#" + id).addClass("dot dot3");
                    } else if(dataValue==4){
                      $("#" + id).addClass("dot dot4");
                    } else if(dataValue==5){
                      $("#" + id).addClass("dot dot5");
                    }
              });
        });
        
        
        function getMapSize(x) {
            var len = 0;
            for (var count in x) {
                    len++;
            }

            return len;
        }



        function nextButtonClicked(){
            
            var allSelected = $(".dot").map(function() {

                const idPregunta = $(this).attr('data-id');
                const valor = $(this).attr('data-value');
                
                arrayQuestions[idPregunta] = valor;

                return this.innerHTML;
            }).get();

            const selected = getMapSize(allSelected);

            console.log("All question already selected " + selected + " from " + questionNumbers);

            if(selected!=questionNumbers){
                $("#dialog").css("display","block");
                return;
            }

            //Crea el json de ida
            const json = [];
            for (const [key, value] of Object.entries(arrayQuestions)) {
                const val = {"idPregunta":key,"valor":value}
                json.push(val);
            }

            console.log(json);
            
            //Envía la información al servidor

            disableFields();

            $.ajax({
                type: 'POST',
                url: '{{ \Config::get("APP_URL") }}/api/aptitudes/send_test',
                data: JSON.stringify (json),
                success: function(data) { 
                      
                    enableFields();

                    if(data.res == "ok"){

                      if(data.valorTotal == 0){
                        alert("Ups, por el momento esta prueba no puede continuar :(");
                        return;  
                      }

                      window.location.href = "aptitudes_results";
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
        }

        function closeDialog(){
            $("#dialog").css("display", "none");
        }

        function disableFields(){

                $("#buttonNext").prop( "disabled", true ); //Disable
              }

          function enableFields(){

            $("#buttonNext").prop( "disabled", false ); //Disable
          }

     </script>
    
@stop