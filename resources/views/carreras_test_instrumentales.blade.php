@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - Instrumentales</title>

    @section('style')
      @parent

      <style type="text/css">
        
        .dot {
            content:url("./images/bluedot.png");
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
    
    <div id="dialog" class="center" data-aos="fade-up" style="background-color: white;padding: 2em;border-radius: 10px;color: black !important;z-index: 99999;margin: 100px;text-align: center;position: absolute;display: none">
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
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/fondo azul largo.png');background-size: no-repeat;">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-1 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                        </div>  
                        <div class="col-lg-10 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;padding: 0px !important">
                                    <progress max="100" value="{{$response['progress']}}" style=""></progress>
                                    <br><br>
                                    
                                   <div id="dialog" data-aos="fade-up" style="background-color: white;padding: 2em;border-radius: 10px;color: black !important;margin: 10px;text-align: center;">
                                        <h1 class="text-white col-sm-12" id="title" data-aos="fade-up" style="color: black !important;text-align: center;font-size: 30px">{{$response['Familia']->name}}</h1>
                                        <br><br>
                                        <p class="text-white" style="font-size: 14px;color: black !important;text-align: left;" id="text">{{$response['Familia']->descrip}}<br>
                                        <p class="text-white" style="font-size: 14px;color: black !important;text-align: center;">Selecciona las carreras que más te interesen o llamen tu atención:</p><br>

                                        <div class="row">
                                        @foreach($response["carreras"] as $Carrera)
                                              
                                                <div class="col-sm-4">
                                                    <div class="row">
                                                        <img src="./images/cara_5_circule.png" style="max-width: 55px;cursor: pointer;max-height: 20px" class="clickables_images {{$Carrera['selected']}}" alt="" id="{{$Carrera['id']}}">
                                                        <p class="text-white col-sm-10" style="font-size: 14px;color: black !important;text-align: left;">{{$Carrera['name']}}</p>
                                                    </div>
                                                </div>

                                        @endforeach
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
        
        $(document).ready(function(){
              
              $(".clickables_images").click(function(){

                    const id = $(this).attr("id");

                    if($("#" + id).hasClass("unselected")){
                      $("#" + id).removeClass("unselected");
                      $("#" + id).addClass("selected"); 
                      $("#" + id).addClass("dot");
                    } else {
                      $("#" + id).removeClass("selected");
                      $("#" + id).addClass("unselected");
                      $("#" + id).removeClass("dot");
                    }
              });
        });

        function closeDialog(){
            $("#dialog").css("display", "none");
        }

        function nextButtonClicked(){

            const json = {"areaId":{{ $response['Familia']->id}}, "preguntas":[]};
            var allSelected = $(".dot").map(function() {

                const carreraId = $(this).attr('id');
                
                const val = {"carreraId":carreraId};
                json.preguntas.push(val);

                return this.innerHTML;
            }).get();

            if(allSelected.length==0){
                $("#dialog").css("display","block");
                return;
            }

            console.log(json);

            //Envía la información al servidor

            disableFields();

            $.ajax({
                type: 'POST',
                url: '{{ \Config::get("APP_URL") }}/api/carreras/send_test_carreras_results',
                data: JSON.stringify (json),
                success: function(data) { 
                      
                    enableFields();

                    if(data.res == "ok"){

                      if(data.valorTotal == 0){
                        alert("Ups, por el momento esta prueba no puede continuar :(");
                        return;  
                      }

                       window.location = "<?php 

                              if($response['next']==-1){

                                if(Session::get('license')=="P"){
                                    echo "carreras_results_carreras";
                                } else{
                                    echo "premium_results_report_index";
                                }
                              } else {
                                  echo "carreras_test_instrumentales?next=".$response['next'];
                              }

                          ?>";
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

        function disableFields(){

                $("#buttonNext").prop( "disabled", true ); //Disable
              }

          function enableFields(){

            $("#buttonNext").prop( "disabled", false ); //Disable
          }

     </script>
    
@stop