@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - Tus intereses ocupacionales (Resultados)</title>

    @section('style')
      @parent

    @stop

@stop

@section('body')
    @parent
    
    <div id="dialog" data-aos="fade-up" style="background-color: white;padding: 2em;border-radius: 10px;color: black !important;position: absolute;z-index: 99999;margin: 100px;text-align: center;display: none">
        <div class="row">
            <div class="col-sm-11">
            </div>
            <div class="col-sm-1">
                <img src="./images/quitar.png" alt="Girl in a jacket" width="30" style="cursor: pointer;" onclick="closeDialog()">
            </div>
        </div>
        <h1 class="text-white" data-aos="fade-up" style="font-size: 33px;color: #00bfff !important; text-align: center;" id="dialogTitle">Aptitud 1</h1><br>
        <p class="text-white" id="dialogText" style="font-size: 16px;color: black !important;">Esta habilidad implica conocimiento, uso y selección correcta de fórmulas numéricas, conocimiento del lenguaje simbóliconumerico en operaciones que requieren el uso de números. Un sujeto apto en esta escala puede traducir a un lenguaje situaciones que ammeriten el uso de esta habilidad y, además plantear y formular problemas que impliquen operaciones de este tipo. Un indicativo de la existencia de esta habilidad es el hecho de poder diseñar problemas de esa indole de operaciones, ya sea de manera propia o ajena, y hacer más accesible esta disciplina a otros. Un sujeto que resulte con un alto puntuaje en esta escala en relación con los démas, es candidato a algunas ocupaciones que requieren este tipo de aptitud.<br>
        Las ocupaciones propias de esta escala son las ingenierías, como la civil y la mecánica; también la actuaria y en menor medida, la contabilidad y la administración y licenciaturas en matemáticas, estadística, etc.</p>
            
    </div>

     <!-- HERO -->
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/fondo.png');background-size: no-repeat;">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-1 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                        </div>  
                        <div class="col-lg-10 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;padding: 0px !important">

                                   <h1 class="text-white" data-aos="fade-up">Tus intereses ocupacionales</h1>
                                   <br><br>
                                   <div class="row">
                                        <div class="col-sm-4">
                                            <img class="col-sm-12" src="./images/intereses y aptitudes/{{$response['aptitud1']->image}}" alt="Girl in a jacket" style="cursor: pointer;" onclick='showDialogFirst()'>
                                        </div>
                                        <div class="col-sm-4">
                                            <img class="col-sm-12" src="./images/intereses y aptitudes/{{$response['aptitud2']->image}}" alt="Girl in a jacket"  style="cursor: pointer;" onclick='showDialogSecond()'>
                                        </div>
                                        <div class="col-sm-4">
                                            <img class="col-sm-12" src="./images/intereses y aptitudes/{{$response['aptitud3']->image}}" alt="Girl in a jacket"  style="cursor: pointer;" onclick='showDialogThird()'>
                                        </div>
                                   </div>
                                   <br>
                                   <br>
                                   <br>
                                   <button class="btn btn-info col-sm-3" type="button" onclick="nextButtonClick()" style="border-radius: 20px;">
                                    Siguiente
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
        
        function showDialog(title,text){
          $("#dialogTitle").text(title);
          $("#dialogText").text(text);
        }

        function closeDialog(){
            $("#dialog").css("display", "none");
        }

        function showDialogFirst(){
            showDialog("{{$response['aptitud1']->name}}","{{$response['aptitud1']->descrip}}");
            $("#dialog").css("display", "block");
        }
        function showDialogSecond(){
          showDialog("{{$response['aptitud2']->name}}","{{$response['aptitud2']->descrip}}");
            $("#dialog").css("display", "block");
        }
        function showDialogThird(){
            showDialog("{{$response['aptitud3']->name}}","{{$response['aptitud3']->descrip}}");
            $("#dialog").css("display", "block");
        }

        function nextButtonClick(){
            window.location = "areas_index";
        }

     </script>
    
@stop