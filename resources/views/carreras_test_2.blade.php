@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - ¿Qué carreras debería estudiar? Test 1-9</title>

    @section('style')
      @parent

      <style type="text/css">
         
         .dot {
            content:url("./images/bluedot.png");
            display: inline-block;
            max-width: 95px !important;
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
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/fondo_azul.png');background-size: cover;">
               <div class="container">
                    <div class="row">

                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <progress max="100" value="{{$response['progress']}}" style=""></progress>
                                    <br><br>
                        </div>
                        <div class="col-sm-4">
                        </div>

                        <h1 class="text-white col-sm-12" style="text-align: center;" data-aos="fade-up">¿Qué carrera debería estudiar?</h1><br><br><br><br>
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-8">
                            <p class="text-white col-sm-12" data-aos="fade-up" style="font-size: 16px;opacity: 0.7;background-color: black;padding: 1em;border-radius: 10px;text-align: center;">Lee detenidamente todas las actividades del bloque. Ordénalas según tu preferencia</p>
                        </div>
                        <div class="col-sm-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;padding: 0px !important">
                                    <div data-aos="fade-up" style="background-color: white;padding: 2em;border-radius: 10px;color: black !important;margin: 10px;text-align: center;" id="internalBody">
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <div class="row">
                                                            <div class="col-sm-1">
                                                                <img src="./images/cara_1.png" style="max-width: 55px;max-height: 25px" alt="">
                                                            </div>

                                                            <?php
                                                                $count = 1;
                                                            ?>

                                                            @foreach($response["preguntas"] as $Pregunta)
                                                                <div class="col-sm-1">
                                                                    <span style="font-size: 13px">{{$count}}<span>

                                                                        <?php
                                                                            $count = $count + 1;
                                                                        ?>

                                                                </div>
                                                            @endforeach
                                                            
                                                            <div class="col-sm-1">
                                                                <img src="./images/cara_5.png" style="max-width: 55px;max-height: 25px;" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                           <br><br>


                                            <?php 
                                                
                                                $row = 0;
                                                
                                                $columnTest = 1;
                                                $rowTest = 1;

                                                $selected1 = "unselected";
                                                $selected2 = "unselected";
                                                $selected3 = "unselected";
                                                $selected4 = "unselected";
                                                $selected5 = "unselected";
                                                $selected6 = "unselected";

                                                if(isset($Pregunta["selected"])){
                                                    if($Pregunta["selected"]==1){
                                                        $selected1 = "selected dot";
                                                    } else if($Pregunta["selected"]==2){
                                                        $selected2 = "selected dot";
                                                    } else if($Pregunta["selected"]==3){
                                                        $selected3 = "selected dot";
                                                    } else if($Pregunta["selected"]==4){
                                                        $selected4 = "selected dot";
                                                    } else if($Pregunta["selected"]==5){
                                                        $selected5 = "selected dot";
                                                    } else if($Pregunta["selected"]==6){
                                                        $selected6 = "selected dot";
                                                    }
                                                }

                                                ?>
                                            <div class="col-sm-12" style="text-align: center">
                                            @foreach($response["preguntas"] as $Pregunta)

                                                <?php 
                                                
                                                    $row += 1;

                                                ?>

                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <p class="text-white" style="font-size: 14px;color: black !important;text-align: justify;" id="pregunta-{{$Pregunta['id']}}">{{$Pregunta["pregunta"]}}</p>
                                                    </div>
                                                    <div class="col-sm-7">

                                                    <?php 
                                                        $column = 1;
                                                        $questionSelected = $Pregunta['selected'];
                                                    ?>
                                                    <div class="row">
                                                        <div class="col-sm-1" style="visibility: hidden;">
                                                                <img src="./images/cara_5.png" style="max-width: 55px;max-height: 25px;" alt="">
                                                            </div>
                                                    @foreach($response["preguntas"] as $Pregunta)

                                                        <?php 

                                                            $value = $column;

                                                            if($questionSelected==$column){
                                                                $selected = "selected dot";
                                                            } else {
                                                                $selected = "unselected";
                                                            }

                                                            if(\Config::get('ENV')=="test"){
                                                                $sel = false;
                                                                if($selected=="unselected"){
                                                                    foreach ($response["preguntas"] as $Pregu) {
                                                                        if($Pregu['selected']>0){
                                                                            $sel = true;
                                                                            break;
                                                                        }
                                                                    }
                                                                    if(!$sel){
                                                                        if($rowTest==$row && $columnTest==$column){
                                                                            $selected = "selected dot";
                                                                            ++$columnTest;
                                                                            ++$rowTest;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        ?>

                                                        <img src="./images/cara_5_circule.png" style="max-width: 52px;cursor: pointer;max-height: 22px" class="col-sm-1 clickables_images {{$selected}}" data-row="{{$row}}" data-id="{{$row}}{{$column}}" data-pregunta-id="{{$Pregunta['id']}}" id="{{$row}}{{$column}}" data-value="{{$value}}" data-column="{{$column}}">

                                                        <?php 
                                                            $column += 1;
                                                        ?>

                                                    @endforeach
                                                        <div class="col-sm-1" style="visibility: hidden;">
                                                                <img src="./images/cara_5.png" style="max-width: 55px;max-height: 25px;" alt="">
                                                            </div>
                                                    </div>
                                                </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div class="row" style="text-align: right;">
                                        <div class="col-sm-10">
                                        </div>
                                        <div class="col-sm-2">
                                            <button class="btn btn-info col-sm-12" type="button" onclick="nextButtonClicked()" id="buttonNext" style="border-radius: 20px">
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
        
        const questionNumbers = {{ sizeof($response["preguntas"]) }};
        const arrayQuestions = {};

        $(document).ready(function(){

              $(".clickables_images").click(function(){

                    const id = $(this).attr("data-id");
                    
                    const value = $(this).attr("data-value");

                    const row = $(this).attr("data-row");

                    const column = $(this).attr("data-column");
                    
                    console.log("row: "  + row);
                    console.log("column: "  + column);

                    if(numberIsSelectedInBox(column)) {
                        console.log("column exists in box");
                    }
                    else {
                           
                        console.log("column doesnt exists in box");

                        //$(".clickables_question_" + $(this).attr("data-id")).removeClass("dot");

                        unselectAllRow(row);
                        selectColumn(row,column);   
                    }

              });

              //checkInitialColumnsSelected();
        });
        
        function checkInitialColumnsSelected() {

            var allSelected = $(".dot").map(function() {

                const idPregunta = $(this).attr('data-id');
                const row = $(this).attr('data-row');
                const column = $(this).attr('data-column');
                
                selectColumn(idPregunta,row,column);
                
                return this.innerHTML;
            }).get();
        }

        function selectTrueFalseColumn(row,column,value) {
            Object.keys(box).forEach(function(key) {
                if(key==row){
                    const internalBox = box[key];
                    Object.keys(internalBox).forEach(function(key_) {
                        if(key_==column){
                            internalBox[key_] = value;
                            return true;
                        }        
                    })
                }      
            })
        }

        function unselectAllRow(row_) {
            var allSelected = $(".dot").map(function() {

                const idPregunta = $(this).attr('data-id');
                const row = $(this).attr('data-row');
                const column = $(this).attr('data-column');
                
                if(row==row_){
                    $("#" + idPregunta).removeClass("dot");
                    $("#" + idPregunta).removeClass("selected");
                    $("#" + idPregunta).addClass("unselected");
                }

                return this.innerHTML;
            }).get();
        }

        function selectColumn(row_,column_) {
            
            $(".clickables_images").map(function() {

                const idPregunta = $(this).attr('data-id');
                const row = $(this).attr('data-row');
                const column = $(this).attr('data-column');
                
                if(row==row_ && column==column_){
                    $("#" + idPregunta).removeClass("unselected");
                    $("#" + idPregunta).addClass("selected");
                    $("#" + idPregunta).addClass("dot");
                }

                return this.innerHTML;
            }).get();
        }

        function unselectColumn(id,row,column) {
            selectTrueFalseColumn(row,column,false);
            $("#" + id).removeClass("dot");
            $("#" + id).removeClass("selected");
            $("#" + id).addClass("unselected");
        }
            
        function numberIsSelectedInRow(row,column) {

            Object.keys(box).forEach(function(key) {
                if(key==row){
                    const internalBox = box[key];
                    Object.keys(internalBox).forEach(function(key) {
                        if(key==column){
                            const val = internalBox[key];
                            return val;
                        }        
                    })
                }      
            })
        }

        function numberIsSelectedInBox(column_) {

            var selected = false;

            var allSelected = $(".dot").map(function() {

                const row = $(this).attr('data-row');
                const column = $(this).attr('data-column');

                if($(this).hasClass("dot") && column==column_){
                    selected = true;
                    return true;
                } else {
                    return this.innerHTML;
                }

            }).get();

            return selected;
        } 

        function getMapSize(x) {
            var len = 0;
            for (var count in x) {
                    len++;
            }

            return len;
        }



        function nextButtonClicked(){
            
            var arrayQuestions = [];
            var allSelected = $(".dot").map(function() {

                const idPregunta = $(this).attr('data-pregunta-id');
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
            const json = {"fase":2,"bloque":{{ $response["bloque"]}}, "preguntas":[]};
            for (const [key, value] of Object.entries(arrayQuestions)) {
                const val = {"id":key,"valor":value};
                json.preguntas.push(val);
            }

            console.log(json);
            
            //Envía la información al servidor

            disableFields();

            $.ajax({
                type: 'POST',
                url: '{{ \Config::get("APP_URL") }}/api/testtres/send_test_fase_2',
                data: JSON.stringify (json),
                success: function(data) { 
                      
                    enableFields();

                    if(data.res == "ok"){

                      if(data.valorTotal == 0){
                        alert("Ups, por el momento esta prueba no puede continuar :(");
                        return;  
                      }

                     window.location = "<?php 
                                    if($response['end']){
                                        echo "carreras_familias";
                                    } else{
                                      echo "carreras_test_2?area=".$response['area']."&bloque=".$response['bloque']."&progress=".$response['progress']."";
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