@extends('layouts.logged')

@section('head')
    @parent

    <title>Clinkin - Premium Importancia</title>

    @section('style')
      @parent

    @stop

@stop

@section('body')
    @parent
    
    <!-- HERO -->
     <section class="hero d-flex justify-content-center align-items-center" style="background-image: url('./images/rombos.png');background-size: no-repeat;">
               <div class="container">
                    <div class="row">

                        <div class="col-sm-12" style="text-align: right;">
                            <img src="./images/premium_carga_masiva.png" style="max-width: 75px;max-height: 45px;text-align: right;" alt="">
                        </div>
                        <div class="col-sm-12" style="text-align: center;">
                            <span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-right: 10px"></span>
                            <span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-left: 10px;margin-right: 10px"></span>
                            <span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-right: 10px;margin-left: 10px"></span>
                            <span class="dot" style="height: 20px;width: 20px;background-color: #ffcc00;border-radius: 50%;display: inline-block;margin-right: 10px;margin-left: 10px"></span>
                            <br><br><br>
                        </div>
                        <div class="col-sm-2" style="text-align: center;">
                            <button type="button" class="btn btn-dark col-sm-12" style="margin:5px;opacity: .9">Objetivos</button>
                            <button type="button" class="btn btn-info col-sm-12" style="margin:5px">Importancia</button>
                            <button type="button" class="btn btn-dark col-sm-12" style="margin:5px;opacity: .9">Campo aplicación</button>
                            <button type="button" class="btn btn-dark col-sm-12" style="margin:5px;opacity: .9">Materias</button>
                            <button type="button" class="btn btn-dark col-sm-12" style="margin:5px;opacity: .9">Aptitudes</button>
                            <button type="button" class="btn btn-dark col-sm-12" style="margin:5px;opacity: .9">Intereses</button>
                            <button type="button" class="btn btn-dark col-sm-12" style="margin:5px;opacity: .9">Ambiente</button>
                            <button type="button" class="btn btn-dark col-sm-12" style="margin:5px;opacity: .9">Personalidad</button>
                        </div>
                        <div class="col-sm-10 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text" style="text-align: center;padding: 0px !important">
                                    <div id="dialog" data-aos="fade-up" style="background-color: white;padding: 2em;border-radius: 10px;color: black !important;margin: 10px;text-align: center;">
                                        <p class="text-white" style="font-size: 14px;color: black !important;text-align: center;">Califica qué actividad consideras más importante, otorgando 6 a la que harías primero y 1 a la que dejarías al final.
                                        </p><br>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <p class="text-white col-sm-10" style="font-size: 14px;color: black !important;text-align: left;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                                </div>
                                                <div class="row">
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">1<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">2<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">3<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">4<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">5<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">6<span>
                                                </div><br>
                                                <div class="row">
                                                    <p class="text-white col-sm-12" style="font-size: 14px;color: black !important;text-align: left;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                                </div>
                                                <div class="row">
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">1<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">2<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">3<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">4<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">5<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">6<span>
                                                </div><br>
                                                <div class="row">
                                                    <p class="text-white col-sm-12" style="font-size: 14px;color: black !important;text-align: left;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                                </div>
                                                <div class="row">
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">1<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">2<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">3<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">4<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">5<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">6<span>
                                                </div><br>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <p class="text-white col-sm-10" style="font-size: 14px;color: black !important;text-align: left;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                                </div>
                                                <div class="row">
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">1<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">2<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">3<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">4<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">5<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">6<span>
                                                </div><br>
                                                <div class="row">
                                                    <p class="text-white col-sm-12" style="font-size: 14px;color: black !important;text-align: left;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                                </div>
                                                <div class="row">
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">1<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">2<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">3<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">4<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">5<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">6<span>
                                                </div><br>
                                                <div class="row">
                                                    <p class="text-white col-sm-12" style="font-size: 14px;color: black !important;text-align: left;">Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                                                </div>
                                                <div class="row">
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">1<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">2<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">3<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">4<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">5<span>
                                                    <img src="./images/cara_5_circule.png" style="max-width: 45px;cursor: pointer;max-height: 15px" class="col-sm-1" alt="">
                                                    <span style="font-size: 13px">6<span>
                                                </div><br>
                                            </div>
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
        
        function nextButtonClicked(){
            window.location = "premium_test_campo_aplicacion";
        }

     </script>

@stop