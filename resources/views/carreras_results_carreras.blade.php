@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - ¿Qué carrera debería estudiar? (Resultados)</title>

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
        <p class="text-white" style="font-size: 16px;color: black !important;">Antes de continuar primero selecciona alguna carrera</p>
            
    </div>

    <!-- HERO -->
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/rombos.png');background-size: no-repeat;">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-1 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                        </div>  
                        <div class="col-lg-10 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;padding: 0px !important">

                                    <progress max="100" value="88" style=""></progress>
                                    <br><br>

                                    <h1 class="text-white col-sm-12" data-aos="fade-up" style="text-align: center;font-size: 40px">¿Qué carrera debería estudiar?</h1><br>

                                   <div data-aos="fade-up" style="background-color: white;padding: 2em;border-radius: 10px;color: black !important;margin: 10px;text-align: center;">
                                        <p class="text-white" style="font-size: 14px;color: black !important;text-align: left;">Estas carreras son ideales para ti, dadas tus aptitudes, habilidades, intereses y preferencias, ¡En todas tendrías éxito!<br>
                                        Selecciona las 6 que más llamen tu atención.
                                        </p><br>
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
                                    <div class="row">
                                        <p class="text-white" style="font-size: 14px;color: black !important;text-align: center;color: white !important;font-weight: bold;">¡Conoce con cuáles tienes más afinidad! Recuerda que de esta decisión dependerá con qué amigos y personas compartirás tus ideales, aspiraciones y tus conocimientos. ¡Decide libremente!.
                                        </p><br>
                                    </div>
                                    <div class="row" style="text-align: right;">
                                        <div class="col-sm-4">
                                        </div>
                                        <div class="col-sm-4">
                                            <button id="buttonNext" class="btn btn-info col-sm-12" type="button" onclick="nextButtonClicked()" style="border-radius: 20px;">
                                                Siguiente
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

                    var allSelected = $(".dot").map(function() {
                        return this.innerHTML;
                    }).get();

                    if($("#" + id).hasClass("unselected")){

                      if(allSelected.length<6){
                          
                          $("#" + id).removeClass("unselected");
                          $("#" + id).addClass("selected"); 
                          $("#" + id).addClass("dot");

                      }

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

            const json = {"carreras":[]};
            var allSelected = $(".dot").map(function() {

                const carreraId = $(this).attr('id');
                
                const val = {"carreraId":carreraId};
                json.carreras.push(val);

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
                url: '{{ \Config::get("APP_URL") }}/api/carreras/update_results_test_four',
                data: JSON.stringify (json),
                success: function(data) { 
                      
                    enableFields();

                    if(data.res == "ok"){

                      var goto = "premium_test_objetivos";
                      
                      if(allSelected.length==6){
                          var goto = "premium_results_report_index";
                      }

                      window.location = goto;
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