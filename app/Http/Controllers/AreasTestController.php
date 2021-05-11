<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AreasTestRepository;
use App\AptitudesTestResults;
use App\CruceAreaTestResults;
use App\Area;
use App\CarrerasXArea;
use App\CarrerasXAreaTestResults;


class AreasTestController extends Controller
{
    //

    public function getAreas(Request $request){
        
        if(\Session::has("email")){
    		$email = \Session::get("email");
    	} else {
    		$email = "artumarc.test@gmail.com";
    	}

    	//Obtiene todas las aptitudes del test
    	$Aptitudes = AptitudesTestResults::where("userId",$email)->where("testId",1)->first();
    	$Intereses = AptitudesTestResults::where("userId",$email)->where("testId",2)->first();

    	$Aptitud1 = $Aptitudes->clasificacionId1;
    	$Aptitud2 = $Aptitudes->clasificacionId2;
    	$Aptitud3 = $Aptitudes->clasificacionId3;

    	$Interes1 = $Intereses->clasificacionId1;
    	$Interes2 = $Intereses->clasificacionId2;
    	$Interes3 = $Intereses->clasificacionId3;

    	//Obtiene las tres áreas
    	$AreasTestRepository = new AreasTestRepository();
    	$Areas = $AreasTestRepository->getArea($Aptitud1,$Aptitud2,$Aptitud3,$Interes1,$Interes2,$Interes3);

    	$response = ['res' => 'ok', 'Areas' => $Areas];
        
        return response()->json($response);
    }

    public function carrerasXAreaTestService(Request $request){

        $email = \Session::get("email");
        
        $idArea = $request->input('area');

        $Area = Area::find($idArea);

        $carreras = \DB::table('carreras_x_areas')
            ->join('carreras', 'carreras_x_areas.idCarrera', '=', 'carreras.id')
            ->where('carreras_x_areas.idArea', $idArea)
            ->select('carreras.*')
            ->get();

        $response = ['Area' => $Area,'carreras' => $carreras];

        return response()->json($response);
    }

    public function areasTestView(Request $request){

        $email = \Session::get("email");
                    
        $CruceAreaTestResults = CruceAreaTestResults::where("idUsuario",$email)->first();

        $goTocarrerasIndex = false;

        $next = $request->input('next');
        if($next==1){
            $idArea = $CruceAreaTestResults->idArea1;
            $test = 1;
            $next = 2;
            if($idArea==-1){
                $idArea = $CruceAreaTestResults->idArea2;
                $test = 2;
                $next = 3;
            }
            if($idArea==-1){
                $idArea = $CruceAreaTestResults->idArea3;
                $test = 3;
                $next = "-1";
            }
        } else if($next==2){
            $idArea = $CruceAreaTestResults->idArea2;
            $test = 2;
            $next = 3;
            if($idArea==-1){
                $idArea = $CruceAreaTestResults->idArea3;
                $test = 3;
                $next = 3;
            }
        } else if($next==3){
            $idArea = $CruceAreaTestResults->idArea3;
            $test = 3;
            $next = "-1";
            if($idArea==-1){
                $goTocarrerasIndex = true;
            }
        }

        $Area = Area::find($idArea);

        $carreras = \DB::table('carreras_x_areas')
            ->join('carreras', 'carreras_x_areas.idCarrera', '=', 'carreras.id')
            ->where('carreras_x_areas.idArea', $idArea)
            ->select('carreras.*')
            ->get();

        $CarrerasXAreaTestResults = CarrerasXAreaTestResults::where("idUsuario",$email)->first();

        $carrerasArray = array();
        foreach ($carreras as $Carrera){
            $carr = array();
            $carr["id"] = $Carrera->id;
            $carr["name"] = $Carrera->name;

            $selected = "";
            if($CarrerasXAreaTestResults){
                if($test==1){
                    if($CarrerasXAreaTestResults->idCarrera1==$Carrera->id || $CarrerasXAreaTestResults->idCarrera2==$Carrera->id || $CarrerasXAreaTestResults->idCarrera3==$Carrera->id){
                        $selected = "dot";
                    }
                } 
                else if($test==2){
                    if($CarrerasXAreaTestResults->idCarrera4==$Carrera->id || $CarrerasXAreaTestResults->idCarrera5==$Carrera->id || $CarrerasXAreaTestResults->idCarrera6==$Carrera->id){
                        $selected = "dot";
                    }
                }
                else if($test==3){
                    if($CarrerasXAreaTestResults->idCarrera7==$Carrera->id || $CarrerasXAreaTestResults->idCarrera8==$Carrera->id || $CarrerasXAreaTestResults->idCarrera9==$Carrera->id){
                        $selected = "dot";
                    }
                }   
            }

            $carr["selected"] = $selected;

            array_push($carrerasArray, $carr);
        }

        $response = ['Area' => $Area,'carreras' => $carrerasArray,'next' => $next,'test' => $test];

        if(!$goTocarrerasIndex){
            return view("areas_tests")->with('response', $response);
        } else {
            return redirect("carreras_index");
        }
    }

