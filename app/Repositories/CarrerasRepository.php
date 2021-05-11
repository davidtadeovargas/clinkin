<?php

namespace App\Repositories;

use App\CarrerasXAreaTestResults;
use App\Carrera;
use App\CarrerasResults;


class CarrerasRepository
{   
    
    function getNotRepeatedFromCarrerasResults($email){

        $CarrerasXAreaTestResult = CarrerasXAreaTestResults::where("idUsuario",$email)->first();
        $CarrerasResults = CarrerasResults::where("userId",$email)->get();

        $Carrera1 = $CarrerasXAreaTestResult->idCarrera1;
        if( $CarrerasXAreaTestResult->idCarrera1==$CarrerasXAreaTestResult->idCarrera2 ||
            $CarrerasXAreaTestResult->idCarrera1==$CarrerasXAreaTestResult->idCarrera3 ||
            $CarrerasXAreaTestResult->idCarrera1==$CarrerasXAreaTestResult->idCarrera4 ||
            $CarrerasXAreaTestResult->idCarrera1==$CarrerasXAreaTestResult->idCarrera5 ||
            $CarrerasXAreaTestResult->idCarrera1==$CarrerasXAreaTestResult->idCarrera6 ||
            $CarrerasXAreaTestResult->idCarrera1==$CarrerasXAreaTestResult->idCarrera7 ||
            $CarrerasXAreaTestResult->idCarrera1==$CarrerasXAreaTestResult->idCarrera8 ||
            $CarrerasXAreaTestResult->idCarrera1==$CarrerasXAreaTestResult->idCarrera9){
            $Carrera1 = -1;
        }
        $Carrera2 = $CarrerasXAreaTestResult->idCarrera2;
        if( $CarrerasXAreaTestResult->idCarrera2==$CarrerasXAreaTestResult->idCarrera1 ||
            $CarrerasXAreaTestResult->idCarrera2==$CarrerasXAreaTestResult->idCarrera3 ||
            $CarrerasXAreaTestResult->idCarrera2==$CarrerasXAreaTestResult->idCarrera4 ||
            $CarrerasXAreaTestResult->idCarrera2==$CarrerasXAreaTestResult->idCarrera5 ||
            $CarrerasXAreaTestResult->idCarrera2==$CarrerasXAreaTestResult->idCarrera6 ||
            $CarrerasXAreaTestResult->idCarrera2==$CarrerasXAreaTestResult->idCarrera7 ||
            $CarrerasXAreaTestResult->idCarrera2==$CarrerasXAreaTestResult->idCarrera8 ||
            $CarrerasXAreaTestResult->idCarrera2==$CarrerasXAreaTestResult->idCarrera9){
            $Carrera2 = -1;
        }
        $Carrera3 = $CarrerasXAreaTestResult->idCarrera3;
        if( $CarrerasXAreaTestResult->idCarrera3==$CarrerasXAreaTestResult->idCarrera1 ||
            $CarrerasXAreaTestResult->idCarrera3==$CarrerasXAreaTestResult->idCarrera2 ||
            $CarrerasXAreaTestResult->idCarrera3==$CarrerasXAreaTestResult->idCarrera4 ||
            $CarrerasXAreaTestResult->idCarrera3==$CarrerasXAreaTestResult->idCarrera5 ||
            $CarrerasXAreaTestResult->idCarrera3==$CarrerasXAreaTestResult->idCarrera6 ||
            $CarrerasXAreaTestResult->idCarrera3==$CarrerasXAreaTestResult->idCarrera7 ||
            $CarrerasXAreaTestResult->idCarrera3==$CarrerasXAreaTestResult->idCarrera8 ||
            $CarrerasXAreaTestResult->idCarrera3==$CarrerasXAreaTestResult->idCarrera9){
            $Carrera3 = -1;
        }
        $Carrera4 = $CarrerasXAreaTestResult->idCarrera4;
        if( $CarrerasXAreaTestResult->idCarrera4==$CarrerasXAreaTestResult->idCarrera1 ||
            $CarrerasXAreaTestResult->idCarrera4==$CarrerasXAreaTestResult->idCarrera2 ||
            $CarrerasXAreaTestResult->idCarrera4==$CarrerasXAreaTestResult->idCarrera3 ||
            $CarrerasXAreaTestResult->idCarrera4==$CarrerasXAreaTestResult->idCarrera5 ||
            $CarrerasXAreaTestResult->idCarrera4==$CarrerasXAreaTestResult->idCarrera6 ||
            $CarrerasXAreaTestResult->idCarrera4==$CarrerasXAreaTestResult->idCarrera7 ||
            $CarrerasXAreaTestResult->idCarrera4==$CarrerasXAreaTestResult->idCarrera8 ||
            $CarrerasXAreaTestResult->idCarrera4==$CarrerasXAreaTestResult->idCarrera9){
            $Carrera4 = -1;
        }
        $Carrera5 = $CarrerasXAreaTestResult->idCarrera5;
        if( $CarrerasXAreaTestResult->idCarrera5==$CarrerasXAreaTestResult->idCarrera1 ||
            $CarrerasXAreaTestResult->idCarrera5==$CarrerasXAreaTestResult->idCarrera2 ||
            $CarrerasXAreaTestResult->idCarrera5==$CarrerasXAreaTestResult->idCarrera3 ||
            $CarrerasXAreaTestResult->idCarrera5==$CarrerasXAreaTestResult->idCarrera4 ||
            $CarrerasXAreaTestResult->idCarrera5==$CarrerasXAreaTestResult->idCarrera6 ||
            $CarrerasXAreaTestResult->idCarrera5==$CarrerasXAreaTestResult->idCarrera7 ||
            $CarrerasXAreaTestResult->idCarrera5==$CarrerasXAreaTestResult->idCarrera8 ||
            $CarrerasXAreaTestResult->idCarrera5==$CarrerasXAreaTestResult->idCarrera9){
            $Carrera5 = -1;
        }
        $Carrera6 = $CarrerasXAreaTestResult->idCarrera6;
        if( $CarrerasXAreaTestResult->idCarrera6==$CarrerasXAreaTestResult->idCarrera1 ||
            $CarrerasXAreaTestResult->idCarrera6==$CarrerasXAreaTestResult->idCarrera2 ||
            $CarrerasXAreaTestResult->idCarrera6==$CarrerasXAreaTestResult->idCarrera3 ||
            $CarrerasXAreaTestResult->idCarrera6==$CarrerasXAreaTestResult->idCarrera4 ||
            $CarrerasXAreaTestResult->idCarrera6==$CarrerasXAreaTestResult->idCarrera5 ||
            $CarrerasXAreaTestResult->idCarrera6==$CarrerasXAreaTestResult->idCarrera7 ||
            $CarrerasXAreaTestResult->idCarrera6==$CarrerasXAreaTestResult->idCarrera8 ||
            $CarrerasXAreaTestResult->idCarrera6==$CarrerasXAreaTestResult->idCarrera9){
            $Carrera6 = -1;
        }
        $Carrera7 = $CarrerasXAreaTestResult->idCarrera7;
        if( $CarrerasXAreaTestResult->idCarrera7==$CarrerasXAreaTestResult->idCarrera1 ||
            $CarrerasXAreaTestResult->idCarrera7==$CarrerasXAreaTestResult->idCarrera2 ||
            $CarrerasXAreaTestResult->idCarrera7==$CarrerasXAreaTestResult->idCarrera3 ||
            $CarrerasXAreaTestResult->idCarrera7==$CarrerasXAreaTestResult->idCarrera4 ||
            $CarrerasXAreaTestResult->idCarrera7==$CarrerasXAreaTestResult->idCarrera5 ||
            $CarrerasXAreaTestResult->idCarrera7==$CarrerasXAreaTestResult->idCarrera6 ||
            $CarrerasXAreaTestResult->idCarrera7==$CarrerasXAreaTestResult->idCarrera8 ||
            $CarrerasXAreaTestResult->idCarrera7==$CarrerasXAreaTestResult->idCarrera9){
            $Carrera7 = -1;
        }
        $Carrera8 = $CarrerasXAreaTestResult->idCarrera8;
        if( $CarrerasXAreaTestResult->idCarrera8==$CarrerasXAreaTestResult->idCarrera1 ||
            $CarrerasXAreaTestResult->idCarrera8==$CarrerasXAreaTestResult->idCarrera2 ||
            $CarrerasXAreaTestResult->idCarrera8==$CarrerasXAreaTestResult->idCarrera3 ||
            $CarrerasXAreaTestResult->idCarrera8==$CarrerasXAreaTestResult->idCarrera4 ||
            $CarrerasXAreaTestResult->idCarrera8==$CarrerasXAreaTestResult->idCarrera5 ||
            $CarrerasXAreaTestResult->idCarrera8==$CarrerasXAreaTestResult->idCarrera6 ||
            $CarrerasXAreaTestResult->idCarrera8==$CarrerasXAreaTestResult->idCarrera7 ||
            $CarrerasXAreaTestResult->idCarrera8==$CarrerasXAreaTestResult->idCarrera9){
            $Carrera8 = -1;
        }
        $Carrera9 = $CarrerasXAreaTestResult->idCarrera9;
        if( $CarrerasXAreaTestResult->idCarrera9==$CarrerasXAreaTestResult->idCarrera1 ||
            $CarrerasXAreaTestResult->idCarrera9==$CarrerasXAreaTestResult->idCarrera2 ||
            $CarrerasXAreaTestResult->idCarrera9==$CarrerasXAreaTestResult->idCarrera3 ||
            $CarrerasXAreaTestResult->idCarrera9==$CarrerasXAreaTestResult->idCarrera4 ||
            $CarrerasXAreaTestResult->idCarrera9==$CarrerasXAreaTestResult->idCarrera5 ||
            $CarrerasXAreaTestResult->idCarrera9==$CarrerasXAreaTestResult->idCarrera6 ||
            $CarrerasXAreaTestResult->idCarrera9==$CarrerasXAreaTestResult->idCarrera7 ||
            $CarrerasXAreaTestResult->idCarrera9==$CarrerasXAreaTestResult->idCarrera8){
            $Carrera9 = -1;
        }

        $carreras = [];

        if($Carrera1!=-1){
            $Carrera1 = Carrera::find($CarrerasXAreaTestResult->idCarrera1);
            array_push($carreras, $Carrera1);
        }
        if($Carrera2!=-1){
            $Carrera2 = Carrera::find($CarrerasXAreaTestResult->idCarrera2);
            array_push($carreras, $Carrera2);
        }
        if($Carrera3!=-1){
            $Carrera3 = Carrera::find($CarrerasXAreaTestResult->idCarrera3);
            array_push($carreras, $Carrera3);
        }
        if($Carrera4!=-1){
            $Carrera4 = Carrera::find($CarrerasXAreaTestResult->idCarrera4);
            array_push($carreras, $Carrera4);
        }
        if($Carrera5!=-1){
            $Carrera5 = Carrera::find($CarrerasXAreaTestResult->idCarrera5);
            array_push($carreras, $Carrera5);
        }
        if($Carrera6!=-1){
            $Carrera6 = Carrera::find($CarrerasXAreaTestResult->idCarrera6);
            array_push($carreras, $Carrera6);
        }
        if($Carrera7!=-1){
            $Carrera7 = Carrera::find($CarrerasXAreaTestResult->idCarrera7);
            array_push($carreras, $Carrera7);
        }
        if($Carrera8!=-1){
            $Carrera8 = Carrera::find($CarrerasXAreaTestResult->idCarrera8);
            array_push($carreras, $Carrera8);
        }
        if($Carrera9!=-1){
            $Carrera9 = Carrera::find($CarrerasXAreaTestResult->idCarrera9);
            array_push($carreras, $Carrera9);
        }
        
            
        foreach ($CarrerasResults as &$CarrerasResult) {

            if( $CarrerasResult->carreraId==$CarrerasXAreaTestResult->idCarrera1 ||
                $CarrerasResult->carreraId==$CarrerasXAreaTestResult->idCarrera2 ||
                $CarrerasResult->carreraId==$CarrerasXAreaTestResult->idCarrera3 ||
                $CarrerasResult->carreraId==$CarrerasXAreaTestResult->idCarrera4 ||
                $CarrerasResult->carreraId==$CarrerasXAreaTestResult->idCarrera5 ||
                $CarrerasResult->carreraId==$CarrerasXAreaTestResult->idCarrera6 ||
                $CarrerasResult->carreraId==$CarrerasXAreaTestResult->idCarrera7 ||
                $CarrerasResult->carreraId==$CarrerasXAreaTestResult->idCarrera8 ||
                $CarrerasResult->carreraId==$CarrerasXAreaTestResult->idCarrera9){

                //Exists

            } else {

                $Carr = Carrera::find($CarrerasResult->carreraId);
                array_push($carreras, $Carr);
            }
            
        }

        return $carreras;
    }
}
