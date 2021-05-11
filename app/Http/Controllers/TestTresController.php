<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestTresResults;

class TestTresController extends Controller
{
    //

    public function sendTest(Request $request){
        
        $this->saveOrUpdate($request, 1);

        $response = ['res' => 'ok'];
        
        return response()->json($response);
    }

    private function saveOrUpdate($request, $fase) {

        if(\Session::has("email")){
            $email = \Session::get("email");
        } else {
            $email = "artumarc.test@gmail.com";
        }

        $bloque = $request->input('bloque');
        $preguntas = $request->input('preguntas');
        
        foreach ($preguntas as $Pregunta){

            $idPregunta = $Pregunta["id"];
            $valor = $Pregunta["valor"];

            $TestTresResults = TestTresResults::where("userId",$email)->where("fase",2)->where("pregunta",$idPregunta)->first();
            if(!$TestTresResults){

                $TestTresResults = new TestTresResults();
                $TestTresResults->userId = $email;
                $TestTresResults->fase = $fase;
                $TestTresResults->pregunta = $idPregunta;
                $TestTresResults->valor = $valor;
                $TestTresResults->save();

            } else {

                $TestTresResults->userId = $email;
                $TestTresResults->fase = $fase;
                $TestTresResults->pregunta = $idPregunta;
                $TestTresResults->valor = $valor;
                $TestTresResults->update();
            }
        }

        $response = ['res' => 'ok'];
        
        return response()->json($response);
    }

    public function sendTestFase2(Request $request){
        
        $this->saveOrUpdate($request, 2);

        $response = ['res' => 'ok'];
        
        return response()->json($response);
    }
}
