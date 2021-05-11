@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - ¿Qué carreras debería estudiar? Test Ordena</title>

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
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/rombos.png');background-size: no-repeat;">
               <div class="container">
                    <div class="row">

                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <progress max="100" value="40" style=""></progress>
                                    <br><br>
                        </div>
                        <div class="col-sm-4">
                        </div>

                        <h1 class="text-white col-sm-12" style="text-align: center;" data-aos="fade-up">¿Qué carrera debería estudiar?</h1><br><br><br><br>
                        <div class="col-sm-2">
                        </div>
                        <div class="col-sm-8">
                            <p class="text-white col-sm-12" data-aos="fade-up" style="font-size: 16px;opacity: 0.7;background-color: black;padding: 1em;border-radius: 10px;text-align: center;">Lee detenidamente todas las actividades del bloque. Ordénalas según tu preferencia asignando el número 7/8 a la que más te guste y el número 1 a la que menos te guste.</p>
                        </div>
                        <div class="col-sm-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;padding: 0px !important">
                                    <div data-aos="fade-up" style="background-color: white;padding: 2em;border-radius: 10px;color: black !important;margin: 10px;text-align: center;">
                                        <div class="row">
                                            <p class="text-white col-sm-4" style="font-size: 14px;color: black !important;text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                            <div class="col-sm-8">
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="one_circule_one">
                                                <span style="font-size: 13px">1<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="one_circule_two">
                                                <span style="font-size: 13px">2<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="one_circule_tree">
                                                <span style="font-size: 13px">3<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="one_circule_four">
                                                <span style="font-size: 13px">4<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="one_circule_five">
                                                <span style="font-size: 13px">5<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="one_circule_six">
                                                <span style="font-size: 13px">6<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="one_circule_seven">
                                                <span style="font-size: 13px">7<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="one_circule_eigth">
                                                <span style="font-size: 13px">8<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="one_circule_nine">
                                                <span style="font-size: 13px">9<span>
                                            </div><br>
                                            <p class="text-white col-sm-4" style="font-size: 14px;color: black !important;text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                            <div class="col-sm-8">
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="two_circule_one">
                                                <span style="font-size: 13px">1<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="two_circule_two">
                                                <span style="font-size: 13px">2<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="two_circule_tree">
                                                <span style="font-size: 13px">3<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="two_circule_four">
                                                <span style="font-size: 13px">4<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="two_circule_five">
                                                <span style="font-size: 13px">5<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="two_circule_six">
                                                <span style="font-size: 13px">6<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="two_circule_seven">
                                                <span style="font-size: 13px">7<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="two_circule_eigth">
                                                <span style="font-size: 13px">8<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="two_circule_nine">
                                                <span style="font-size: 13px">9<span>
                                            </div><br>
                                            <p class="text-white col-sm-4" style="font-size: 14px;color: black !important;text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                            <div class="col-sm-8">
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="tree_circule_one">
                                                <span style="font-size: 13px">1<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="tree_circule_two">
                                                <span style="font-size: 13px">2<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="tree_circule_tree">
                                                <span style="font-size: 13px">3<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="tree_circule_four">
                                                <span style="font-size: 13px">4<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="tree_circule_five">
                                                <span style="font-size: 13px">5<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="tree_circule_six">
                                                <span style="font-size: 13px">6<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="tree_circule_seven">
                                                <span style="font-size: 13px">7<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="tree_circule_eigth">
                                                <span style="font-size: 13px">8<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="tree_circule_nine">
                                                <span style="font-size: 13px">9<span>
                                            </div><br>
                                            <p class="text-white col-sm-4" style="font-size: 14px;color: black !important;text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                            <div class="col-sm-8">
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="four_circule_one">
                                                <span style="font-size: 13px">1<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="four_circule_two">
                                                <span style="font-size: 13px">2<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="four_circule_tree">
                                                <span style="font-size: 13px">3<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="four_circule_four">
                                                <span style="font-size: 13px">4<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="four_circule_five">
                                                <span style="font-size: 13px">5<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="four_circule_six">
                                                <span style="font-size: 13px">6<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="four_circule_seven">
                                                <span style="font-size: 13px">7<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="four_circule_eigth">
                                                <span style="font-size: 13px">8<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="four_circule_nine">
                                                <span style="font-size: 13px">9<span>
                                            </div><br>
                                            <p class="text-white col-sm-4" style="font-size: 14px;color: black !important;text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                            <div class="col-sm-8">
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="five_circule_one">
                                                <span style="font-size: 13px">1<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="five_circule_two">
                                                <span style="font-size: 13px">2<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="five_circule_tree">
                                                <span style="font-size: 13px">3<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="five_circule_four">
                                                <span style="font-size: 13px">4<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="five_circule_five">
                                                <span style="font-size: 13px">5<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="five_circule_six">
                                                <span style="font-size: 13px">6<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="five_circule_seven">
                                                <span style="font-size: 13px">7<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="five_circule_eigth">
                                                <span style="font-size: 13px">8<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="five_circule_nine">
                                                <span style="font-size: 13px">9<span>
                                            </div><br>
                                            <p class="text-white col-sm-4" style="font-size: 14px;color: black !important;text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                            <div class="col-sm-8">
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="six_circule_one">
                                                <span style="font-size: 13px">1<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="six_circule_two">
                                                <span style="font-size: 13px">2<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="six_circule_tree">
                                                <span style="font-size: 13px">3<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="six_circule_four">
                                                <span style="font-size: 13px">4<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="six_circule_five">
                                                <span style="font-size: 13px">5<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="six_circule_six">
                                                <span style="font-size: 13px">6<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="six_circule_seven">
                                                <span style="font-size: 13px">7<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="six_circule_eigth">
                                                <span style="font-size: 13px">8<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="six_circule_nine">
                                                <span style="font-size: 13px">9<span>
                                            </div><br>
                                            <p class="text-white col-sm-4" style="font-size: 14px;color: black !important;text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                            <div class="col-sm-8">
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="seven_circule_one">
                                                <span style="font-size: 13px">1<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="seven_circule_two">
                                                <span style="font-size: 13px">2<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="seven_circule_tree">
                                                <span style="font-size: 13px">3<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="seven_circule_four">
                                                <span style="font-size: 13px">4<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="seven_circule_five">
                                                <span style="font-size: 13px">5<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="seven_circule_six">
                                                <span style="font-size: 13px">6<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="seven_circule_seven">
                                                <span style="font-size: 13px">7<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="seven_circule_eigth">
                                                <span style="font-size: 13px">8<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="seven_circule_nine">
                                                <span style="font-size: 13px">9<span>
                                            </div><br>
                                            <p class="text-white col-sm-4" style="font-size: 14px;color: black !important;text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                            <div class="col-sm-8">
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="eigth_circule_one">
                                                <span style="font-size: 13px">1<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="eigth_circule_two">
                                                <span style="font-size: 13px">2<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="eigth_circule_tree">
                                                <span style="font-size: 13px">3<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="eigth_circule_four">
                                                <span style="font-size: 13px">4<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="eigth_circule_five">
                                                <span style="font-size: 13px">5<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="eigth_circule_six">
                                                <span style="font-size: 13px">6<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="eigth_circule_seven">
                                                <span style="font-size: 13px">7<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="eigth_circule_eigth">
                                                <span style="font-size: 13px">8<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="eigth_circule_nine">
                                                <span style="font-size: 13px">9<span>
                                            </div><br>
                                            <p class="text-white col-sm-4" style="font-size: 14px;color: black !important;text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                            <div class="col-sm-8">
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="nine_circule_one">
                                                <span style="font-size: 13px">1<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="nine_circule_two">
                                                <span style="font-size: 13px">2<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="nine_circule_tree">
                                                <span style="font-size: 13px">3<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="nine_circule_four">
                                                <span style="font-size: 13px">4<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="nine_circule_five">
                                                <span style="font-size: 13px">5<span>
                                                <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="nine_circule_six">
                                                <span style="font-size: 13px">6<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="nine_circule_seven">
                                                <span style="font-size: 13px">7<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="nine_circule_eigth">
                                                <span style="font-size: 13px">8<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="" id="nine_circule_nine">
                                                <span style="font-size: 13px">9<span>
                                            </div><br>

                                        </div>
                                        <br>
                                    </div>
                                    <div class="row" style="text-align: right;">
                                        <div class="col-sm-10">
                                        </div>
                                        <div class="col-sm-2">
                                            <button class="btn btn-info col-sm-12" type="button" onclick="nextButtonClicked()" style="border-radius: 20px">
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
        
        var firstLineSelect = -1;
        var secondLineSelect = -1;
        var thridLineSelect = -1;
        var fourLineSelect = -1;
        var fivetLineSelect = -1;
        var sixLineSelect = -1;
        var sevenLineSelect = -1;
        var eigthLineSelect = -1;
        var nineLineSelect = -1;

        $(document).ready(function(){
              
              $("#one_circule_one").click(function(){
                    if(!canSelect(1)){
                        return;
                    }
                    firstLineSelect = 1;
                    firstLine("one_circule_one");
              });
              $("#one_circule_two").click(function(){
                    if(!canSelect(2)){
                        return;
                    }
                    firstLineSelect = 2;
                    firstLine("one_circule_two");
              });
              $("#one_circule_tree").click(function(){
                    if(!canSelect(3)){
                        return;
                    }
                    firstLineSelect = 3;
                    firstLine("one_circule_tree");
              });
              $("#one_circule_four").click(function(){
                    if(!canSelect(4)){
                        return;
                    }
                    firstLineSelect = 4;
                    firstLine("one_circule_four");
              });
              $("#one_circule_five").click(function(){
                    if(!canSelect(5)){
                        return;
                    }
                    firstLineSelect = 5;
                    firstLine("one_circule_five");
              });
              $("#one_circule_six").click(function(){
                    if(!canSelect(6)){
                        return;
                    }
                    firstLineSelect = 6;
                    firstLine("one_circule_six");
              });
              $("#one_circule_seven").click(function(){
                    if(!canSelect(7)){
                        return;
                    }
                    firstLineSelect = 7;
                    firstLine("one_circule_seven");
              });
              $("#one_circule_eigth").click(function(){
                    if(!canSelect(8)){
                        return;
                    }
                    firstLineSelect = 8;
                    firstLine("one_circule_eigth");
              });
              $("#one_circule_nine").click(function(){
                    if(!canSelect(9)){
                        return;
                    }
                    firstLineSelect = 9;
                    firstLine("one_circule_nine");
              });


              $("#two_circule_one").click(function(){
                    if(!canSelect(1)){
                        return;
                    }
                    secondLineSelect = 1;
                    secondLine("two_circule_one");
              });
              $("#two_circule_two").click(function(){
                    if(!canSelect(2)){
                        return;
                    }
                    secondLineSelect = 2;
                    secondLine("two_circule_two");
              });
              $("#two_circule_tree").click(function(){
                    if(!canSelect(3)){
                        return;
                    }
                    secondLineSelect = 3;
                    secondLine("two_circule_tree");
              });
              $("#two_circule_four").click(function(){
                    if(!canSelect(4)){
                        return;
                    }
                    secondLineSelect = 4;
                    secondLine("two_circule_four");
              });
              $("#two_circule_five").click(function(){
                    if(!canSelect(5)){
                        return;
                    }
                    secondLineSelect = 5;
                    secondLine("two_circule_five");
              });
              $("#two_circule_six").click(function(){
                    if(!canSelect(6)){
                        return;
                    }
                    secondLineSelect = 6;
                    secondLine("two_circule_six");
              });
              $("#two_circule_seven").click(function(){
                    if(!canSelect(7)){
                        return;
                    }
                    secondLineSelect = 7;
                    secondLine("two_circule_seven");
              });
              $("#two_circule_eigth").click(function(){
                    if(!canSelect(8)){
                        return;
                    }
                    secondLineSelect = 8;
                    secondLine("two_circule_eigth");
              });
              $("#two_circule_nine").click(function(){
                    if(!canSelect(9)){
                        return;
                    }
                    secondLineSelect = 9;
                    secondLine("two_circule_nine");
              });


              $("#tree_circule_one").click(function(){
                    if(!canSelect(1)){
                        return;
                    }
                    thridLineSelect = 1;
                    thirdLine("tree_circule_one");
              });
              $("#tree_circule_two").click(function(){
                    if(!canSelect(2)){
                        return;
                    }
                    thridLineSelect = 2;
                    thirdLine("tree_circule_two");
              });
              $("#tree_circule_tree").click(function(){
                    if(!canSelect(3)){
                        return;
                    }
                    thridLineSelect = 3;
                    thirdLine("tree_circule_tree");
              });
              $("#tree_circule_four").click(function(){
                    if(!canSelect(4)){
                        return;
                    }
                    thridLineSelect = 4;
                    thirdLine("tree_circule_four");
              });
              $("#tree_circule_five").click(function(){
                    if(!canSelect(5)){
                        return;
                    }
                    thridLineSelect = 5;
                    thirdLine("tree_circule_five");
              });
              $("#tree_circule_six").click(function(){
                    if(!canSelect(6)){
                        return;
                    }
                    thridLineSelect = 6;
                    thirdLine("tree_circule_six");
              });
              $("#tree_circule_seven").click(function(){
                    if(!canSelect(7)){
                        return;
                    }
                    thridLineSelect = 7;
                    thirdLine("tree_circule_seven");
              });
              $("#tree_circule_eigth").click(function(){
                    if(!canSelect(8)){
                        return;
                    }
                    thridLineSelect = 8;
                    thirdLine("tree_circule_eigth");
              });
              $("#tree_circule_nine").click(function(){
                    if(!canSelect(9)){
                        return;
                    }
                    thridLineSelect = 9;
                    thirdLine("tree_circule_nine");
              });


              $("#four_circule_one").click(function(){
                    if(!canSelect(1)){
                        return;
                    } 
                    fourLineSelect = 1;
                    fourthLine("four_circule_one");
              });
              $("#four_circule_two").click(function(){
                    if(!canSelect(2)){
                        return;
                    }
                    fourLineSelect = 2;
                    fourthLine("four_circule_two");
              });
              $("#four_circule_tree").click(function(){
                    if(!canSelect(3)){
                        return;
                    }
                    fourLineSelect = 3;
                    fourthLine("four_circule_tree");
              });
              $("#four_circule_four").click(function(){
                    if(!canSelect(4)){
                        return;
                    }
                    fourLineSelect = 4;
                    fourthLine("four_circule_four");
              });
              $("#four_circule_five").click(function(){
                    if(!canSelect(5)){
                        return;
                    }
                    fourLineSelect = 5;
                    fourthLine("four_circule_five");
              });
              $("#four_circule_six").click(function(){
                    if(!canSelect(6)){
                        return;
                    }
                    fourLineSelect = 6;
                    fourthLine("four_circule_six");
              });
              $("#four_circule_seven").click(function(){
                    if(!canSelect(7)){
                        return;
                    }
                    fourLineSelect = 7;
                    fourthLine("four_circule_seven");
              });
              $("#four_circule_eigth").click(function(){
                    if(!canSelect(8)){
                        return;
                    }
                    fourLineSelect = 8;
                    fourthLine("four_circule_eigth");
              });
              $("#four_circule_nine").click(function(){
                    if(!canSelect(9)){
                        return;
                    }
                    fourLineSelect = 9;
                    fourthLine("four_circule_nine");
              });


              $("#five_circule_one").click(function(){
                    if(!canSelect(1)){
                        return;
                    }
                    fivetLineSelect = 1;
                    fivethLine("five_circule_one");
              });
              $("#five_circule_two").click(function(){
                    if(!canSelect(2)){
                        return;
                    }
                    fivetLineSelect = 2;
                    fivethLine("five_circule_two");
              });
              $("#five_circule_tree").click(function(){
                    if(!canSelect(3)){
                        return;
                    }
                    fivetLineSelect = 3;
                    fivethLine("five_circule_tree");
              });
              $("#five_circule_four").click(function(){
                    if(!canSelect(4)){
                        return;
                    }
                    fivetLineSelect = 4;
                    fivethLine("five_circule_four");
              });
              $("#five_circule_five").click(function(){
                    if(!canSelect(5)){
                        return;
                    }
                    fivetLineSelect = 5;
                    fivethLine("five_circule_five");
              });
              $("#five_circule_six").click(function(){
                    if(!canSelect(6)){
                        return;
                    }
                    fivetLineSelect = 6;
                    fivethLine("five_circule_six");
              });
              $("#five_circule_seven").click(function(){
                    if(!canSelect(7)){
                        return;
                    }
                    fivetLineSelect = 7;
                    fivethLine("five_circule_seven");
              });
              $("#five_circule_eigth").click(function(){
                    if(!canSelect(8)){
                        return;
                    }
                    fivetLineSelect = 8;
                    fivethLine("five_circule_eigth");
              });
              $("#five_circule_nine").click(function(){
                    if(!canSelect(9)){
                        return;
                    }
                    fivetLineSelect = 9;
                    fivethLine("five_circule_nine");
              });


              $("#six_circule_one").click(function(){
                    if(!canSelect(1)){
                        return;
                    }
                    sixLineSelect = 1;
                    sixLine("six_circule_one");
              });
              $("#six_circule_two").click(function(){
                    if(!canSelect(2)){
                        return;
                    }
                    sixLineSelect = 2;
                    sixLine("six_circule_two");
              });
              $("#six_circule_tree").click(function(){
                    if(!canSelect(3)){
                        return;
                    }
                    sixLineSelect = 3;
                    sixLine("six_circule_tree");
              });
              $("#six_circule_four").click(function(){
                    if(!canSelect(4)){
                        return;
                    }
                    sixLineSelect = 4;
                    sixLine("six_circule_four");
              });
              $("#six_circule_five").click(function(){
                    if(!canSelect(5)){
                        return;
                    }
                    sixLineSelect = 5;
                    sixLine("six_circule_five");
              });
              $("#six_circule_six").click(function(){
                    if(!canSelect(6)){
                        return;
                    }
                    sixLineSelect = 6;
                    sixLine("six_circule_six");
              });
              $("#six_circule_seven").click(function(){
                    if(!canSelect(7)){
                        return;
                    }
                    sixLineSelect = 7;
                    sixLine("six_circule_seven");
              });
              $("#six_circule_eigth").click(function(){
                    if(!canSelect(8)){
                        return;
                    }
                    sixLineSelect = 8;
                    sixLine("six_circule_eigth");
              });
              $("#six_circule_nine").click(function(){
                    if(!canSelect(9)){
                        return;
                    }
                    sixLineSelect = 9;
                    sixLine("six_circule_nine");
              });

              $("#seven_circule_one").click(function(){
                    if(!canSelect(1)){
                        return;
                    }
                    sevenLineSelect = 1;
                    sevenLine("seven_circule_one");
              });
              $("#seven_circule_two").click(function(){
                    if(!canSelect(2)){
                        return;
                    }
                    sevenLineSelect = 2;
                    sevenLine("seven_circule_two");
              });
              $("#seven_circule_tree").click(function(){
                    if(!canSelect(3)){
                        return;
                    }
                    sevenLineSelect = 3;
                    sevenLine("seven_circule_tree");
              });
              $("#seven_circule_four").click(function(){
                    if(!canSelect(4)){
                        return;
                    }
                    sevenLineSelect = 4;
                    sevenLine("seven_circule_four");
              });
              $("#seven_circule_five").click(function(){
                    if(!canSelect(5)){
                        return;
                    }
                    sevenLineSelect = 5;
                    sevenLine("seven_circule_five");
              });
              $("#seven_circule_six").click(function(){
                    if(!canSelect(6)){
                        return;
                    }
                    sevenLineSelect = 6;
                    sevenLine("seven_circule_six");
              });
              $("#seven_circule_seven").click(function(){
                    if(!canSelect(7)){
                        return;
                    }
                    sevenLineSelect = 7;
                    sevenLine("seven_circule_seven");
              });
              $("#seven_circule_eigth").click(function(){
                    if(!canSelect(8)){
                        return;
                    }
                    sevenLineSelect = 8;
                    sevenLine("seven_circule_eigth");
              });
              $("#seven_circule_nine").click(function(){
                    if(!canSelect(9)){
                        return;
                    }
                    sevenLineSelect = 9;
                    sevenLine("seven_circule_nine");
              });

              $("#eigth_circule_one").click(function(){
                    if(!canSelect(1)){
                        return;
                    }
                    eigthLineSelect = 1;
                    eigthLine("eigth_circule_one");
              });
              $("#eigth_circule_two").click(function(){
                    if(!canSelect(2)){
                        return;
                    }
                    eigthLineSelect = 2;
                    eigthLine("eigth_circule_two");
              });
              $("#eigth_circule_tree").click(function(){
                    if(!canSelect(3)){
                        return;
                    }
                    eigthLineSelect = 3;
                    eigthLine("eigth_circule_tree");
              });
              $("#eigth_circule_four").click(function(){
                    if(!canSelect(4)){
                        return;
                    }
                    eigthLineSelect = 4;
                    eigthLine("eigth_circule_four");
              });
              $("#eigth_circule_five").click(function(){
                    if(!canSelect(5)){
                        return;
                    }
                    eigthLineSelect = 5;
                    eigthLine("eigth_circule_five");
              });
              $("#eigth_circule_six").click(function(){
                    if(!canSelect(6)){
                        return;
                    }
                    eigthLineSelect = 6;
                    eigthLine("eigth_circule_six");
              });
              $("#eigth_circule_seven").click(function(){
                    if(!canSelect(7)){
                        return;
                    }
                    eigthLineSelect = 7;
                    eigthLine("eigth_circule_seven");
              });
              $("#eigth_circule_eigth").click(function(){
                    if(!canSelect(8)){
                        return;
                    }
                    eigthLineSelect = 8;
                    eigthLine("eigth_circule_eigth");
              });
              $("#eigth_circule_nine").click(function(){
                    if(!canSelect(9)){
                        return;
                    }
                    eigthLineSelect = 9;
                    eigthLine("eigth_circule_nine");
              });

              $("#nine_circule_one").click(function(){
                    if(!canSelect(1)){
                        return;
                    }
                    nineLineSelect = 1;
                    nineLine("nine_circule_one");
              });
              $("#nine_circule_two").click(function(){
                    if(!canSelect(2)){
                        return;
                    }
                    nineLineSelect = 2;
                    nineLine("nine_circule_two");
              });
              $("#nine_circule_tree").click(function(){
                    if(!canSelect(3)){
                        return;
                    }
                    nineLineSelect = 3;
                    nineLine("nine_circule_tree");
              });
              $("#nine_circule_four").click(function(){
                    if(!canSelect(4)){
                        return;
                    }
                    nineLineSelect = 4;
                    nineLine("nine_circule_four");
              });
              $("#nine_circule_five").click(function(){
                    if(!canSelect(5)){
                        return;
                    }
                    nineLineSelect = 5;
                    nineLine("nine_circule_five");
              });
              $("#nine_circule_six").click(function(){
                    if(!canSelect(6)){
                        return;
                    }
                    nineLineSelect = 6;
                    nineLine("nine_circule_six");
              });
              $("#nine_circule_seven").click(function(){
                    if(!canSelect(7)){
                        return;
                    }
                    nineLineSelect = 7;
                    nineLine("nine_circule_seven");
              });
              $("#nine_circule_eigth").click(function(){
                    if(!canSelect(8)){
                        return;
                    }
                    nineLineSelect = 8;
                    nineLine("nine_circule_eigth");
              });
              $("#nine_circule_nine").click(function(){
                    if(!canSelect(9)){
                        return;
                    }
                    nineLineSelect = 9;
                    nineLine("nine_circule_nine");
              });
        });
        
        function canSelect(number){

            if( number==firstLineSelect   ||
                number==secondLineSelect  ||
                number==thridLineSelect   ||
                number==fourLineSelect    ||
                number==fivetLineSelect   ||
                number==sixLineSelect     ||
                number==sevenLineSelect   ||
                number==eigthLineSelect   ||
                number==nineLineSelect){
                return false;
            }
            else{
                return true;
            }
        }

        function firstLine(id){

            $("#one_circule_one").removeClass("dot");
            $("#one_circule_two").removeClass("dot");
            $("#one_circule_tree").removeClass("dot");
            $("#one_circule_four").removeClass("dot");
            $("#one_circule_five").removeClass("dot");
            $("#one_circule_six").removeClass("dot");
            $("#one_circule_seven").removeClass("dot");
            $("#one_circule_eigth").removeClass("dot");
            $("#one_circule_nine").removeClass("dot");

            $("#" + id).addClass("dot");
        }

        function secondLine(id){

            $("#two_circule_one").removeClass("dot");
            $("#two_circule_two").removeClass("dot");
            $("#two_circule_tree").removeClass("dot");
            $("#two_circule_four").removeClass("dot");
            $("#two_circule_five").removeClass("dot");
            $("#two_circule_six").removeClass("dot");
            $("#two_circule_seven").removeClass("dot");
            $("#two_circule_eigth").removeClass("dot");
            $("#two_circule_nine").removeClass("dot");

            $("#" + id).addClass("dot");
        }

        function thirdLine(id){

            $("#tree_circule_one").removeClass("dot");
            $("#tree_circule_two").removeClass("dot");
            $("#tree_circule_tree").removeClass("dot");
            $("#tree_circule_four").removeClass("dot");
            $("#tree_circule_five").removeClass("dot");
            $("#tree_circule_six").removeClass("dot");
            $("#tree_circule_seven").removeClass("dot");
            $("#tree_circule_eigth").removeClass("dot");
            $("#tree_circule_nine").removeClass("dot");

            $("#" + id).addClass("dot");
        }

        function fourthLine(id){

            $("#four_circule_one").removeClass("dot");
            $("#four_circule_two").removeClass("dot");
            $("#four_circule_tree").removeClass("dot");
            $("#four_circule_four").removeClass("dot");
            $("#four_circule_five").removeClass("dot");
            $("#four_circule_six").removeClass("dot");
            $("#four_circule_seven").removeClass("dot");
            $("#four_circule_eigth").removeClass("dot");
            $("#four_circule_nine").removeClass("dot");

            $("#" + id).addClass("dot");
        }

        function fivethLine(id){

            $("#five_circule_one").removeClass("dot");
            $("#five_circule_two").removeClass("dot");
            $("#five_circule_tree").removeClass("dot");
            $("#five_circule_four").removeClass("dot");
            $("#five_circule_five").removeClass("dot");
            $("#five_circule_six").removeClass("dot");
            $("#five_circule_seven").removeClass("dot");
            $("#five_circule_eigth").removeClass("dot");
            $("#five_circule_nine").removeClass("dot");

            $("#" + id).addClass("dot");
        }

        function sixLine(id){

            $("#six_circule_one").removeClass("dot");
            $("#six_circule_two").removeClass("dot");
            $("#six_circule_tree").removeClass("dot");
            $("#six_circule_four").removeClass("dot");
            $("#six_circule_five").removeClass("dot");
            $("#six_circule_six").removeClass("dot");
            $("#six_circule_seven").removeClass("dot");
            $("#six_circule_eigth").removeClass("dot");
            $("#six_circule_nine").removeClass("dot");

            $("#" + id).addClass("dot");
        }

        function sevenLine(id){

            $("#seven_circule_one").removeClass("dot");
            $("#seven_circule_two").removeClass("dot");
            $("#seven_circule_tree").removeClass("dot");
            $("#seven_circule_four").removeClass("dot");
            $("#seven_circule_five").removeClass("dot");
            $("#seven_circule_six").removeClass("dot");
            $("#seven_circule_seven").removeClass("dot");
            $("#seven_circule_eigth").removeClass("dot");
            $("#seven_circule_nine").removeClass("dot");

            $("#" + id).addClass("dot");
        }

        function eigthLine(id){

            $("#eigth_circule_one").removeClass("dot");
            $("#eigth_circule_two").removeClass("dot");
            $("#eigth_circule_tree").removeClass("dot");
            $("#eigth_circule_four").removeClass("dot");
            $("#eigth_circule_five").removeClass("dot");
            $("#eigth_circule_six").removeClass("dot");
            $("#eigth_circule_seven").removeClass("dot");
            $("#eigth_circule_eigth").removeClass("dot");
            $("#eigth_circule_nine").removeClass("dot");

            $("#" + id).addClass("dot");
        }

        function nineLine(id){

            $("#nine_circule_one").removeClass("dot");
            $("#nine_circule_two").removeClass("dot");
            $("#nine_circule_tree").removeClass("dot");
            $("#nine_circule_four").removeClass("dot");
            $("#nine_circule_five").removeClass("dot");
            $("#nine_circule_six").removeClass("dot");
            $("#nine_circule_seven").removeClass("dot");
            $("#nine_circule_eigth").removeClass("dot");
            $("#nine_circule_nine").removeClass("dot");

            $("#" + id).addClass("dot");
        } 

        function nextButtonClicked(){
            
            if(firstLineSelect==-1){
                $("#dialog").css("display","block");
                return;
            }
            if(secondLineSelect==-1){
              $("#dialog").css("display","block");
                return;
            }
            if(thridLineSelect==-1){
              $("#dialog").css("display","block");
                return;
            }
            if(fourLineSelect==-1){
              $("#dialog").css("display","block");
                return;
            }
            if(fivetLineSelect==-1){
              $("#dialog").css("display","block");
                return;
            }
            if(sixLineSelect==-1){
              $("#dialog").css("display","block");
                return;
            }
            if(sevenLineSelect==-1){
              $("#dialog").css("display","block");
                return;
            }
            if(eigthLineSelect==-1){
              $("#dialog").css("display","block");
                return;
            }
            if(nineLineSelect==-1){
              $("#dialog").css("display","block");
                return;
            }

            window.location = "carreras_familias";
        }

        function closeDialog(){
            $("#dialog").css("display", "none");
        }

     </script>

@stop