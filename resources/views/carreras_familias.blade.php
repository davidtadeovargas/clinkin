@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - Familias de carreras</title>

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
        <h1 class="text-white" data-aos="fade-up" style="font-size: 33px;color: #00bfff !important; text-align: center;" id="dialogTitle">Interés 1</h1><br>
        <p class="text-white" id="dialogText" style="font-size: 16px;color: black !important;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            
    </div>

    <!-- HERO -->
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/fondo_azul.png');background-size: no-repeat;">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-1 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                        </div>  
                        <div class="col-lg-10 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;padding: 0px !important">

                                   <h1 class="text-white" data-aos="fade-up">Familias de carreras</h1>
                                   <br><br>
                                   <div class="row">
                                        <div class="col-sm-4">
                                            <img class="col-sm-12" src="./images{{$response['familia1']->image}}" alt="Girl in a jacket" style="cursor: pointer;" onclick='showDialogFirst()'>
                                        </div>
                                        <div class="col-sm-4">
                                            <img class="col-sm-12" src="./images{{$response['familia2']->image}}" alt="Girl in a jacket"  style="cursor: pointer;" onclick='showDialogSecond()'>
                                        </div>
                                        <div class="col-sm-4">
                                            <img class="col-sm-12" src="./images{{$response['familia3']->image}}" alt="Girl in a jacket"  style="cursor: pointer;" onclick='showDialogThird()'>
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
        
        function nextButtonClick(){
            window.location = "carreras_test_instrumentales?next=1";
        }

        function showDialogFirst(){
            showDialog("{{$response['familia1']->name}}","{{$response['familia1']->descrip}}");
            $("#dialog").css("display", "block");
        }
        function showDialogSecond(){
          showDialog("{{$response['familia2']->name}}","{{$response['familia2']->descrip}}");
            $("#dialog").css("display", "block");
        }
        function showDialogThird(){
          showDialog("{{$response['familia3']->name}}","{{$response['familia3']->descrip}}");
            $("#dialog").css("display", "block");
        }

     </script>

@stop