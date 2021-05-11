@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - Fisicomatemáticas</title>

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
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/coloreslarga2.png');background-size: cover;">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-1 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                        </div>  
                        <div class="col-lg-10 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;padding: 0px !important">    
                                    <progress max="100" value="<?php 
                                                                if($response['next']==2){
                                                                    echo "30";
                                                                } else if($response['next']==3){
                                                                  echo "50";
                                                                } else{
                                                                  echo "70";
                                                                }

                                                                ?>" style=""></progress>
                                    <br><br>

                                   <div data-aos="fade-up" style="background-color: white;padding: 2em;border-radius: 10px;color: black !important;margin: 10px;text-align: center;" id="internalBody">
                                        <h1 class="text-white col-sm-12" id="title" data-aos="fade-up" style="color: black !important;text-align: center;font-size: 30px">{{ $response["Area"]->name }}</h1>
                                        <br><br>
                                        <p class="text-white" id="text" style="font-size: 14px;color: black !important;text-align: left;">{{ $response["Area"]->descrip }}</p><br>
                                        <p class="text-white" style="font-size: 14px;color: black !important;text-align: center;">Selecciona las tres carreras que más te interesen o llamen tu atención:</p><br>
                                        <div class="row">
                                            @foreach($response["carreras"] as $Carrera)
                                              <div class="col-sm-4">
                                                  <div class="row">
                                                      <img src="./images/cara_5_circule.png?{{round(microtime(true) * 1000)}}" style="cursor: pointer;max-height: 15px;max-width: 52px" class="clickables_images unselected {{$Carrera['selected']}}" alt="" id="{{ $Carrera['id'] }}">
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
                                            <button class="btn btn-info col-sm-12" type="button" onclick="nextButtonClicked()" id="buttonNext" style="border-radius: 20px;">
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
        
        var totalLinesSelected = 0;
        const carrerasNumbers = {{ sizeof($response["carreras"]) }};
        const arrayQuestions = {};

        $(document).ready(function(){
              
              $(".clickables_images").click(function(){

                    const id = $(this).attr("id");

                    if($("#" + id).hasClass("unselected")){
                      if(totalLinesSelected==3){
                        return false;
                      }
                      totalLinesSelected += 1;
                      $("#" + id).removeClass("unselected");
                      $("#" + id).addClass("selected"); 
                      $("#" + id).addClass("dot");
                    } else {
                      totalLinesSelected -= 1;
                      $("#" + id).removeClass("selected");
                      $("#" + id).addClass("unselected");
                      $("#" + id).removeClass("dot");
                    }
              });

              totalLinesSelected = getMapSize($(".dot").map(function() {
                                                        return this.innerHTML;
                                                    }).get());
        });
        
        
        function getMapSize(x) {
            var len = 0;
            for (var count in x) {
                    len++;
            }

            return len;
        }

        function nextButtonClicked(){
            
            const arrayCarrers = [];
            var allSelected = $(".dot").map(function() {

                const idCarrer = $(this).attr('id');
                arrayCarrers.push(idCarrer);

                return this.innerHTML;
            }).get();

            const selected = getMapSize(allSelected);
            
            console.log("amount selected: " + selected);
            console.log("carrers: " + arrayCarrers)

            if(selected!=3){
                $("#dialog").css("display","block");
                return;
            }

            const idCarrera1 = arrayCarrers[0];
            const idCarrera2 = arrayCarrers[1];
            const idCarrera3 = arrayCarrers[2];

            //Crea el json de ida
            const json = {"test":{{ $response["test"] }},"idArea":{{ $response["Area"]->id }},"idCarrera1":idCarrera1,"idCarrera2":idCarrera2,"idCarrera3":idCarrera3}

            console.log(json);
            
            //Envía la información al servidor

            disableFields();

            $.ajax({
                type: 'POST',
                url: '{{ \Config::get("APP_URL") }}/api/areas/send_test',
                data: JSON.stringify (json),
                success: function(data) { 
                      
                    enableFields();

                    if(data.res == "ok"){

                      window.location = "<?php 
                        if($response['next']==-1){
                            echo "carreras_index";
                        } else{
                          echo "areas_tests?next=".$response['next'];
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
                $("#internalBody").prop( "disabled", true ); //Disable
              }

          function enableFields(){

            $("#buttonNext").prop( "disabled", false ); //Disable
            $("#internalBody").prop( "disabled", false ); //Disable
          }

        function closeDialog(){
            $("#dialog").css("display", "none");
        }

     </script>
    
@stop