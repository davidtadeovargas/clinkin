<?php

namespace App\Repositories;

use App\Pregunta;
use App\Clasificaciones;
use App\AptitudesTest;

class AptitudesTestRepository
{
    function getAllQuestions(){

        if(\Session::has("email")){
            $email = \Session::get("email");
        } else {
            $email = "artumarc.test@gmail.com";
        }

        //Obiene todas las clasificaciones del test
        $clasificaciones = \DB::table('clasificaciones_x_tests')
            ->join('clasificaciones', 'clasificaciones_x_tests.id', '=', 'clasificaciones.id')
            ->where('idTest', 1)
            ->select('clasificaciones.*')
            ->get();
        
        //Obtiene todas las preguntas por clasificación
        $preguntasFinal = array();
        foreach($clasificaciones as $Clasificacion){
            
            $preguntas = Pregunta::where('idClasificacion', $Clasificacion->id)->get();
            foreach($preguntas as $Pregunta){

                $Response = array();
                $Response["id"] = $Pregunta->id;
                $Response["idClasificacion"] = $Pregunta->idClasificacion;
                $Response["name"] = $Pregunta->name;
                $Response["value"] = -1;

                //Si previamente ya fue respondida entonces obtiene el valor de la respuesta
                $AptitudesTest = AptitudesTest::where("idUsuario",$email)->where("testId",1)->where("question",$Pregunta->id)->first();
                if($AptitudesTest){
                    $Response["value"] = $AptitudesTest->value;
                }
                
                array_push($preguntasFinal, $Response);
            }
        }

        //Mezcla el array
        shuffle($preguntasFinal);

        return $preguntasFinal;
    }
}