    public function areasTestRepositoryGetAreaTest(Request $request){

        if(\Session::has("email")){
            $email = \Session::get("email");
        } else {
            $email = "artumarc.test@gmail.com";
        }

        //Obtiene todas las aptitudes e intereses del test
        $Aptitudes = AptitudesTestResults::where("userId",$email)->where("testId",1)->first();
        $Intereses = AptitudesTestResults::where("userId",$email)->where("testId",2)->first();
        $Aptitud1 = $Aptitudes->clasificacionId1;
        $Aptitud2 = $Aptitudes->clasificacionId2;
        $Aptitud3 = $Aptitudes->clasificacionId3;
        $Interes1 = $Intereses->clasificacionId1;
        $Interes2 = $Intereses->clasificacionId2;
        $Interes3 = $Intereses->clasificacionId3;

        //Obtiene las tres áreas
        $AreasTestRepository = new AreasTestRepository();
        $Areas = $AreasTestRepository->getArea($Aptitud1,$Aptitud2,$Aptitud3,$Interes1,$Interes2,$Interes3);

        if(isset($Areas["Area1"])){
            $idArea1 = $Areas["Area1"]->id;
        } else {
            $idArea1 = -1;
        }
        if(isset($Areas["Area2"])){
            $idArea2 = $Areas["Area2"]->id;
        } else {
            $idArea2 = -1;
        }
        if(isset($Areas["Area3"])){
            $idArea3 = $Areas["Area3"]->id;
        } else {
            $idArea3 = -1;
        }

        //Guarda en la base de datos
        $CruceAreaTestResults = CruceAreaTestResults::where("idUsuario",$email)->first();
        if($CruceAreaTestResults){
            $CruceAreaTestResults->idUsuario = $email;
            $CruceAreaTestResults->idArea1 = $idArea1;
            $CruceAreaTestResults->idArea2 = $idArea2;
            $CruceAreaTestResults->idArea3 = $idArea3;
            $CruceAreaTestResults->update();
        } else {
            $CruceAreaTestResults = new CruceAreaTestResults();
            $CruceAreaTestResults->idUsuario = $email;
            $CruceAreaTestResults->idArea1 = $idArea1;
            $CruceAreaTestResults->idArea2 = $idArea2;
            $CruceAreaTestResults->idArea3 = $idArea3;
            $CruceAreaTestResults->save();
        }

        $response = ['res' => 'ok', 'Areas' => $Areas];
        
        return response()->json($response);
    }

    public function areasResultsView(Request $request){

    	if(\Session::has("email")){
    		$email = \Session::get("email");
    	} else {
    		$email = "artumarc.test@gmail.com";
    	}

    	//Obtiene todas las aptitudes e intereses del test
    	$Aptitudes = AptitudesTestResults::where("userId",$email)->where("testId",1)->first();
    	$Intereses = AptitudesTestResults::where("userId",$email)->where("testId",2)->first();
    	$Aptitud1 = $Aptitudes->clasificacionId1;
    	$Aptitud2 = $Aptitudes->clasificacionId2;
    	$Aptitud3 = $Aptitudes->clasificacionId3;
    	$Interes1 = $Intereses->clasificacionId1;
    	$Interes2 = $Intereses->clasificacionId2;
    	$Interes3 = $Intereses->clasificacionId3;

    	//Obtiene las tres áreas
    	$AreasTestRepository = new AreasTestRepository();
    	$Areas = $AreasTestRepository->getArea($Aptitud1,$Aptitud2,$Aptitud3,$Interes1,$Interes2,$Interes3);

        if(isset($Areas["Area1"])){
            $idArea1 = $Areas["Area1"]->id;
        } else {
            $idArea1 = -1;
        }
        if(isset($Areas["Area2"])){
            $idArea2 = $Areas["Area2"]->id;
        } else {
            $idArea2 = -1;
        }
        if(isset($Areas["Area3"])){
            $idArea3 = $Areas["Area3"]->id;
        } else {
            $idArea3 = -1;
        }

        //Guarda en la base de datos
        $CruceAreaTestResults = CruceAreaTestResults::where("idUsuario",$email)->first();
        if($CruceAreaTestResults){
            $CruceAreaTestResults->idUsuario = $email;
            $CruceAreaTestResults->idArea1 = $idArea1;
            $CruceAreaTestResults->idArea2 = $idArea2;
            $CruceAreaTestResults->idArea3 = $idArea3;
            $CruceAreaTestResults->update();
        } else {
            $CruceAreaTestResults = new CruceAreaTestResults();
            $CruceAreaTestResults->idUsuario = $email;
            $CruceAreaTestResults->idArea1 = $idArea1;
            $CruceAreaTestResults->idArea2 = $idArea2;
            $CruceAreaTestResults->idArea3 = $idArea3;
            $CruceAreaTestResults->save();
        }

        $response = ['Areas' => $Areas];

		return view("areas_index")->with('response', $response);
    }

