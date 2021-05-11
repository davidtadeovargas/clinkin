<?php

namespace App\Repositories;

use App\Pregunta;
use App\Area;
use App\AreaInteres;
use App\AreaRules;

class AreasTestRepository
{   
    private $AreasValues = [];

    function getArea($Aptitud1,$Aptitud2,$Aptitud3,$Interes1,$Interes2,$Interes3){

        //Obtiene las áreas
        $maxArea1 = \DB::select("SELECT idArea, MAX(cont1) as mas FROM (SELECT idArea, SUM(cont) as cont1 FROM (SELECT idArea, count(*) as cont FROM areas_rules WHERE idAptitud in(".$Aptitud1.") AND idInteres in(".$Interes1.",".$Interes2.",".$Interes3.") GROUP BY idAptitud, idInteres, idArea) AS q1 GROUP BY idArea) q2 GROUP BY idArea ORDER BY mas desc");
        $maxArea2 = \DB::select("SELECT idArea, MAX(cont1) as mas FROM (SELECT idArea, SUM(cont) as cont1 FROM (SELECT idArea, count(*) as cont FROM areas_rules WHERE idAptitud in(".$Aptitud2.") AND idInteres in(".$Interes1.",".$Interes2.",".$Interes3.") GROUP BY idAptitud, idInteres, idArea) AS q1 GROUP BY idArea) q2 GROUP BY idArea ORDER BY mas desc");
        $maxArea3 = \DB::select("SELECT idArea, MAX(cont1) as mas FROM (SELECT idArea, SUM(cont) as cont1 FROM (SELECT idArea, count(*) as cont FROM areas_rules WHERE idAptitud in(".$Aptitud3.") AND idInteres in(".$Interes1.",".$Interes2.",".$Interes3.") GROUP BY idAptitud, idInteres, idArea) AS q1 GROUP BY idArea) q2 GROUP BY idArea ORDER BY mas desc");

        //Obtiene en si las áreas
        $Areas = [];
        if($maxArea1){
            $this->calculate($maxArea1);
        }
        if($maxArea2){
            $this->calculate($maxArea2);
        }
        if($maxArea3){
            $this->calculate($maxArea3);
        }

        //return $this->AreasValues;
        
        $AreaMyor1 = -1;
        $AreaMyor2 = -1;
        $AreaMyor3 = -1;

        $area = 1;

        foreach ($this->AreasValues as $key => $value) {

            if($area==1){
                if($value > intval($AreaMyor1)){
                    $AreaMyor1 = $key;
                }
                $area = 2;
            } else if($area==2){
                if($value > intval($AreaMyor2)){
                    $AreaMyor2 = $key;
                }
                $area = 3;
            } else if($area==3){
                if($value > intval($AreaMyor3)){
                    $AreaMyor3 = $key;
                }
                $area = 1;
            }
        }

        $Areas = [];
        if($AreaMyor1!=-1){
            $Areas["Area1"] = Area::find($AreaMyor1);
        }
        if($AreaMyor2!=-1){
            $Areas["Area2"] = Area::find($AreaMyor2);
        }
        if($AreaMyor3!=-1){
            $Areas["Area3"] = Area::find($AreaMyor3);
        }

        return $Areas;
    }

    function calculate($maxArea){

        foreach ($maxArea as &$Area) {

            $idArea = $Area->idArea;
            
            if(!isset($this->AreasValues[$idArea])){
                $this->AreasValues[$idArea] = $Area->mas;
            } else {

                $this->AreasValues[$idArea] = $Area->mas + $this->AreasValues[$idArea];
            }
        }
    }
}
