@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - ¿Qué carreras debería estudiar? Test 1-9</title>

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
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/fondo_azul.png');background-size: no-repeat;">
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
                        <div class="col-sm-12">
                              <div class="hero-text" style="text-align: center;padding: 0px !important">
                                    <div style="background-color: white;padding: 2em;border-radius: 10px;color: black !important;margin: 10px;text-align: center;" id="internalBody">
                                        <div class="col-sm-12">
                                            <div class="row" style="text-align: left;">
                                                <div class="col-sm-7">
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="row">
                                                        <div class="col-sm-1">
                                                            <img src="./images/cara_1.png" style="max-width: 55px;cursor: pointer;max-height: 25px" alt="">
                                                            <span style="font-size: 13px">1<span>
                                                        </div>
                                                        <div class="col-sm-1">
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <img src="./images/cara_1.png" style="max-width: 55px;cursor: pointer;max-height: 25px;visibility: hidden;" alt="">
                                                            <span style="font-size: 13px">2<span>
                                                        </div>
                                                        <div class="col-sm-1">
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <img src="./images/cara_1.png" style="max-width: 55px;cursor: pointer;max-height: 25px;visibility: hidden;" alt="">
                                                            <span style="font-size: 13px">3<span>
                                                        </div>
                                                        <div class="col-sm-1">
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <img src="./images/cara_1.png" style="max-width: 55px;cursor: pointer;max-height: 25px;visibility: hidden;" alt="">
                                                            <span style="font-size: 13px">4<span>
                                                        </div>
                                                        <div class="col-sm-1">
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <img src="./images/cara_1.png" style="max-width: 55px;cursor: pointer;max-height: 25px;visibility: hidden;" alt="">
                                                            <span style="font-size: 13px">5<span>
                                                        </div>
                                                        <div class="col-sm-1">
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <img src="./images/cara_5.png" style="max-width: 55px;cursor: pointer;max-height: 25px;" alt="">
                                                            <span style="font-size: 13px">6<span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                            <br><br>
                                        <div class="col-sm-12">

                                            <?php 
                                                
                                                $row = 0;

                                                ?>

                                            @foreach($response["preguntas"] as $Pregunta)

                                                <?php 
                                                
                                                    $row += 1;

                                                    $bloque = $Pregunta["test"];

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

                                                    if(\Config::get('ENV')=="test"){
                                                            if($row==1){
                                                                if($selected1=="unselected" && $selected2=="unselected" && $selected3=="unselected" && $selected4=="unselected" && $selected5=="unselected" && $selected6=="unselected"){
                                                                        $selected1 = "selected dot";
                                                                }
                                                            }
                                                            else if($row==2){
                                                                if($selected1=="unselected" && $selected2=="unselected" && $selected3=="unselected" && $selected4=="unselected" && $selected5=="unselected" && $selected6=="unselected"){
                                                                        $selected2 = "selected dot";
                                                                }
                                                            }
                                                            else if($row==3){
                                                                if($selected1=="unselected" && $selected2=="unselected" && $selected3=="unselected" && $selected4=="unselected" && $selected5=="unselected" && $selected6=="unselected"){
                                                                        $selected3 = "selected dot";
                                                                }
                                                            }
                                                            else if($row==4){
                                                                if($selected1=="unselected" && $selected2=="unselected" && $selected3=="unselected" && $selected4=="unselected" && $selected5=="unselected" && $selected6=="unselected"){
                                                                        $selected4 = "selected dot";
                                                                }
                                                            }
                                                            else if($row==5){
                                                                if($selected1=="unselected" && $selected2=="unselected" && $selected3=="unselected" && $selected4=="unselected" && $selected5=="unselected" && $selected6=="unselected"){
                                                                        $selected5 = "selected dot";
                                                                }
                                                            }
                                                            else if($row==6){
                                                                if($selected1=="unselected" && $selected2=="unselected" && $selected3=="unselected" && $selected4=="unselected" && $selected5=="unselected" && $selected6=="unselected"){
                                                                        $selected6 = "selected dot";
                                                                }
                                                            }
                                                    }

                                                ?>
                                                <div class="row">
                                                    <div class="col-sm-7">
                                                        <p class="text-white" style="font-size: 14px;color: black !important;text-align: justify;">{{$Pregunta["pregunta"]}}</p>
                                                    </div>
                                                    <div class="col-sm-5">
                                                        <div class="row">
                                                            <img src="./images/cara_5_circule.png?{{round(microtime(true) * 1000)}}" style="max-width: 52px;cursor: pointer;max-height: 20px" class="col-sm-1 clickables_images clickables_question_{{$Pregunta['id']}} {{$selected1}}" alt="" id="question_one_{{$Pregunta['id']}}" data-row="{{$row}}" data-id="{{$Pregunta['id']}}" data-value="0" data-column="1">
                                                            <div class="col-sm-1">
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <img src="./images/cara_5_circule.png?{{round(microtime(true) * 1000)}}" style="max-width: 52px;cursor: pointer;max-height: 20px" class="clickables_images clickables_question_{{$Pregunta['id']}} {{$selected2}}" alt="" id="question_two_{{$Pregunta['id']}}" data-id="{{$Pregunta['id']}}" data-row="{{$row}}" data-value="1" data-column="2">
                                                            </div>
                                                            <div class="col-sm-1">
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <img src="./images/cara_5_circule.png?{{round(microtime(true) * 1000)}}" style="max-width: 52px;cursor: pointer;max-height: 20px" class="clickables_images {{$selected3}} clickables_question_{{$Pregunta['id']}}" alt="" id="question_three_{{$Pregunta['id']}}" data-id="{{$Pregunta['id']}}" data-row="{{$row}}" data-value="3" data-column="3">
                                                            </div>
                                                            <div class="col-sm-1">
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <img src="./images/cara_5_circule.png?{{round(microtime(true) * 1000)}}" style="max-width: 52px;cursor: pointer;max-height: 20px" class="clickables_images {{$selected4}} clickables_question_{{$Pregunta['id']}}" alt="" id="question_four_{{$Pregunta['id']}}" data-id="{{$Pregunta['id']}}" data-row="{{$row}}" data-value="4" data-column="4">
                                                            </div>
                                                            <div class="col-sm-1">
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <img src="./images/cara_5_circule.png?{{round(microtime(true) * 1000)}}" style="max-width: 52px;cursor: pointer;max-height: 20px" class="clickables_images {{$selected5}} clickables_question_{{$Pregunta['id']}}" alt="" id="question_five_{{$Pregunta['id']}}" data-id="{{$Pregunta['id']}}" data-row="{{$row}}" data-value="5" data-column="5">
                                                            </div>
                                                            <div class="col-sm-1">
                                                            </div>
                                                            <div class="col-sm-1">
                                                                <img src="./images/cara_5_circule.png?{{round(microtime(true) * 1000)}}" style="max-width: 52px;cursor: pointer;max-height: 20px" class="clickables_images {{$selected6}} clickables_question_{{$Pregunta['id']}}" alt="" id="question_six_{{$Pregunta['id']}}" data-id="{{$Pregunta['id']}}" data-row="{{$row}}" data-value="6" data-column="6">
                                                            </div>
                                                            <div class="col-sm-1">
                                                            </div>
                                                        </div>  
                                                    </div><br>
                                                </div>
                                            @endforeach
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

        const box = { 1: {1:false,2:false,3:false,4:false,5:false,6:false}, 2: {1:false,2:false,3:false,4:false,5:false,6:false}, 3: {1:false,2:false,3:false,4:false,5:false,6:false}, 4: {1:false,2:false,3:false,4:false,5:false,6:false}, 5: {1:false,2:false,3:false,4:false,5:false,6:false}, 6: {1:false,2:false,3:false,4:false,5:false,6:false} };

        $(document).ready(function(){

              $(".clickables_images").click(function(){

                    const id = $(this).attr("id");
                    
                    const value = $(this).attr("data-value");

                    const row = $(this).attr("data-row");

                    const column = $(this).attr("data-column");
                    
                    console.log("row: " + row);
                    console.log("column: " + column);

                    if(numberIsSelectedInBox(column)) {
                        
                        console.log("column exists in box");
                        unselectAllRow(id,row);
                    }
                    else {
                           
                        console.log("column doesnt exists in box");

                        $(".clickables_question_" + $(this).attr("data-id")).removeClass("dot");

                        unselectAllRow(id,row);
                        selectColumn(id,row,column);   
                    }

                    console.log(box);
              });

              checkInitialColumnsSelected();
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

        function unselectAllRow(id,row) {
            Object.keys(box).forEach(function(key) {
                if(key==row){
                    const internalBox = box[key];
                    Object.keys(internalBox).forEach(function(key_) {
                        internalBox[key_] = false;
                        $("#" + id).removeClass("dot");
                        $("#" + id).removeClass("selected");
                        $("#" + id).addClass("unselected");
                    })
                    return true;
                }      
            })
        }

        function selectColumn(id,row,column) {
            selectTrueFalseColumn(row,column,true);
            $("#" + id).removeClass("unselected");
            $("#" + id).addClass("selected");
            $("#" + id).addClass("dot");
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

            Object.keys(box).forEach(function(key) {
                const internalBox = box[key];
                Object.keys(internalBox).forEach(function(key) {
                    if(key==column_){
                        const val = internalBox[key];
                        if(val){
                            selected = true;
                            return true;
                        }
                    }        
                })      
            })

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
            const json = {"bloque":{{ $bloque}}, "preguntas":[]};
            for (const [key, value] of Object.entries(arrayQuestions)) {
                const val = {"id":key,"valor":value};
                json.preguntas.push(val);
            }

            console.log(json);
            
            //Envía la información al servidor

            disableFields();

            $.ajax({
                type: 'POST',
                url: '{{ \Config::get("APP_URL") }}/api/testtres/send_test',
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
                                        echo "carreras_test_2?area=0&bloque=1&progress={$response['progress']}";
                                    } else{
                                      echo "carreras_test_1?next=".$response['next'];
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