    public function getCruceAreasTestService(Request $request){
        
        $email = "artumarc.test@gmail.com";

        $Aptitud1 = $request->input('aptitudId1');
        $Aptitud2 = $request->input('aptitudId2');
        $Aptitud3 = $request->input('aptitudId3');

        $Interes1 = $request->input('interesId1');
        $Interes2 = $request->input('interesId2');
        $Interes3 = $request->input('interesId3');

        //Obtiene las tres áreas
        $AreasTestRepository = new AreasTestRepository();
        $Areas = $AreasTestRepository->getArea($Aptitud1,$Aptitud2,$Aptitud3,$Interes1,$Interes2,$Interes3);

        //Guarda en la base de datos
        $CruceAreaTestResults = new CruceAreaTestResults();
        $CruceAreaTestResults->idUsuario = $email;
        $CruceAreaTestResults->idArea1 = $Areas["Area1"]->id;
        $CruceAreaTestResults->idArea2 = $Areas["Area2"]->id;
        $CruceAreaTestResults->idArea3 = $Areas["Area3"]->id;

        $response = ['res' => 'ok', 'CruceAreaTestResults' => $CruceAreaTestResults];
        
        return response()->json($response);
    }

    public function sendTest(Request $request){
        
        $questions = $request->all();
        
        if(\Session::has("email")){
            $email = \Session::get("email");
        } else {
            $email = "artumarc.test@gmail.com";
        }

        $test = $request->input('test');
        $idArea = $request->input('idArea');
        $idCarrera1 = $request->input('idCarrera1');
        $idCarrera2 = $request->input('idCarrera2');
        $idCarrera3 = $request->input('idCarrera3');

        $CarrerasXAreaTestResults = CarrerasXAreaTestResults::where("idUsuario",$email)->first();
        if($CarrerasXAreaTestResults){
            if($test==1){
                $CarrerasXAreaTestResults->idArea1 = $idArea;
                $CarrerasXAreaTestResults->idCarrera1 = $idCarrera1;
                $CarrerasXAreaTestResults->idCarrera2 = $idCarrera2;
                $CarrerasXAreaTestResults->idCarrera3 = $idCarrera3;
            } else if($test==2){
                $CarrerasXAreaTestResults->idArea2 = $idArea;
                $CarrerasXAreaTestResults->idCarrera4 = $idCarrera1;
                $CarrerasXAreaTestResults->idCarrera5 = $idCarrera2;
                $CarrerasXAreaTestResults->idCarrera6 = $idCarrera3;
            } else if($test==3){
                $CarrerasXAreaTestResults->idArea3 = $idArea;
                $CarrerasXAreaTestResults->idCarrera7 = $idCarrera1;
                $CarrerasXAreaTestResults->idCarrera8 = $idCarrera2;
                $CarrerasXAreaTestResults->idCarrera9 = $idCarrera3;
            }

            $CarrerasXAreaTestResults->idUsuario = $email;
            $CarrerasXAreaTestResults->update();

        } else {

            $CarrerasXAreaTestResults = new CarrerasXAreaTestResults();
            $CarrerasXAreaTestResults->idUsuario = $email;

            if($test==1){
                $CarrerasXAreaTestResults->idArea1 = $idArea;
                $CarrerasXAreaTestResults->idCarrera1 = $idCarrera1;
                $CarrerasXAreaTestResults->idCarrera2 = $idCarrera2;
                $CarrerasXAreaTestResults->idCarrera3 = $idCarrera3;
            } else if($test==2){
                $CarrerasXAreaTestResults->idArea2 = $idArea;
                $CarrerasXAreaTestResults->idCarrera4 = $idCarrera1;
                $CarrerasXAreaTestResults->idCarrera5 = $idCarrera2;
                $CarrerasXAreaTestResults->idCarrera6 = $idCarrera3;
            } else if($test==3){
                $CarrerasXAreaTestResults->idArea3 = $idArea;
                $CarrerasXAreaTestResults->idCarrera7 = $idCarrera1;
                $CarrerasXAreaTestResults->idCarrera8 = $idCarrera2;
                $CarrerasXAreaTestResults->idCarrera9 = $idCarrera3;
            }

            $CarrerasXAreaTestResults->save();
        }

        //Genera el resultado

        $response = ['res' => 'ok'];
        
        return response()->json($response);
    }
}
