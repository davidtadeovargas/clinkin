<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestTresResults;
use App\TestTresPonderationsResults;
use App\Area;
use App\CarrerasXFamilia;
use App\CarrerasResults;
use App\CarrerasResultsAll;
use App\CarrerasXAreaTestResults;
use App\Carrera;
use App\Subfamilia;
use App\TestFourResult;
use App\Repositories\CarrerasRepository;

class CarrerasController extends Controller
{
    //

	public function carrerasTest1TestService(Request $request){

		if(\Session::has("email")){
    		$email = \Session::get("email");
    	} else {
    		$email = "artumarc.test@gmail.com";
    	}

        $next = $request->input('next');
        if($next==1){
            $test = 1;
            $next = 2;
        }
        else if($next==2){
            $test = 2;
            $next = 3;
        }
        else if($next==3){
            $test = 3;
            $next = 4;
        }
        else if($next==4){
            $test = 4;
            $next = 5;
        }
        else if($next==5){
            $test = 5;
            $next = 6;
        }
        else if($next==6){
            $test = 6;
            $next = 7;
        }
        else if($next==7){
            $test = 7;
            $next = -1;
        }
        else{
            $test = 1;
            $next = 2;
        }

        $preguntas = \DB::table('preguntas_x_areas')
            ->where('preguntas_x_areas.test', $test)
            ->select('preguntas_x_areas.*')
            ->get();

        $preguntasArray = array();
        foreach ($preguntas as $Pregunta){
            $carr = array();
            $carr["id"] = $Pregunta->id;
            $carr["pregunta"] = $Pregunta->pregunta;
            $carr["test"] = $Pregunta->test;
            $carr["idArea"] = $Pregunta->idArea;

            $TestTresResults = TestTresResults::where("userId",$email)->where("fase",1)->where("pregunta",$Pregunta->id)->first();
            $selected = ""; //$selected = "dot";
            if($TestTresResults){
                if($TestTresResults->valor==0){
                    $carr["selected"] = 1;
                }
                else if($TestTresResults->valor==1){
                    $carr["selected"] = 2;
                }
                else if($TestTresResults->valor==3){
                    $carr["selected"] = 3;
                }
                else if($TestTresResults->valor==4){
                    $carr["selected"] = 4;
                }
                else if($TestTresResults->valor==5){
                    $carr["selected"] = 5;
                }
                else if($TestTresResults->valor==6){
                    $carr["selected"] = 6;
                }      
            }

            array_push($preguntasArray, $carr);
        }

        $selectedAreas = [];
        if($next==-1){

            $selectedAreas = \DB::select("SELECT idArea, SUM(valor) as val FROM test_tres_results as t1 
                        LEFT OUTER JOIN  preguntas_x_areas as t2 ON t2.id = t1.pregunta
                        WHERE fase = 1 GROUP BY idArea ORDER BY val DESC");

            $TestTresPonderationsResults = TestTresPonderationsResults::where("userId",$email)->first();
            if($TestTresPonderationsResults){
                $TestTresPonderationsResults->areaId1 = $selectedAreas[0]->idArea;
                $TestTresPonderationsResults->areaId2 = $selectedAreas[1]->idArea;
                $TestTresPonderationsResults->areaId3 = $selectedAreas[2]->idArea;
                $TestTresPonderationsResults->familiaId1 = -1;
                $TestTresPonderationsResults->familiaId2 = -1;
                $TestTresPonderationsResults->familiaId3 = -1;
                $TestTresPonderationsResults->update();
            } else {
                $TestTresPonderationsResults = new TestTresPonderationsResults();
                $TestTresPonderationsResults->userId = $email;
                $TestTresPonderationsResults->areaId1 = $selectedAreas[0]->idArea;
                $TestTresPonderationsResults->areaId2 = $selectedAreas[1]->idArea;
                $TestTresPonderationsResults->areaId3 = $selectedAreas[2]->idArea;
                $TestTresPonderationsResults->familiaId1 = -1;
                $TestTresPonderationsResults->familiaId2 = -1;
                $TestTresPonderationsResults->familiaId3 = -1;
                $TestTresPonderationsResults->save();
            }
            
        }

        $response = ['preguntas' => $preguntasArray,'next' => $next,'test' => $test,'selectedAreas' => $selectedAreas];

        return response()->json($response);
    }

    public function updateResultsTestFour(Request $request){

        if(\Session::has("email")){
            $email = \Session::get("email");
        } else {
            $email = "artumarc.test@gmail.com";
        }

        $carreras = $request->input("carreras");
        
        TestFourResult::where("idUsuario",$email)->delete();

        foreach ($carreras as $Carrera){
            $TestFourResult = new TestFourResult();
            $TestFourResult->idUsuario = $email;
            $TestFourResult->idCarrera = $Carrera["carreraId"];
            $TestFourResult->save();
        }
            
        $response = ['res' => 'ok'];

        return response()->json($response);
    }

    public function sendTestCarrerasResults(Request $request){

        if(\Session::has("email")){
            $email = \Session::get("email");
        } else {
            $email = "artumarc.test@gmail.com";
        }

        $questions = $request->input("preguntas");
        $areaId = $request->input("areaId");

        CarrerasResults::where("userId",$email)->where("areaId",$areaId)->delete();

        foreach ($questions as $Question){
            $CarrerasResults = new CarrerasResults();
            $CarrerasResults->userId = $email;
            $CarrerasResults->areaId = $areaId;
            $CarrerasResults->carreraId = $Question["carreraId"];
            $CarrerasResults->save();
        }
            
        $response = ['res' => 'ok'];

        return response()->json($response);
    }

    public function carrerasResultsCarrerasView(Request $request){

        $email = \Session::get("email");
                    
        $carreras = \DB::select("SELECT * FROM carreras_x_area_test_results 
                                LEFT OUTER JOIN carreras_results ON carreras_x_area_test_results.idUsuario = carreras_results.userId
                                LEFT OUTER JOIN carreras ON carreras.id = carreras_results.carreraId
                                WHERE carreras_x_area_test_results.idUsuario = '".$email."' AND carreras_results.carreraId IN(carreras_x_area_test_results.idCarrera1,carreras_x_area_test_results.idCarrera2,carreras_x_area_test_results.idCarrera3,carreras_x_area_test_results.idCarrera4,carreras_x_area_test_results.idCarrera5,carreras_x_area_test_results.idCarrera6,carreras_x_area_test_results.idCarrera7,carreras_x_area_test_results.idCarrera8,carreras_x_area_test_results.idCarrera9);");

        $carrerasArray = array();

        if(count($carreras)==0){

            $CarrerasRepository = new CarrerasRepository();

            $carreras = $CarrerasRepository->getNotRepeatedFromCarrerasResults($email);
        }

        foreach ($carreras as $Carrera){

            $carr = array();
            $carr["id"] = $Carrera->id;
            $carr["name"] = $Carrera->name;
            $carr["image"] = "";

            $TestFourResult = TestFourResult::where("idUsuario",$email)->where("idCarrera",$Carrera->id)->first();
            if($TestFourResult){
                $carr["selected"] = "selected dot";
            } else {
                $carr["selected"] = "unselected";
            }

            array_push($carrerasArray, $carr);
        }
        
        $response = ['carreras' => $carrerasArray];
        
        return view("carreras_results_carreras")->with('response', $response);
    }


    public function carrerasTestInstrumentalesView(Request $request){

        $email = \Session::get("email");
                    
        $next = $request->input('next');

        $TestTresPonderationsResults = TestTresPonderationsResults::where("userId",$email)->first();
        if($TestTresPonderationsResults){
            if($next==1){
                $progress = 30;
                $Familia = Area::find($TestTresPonderationsResults->familiaId1);
            } else if($next==2){
                $progress = 60;
                $Familia = Area::find($TestTresPonderationsResults->familiaId2);
            } else if($next==3){
                $progress = 90;
                $Familia = Area::find($TestTresPonderationsResults->familiaId3);
            }          
        }

        $carreras = \DB::table('carreras_x_subfamilias')
            ->join('subfamilias', 'subfamilias.idFamilia', '=', 'carreras_x_subfamilias.idSubfamilia')
            ->join('carreras', 'carreras.id', '=', 'carreras_x_subfamilias.idCarrera')
            ->where('subfamilias.idFamilia',$Familia->id)
            ->select('carreras.*')
            ->groupBy('subfamilias.idFamilia')
            ->groupBy('carreras.id')
            ->get();

        if($next==3){
            $next = -1;
        } else{
            $next += 1;
        }

        $carrerasArray = array();
        foreach ($carreras as $Carrera){

            $carr = array();
            $carr["id"] = $Carrera->id;
            $carr["name"] = $Carrera->name;

            $CarrerasResult = CarrerasResults::where("userId",$email)->where("areaId",$Familia->id)->where("carreraId",$Carrera->id)->first();
            if($CarrerasResult){
                $carr["selected"] = "selected dot";
            } else {
                $carr["selected"] = "unselected";
            }

            array_push($carrerasArray, $carr);
        }

        $response = ['Familia' => $Familia,'next' => $next,'progress' => $progress,'carreras' => $carrerasArray];
        
        return view("carreras_test_instrumentales")->with('response', $response);
    }

	public function carrerasTest1View(Request $request){

        $email = \Session::get("email");
                    
        $next = $request->input('next');
        if($next==1){
            $test = 1;
            $next = 2;
            $progress = 5;
        }
        else if($next==2){
            $test = 2;
            $next = 3;
            $progress = 10;
        }
        else if($next==3){
            $test = 3;
            $next = 4;
            $progress = 15;
        }
        else if($next==4){
            $test = 4;
            $next = 5;
            $progress = 20;
        }
        else if($next==5){
            $test = 5;
            $next = 6;
            $progress = 25;
        }
        else if($next==6){
            $test = 6;
            $next = 7;
            $progress = 30;
        }
        else if($next==7){
            $test = 7;
            $next = -1;
            $progress = 35;
        }
        else{
            $test = 1;
            $next = 2;
        }

        $preguntas = \DB::table('preguntas_x_areas')
            ->where('preguntas_x_areas.test', $test)
            ->select('preguntas_x_areas.*')
            ->inRandomOrder()
            ->get();

        $preguntasArray = array();
        foreach ($preguntas as $Pregunta){
            $carr = array();
            $carr["id"] = $Pregunta->id;
            $carr["pregunta"] = $Pregunta->pregunta;
            $carr["test"] = $Pregunta->test;
            $carr["idArea"] = $Pregunta->idArea;

            $TestTresResults = TestTresResults::where("userId",$email)->where("fase",1)->where("pregunta",$Pregunta->id)->first();
            $selected = ""; //$selected = "dot";
            if($TestTresResults){
                if($TestTresResults->valor==0){
                    $carr["selected"] = 1;
                }
                else if($TestTresResults->valor==1){
                    $carr["selected"] = 2;
                }
                else if($TestTresResults->valor==3){
                    $carr["selected"] = 3;
                }
                else if($TestTresResults->valor==4){
                    $carr["selected"] = 4;
                }
                else if($TestTresResults->valor==5){
                    $carr["selected"] = 5;
                }
                else if($TestTresResults->valor==6){
                    $carr["selected"] = 6;
                }      
            }

            array_push($preguntasArray, $carr);
        }

        $selectedAreas = [];
        $nextIdArea = "";
        if($next==-1){

            $selectedAreas = \DB::select("SELECT idArea, SUM(valor) as val FROM test_tres_results as t1 
                        INNER JOIN  preguntas_x_areas as t2 ON t2.id = t1.pregunta
                        WHERE fase = 1 GROUP BY idArea ORDER BY val DESC");

            $TestTresPonderationsResults = TestTresPonderationsResults::where("userId",$email)->first();
            if($TestTresPonderationsResults){
                $TestTresPonderationsResults->areaId1 = $selectedAreas[0]->idArea;
                $TestTresPonderationsResults->areaId2 = $selectedAreas[1]->idArea;
                $TestTresPonderationsResults->areaId3 = $selectedAreas[2]->idArea;
                $TestTresPonderationsResults->familiaId1 = -1;
                $TestTresPonderationsResults->familiaId2 = -1;
                $TestTresPonderationsResults->familiaId3 = -1;
                $TestTresPonderationsResults->update();
            } else {
                $TestTresPonderationsResults = new TestTresPonderationsResults();
                $TestTresPonderationsResults->userId = $email;
                $TestTresPonderationsResults->areaId1 = $selectedAreas[0]->idArea;
                $TestTresPonderationsResults->areaId2 = $selectedAreas[1]->idArea;
                $TestTresPonderationsResults->areaId3 = $selectedAreas[2]->idArea;
                $TestTresPonderationsResults->familiaId1 = -1;
                $TestTresPonderationsResults->familiaId2 = -1;
                $TestTresPonderationsResults->familiaId3 = -1;
                $TestTresPonderationsResults->save();
            }

            $nextIdArea = $TestTresPonderationsResults->areaId1;
        }

        $response = ['preguntas' => $preguntasArray,'next' => $next,'test' => $test,'selectedAreas' => $selectedAreas,'nextIdArea' => $nextIdArea,'progress' => $progress];
        
        return view("carreras_test_1")->with('response', $response);
    }


    public function carrerasTest2View(Request $request){

        $email = \Session::get("email");
        
        $areaIndex = $request->input('area');
        $bloque = $request->input('bloque');
        $progress = $request->input('progress');

        $TestTresPonderationsResults = TestTresPonderationsResults::where("userId",$email)->first();

        $end = false;
        if($areaIndex==0){
            $areaId = $TestTresPonderationsResults->areaId1;
        } else if($areaIndex==1){
            $areaId = $TestTresPonderationsResults->areaId2;
        } else if($areaIndex==2){
            $areaId = $TestTresPonderationsResults->areaId3;
            $end = true;
        } 

        $bloqueCount = \DB::select("select count(bloque) totalCount from (select bloque from preguntas_x_carrera_x_areas where idArea = ".$areaId." group by bloque) as q1");

        $progress += 3.5;

        $preguntas = \DB::table('preguntas_x_carrera_x_areas')
            ->where('preguntas_x_carrera_x_areas.idArea', $areaId)
            ->where('preguntas_x_carrera_x_areas.bloque', $bloque)
            ->select('preguntas_x_carrera_x_areas.*')
            ->get();

        if($bloque==$bloqueCount[0]->totalCount){
            $bloque = 1;
            $areaIndex += 1;
        } else {
            $bloque += 1; 
        }

        $preguntasArray = array();
        foreach ($preguntas as $Pregunta){
           
            $carr = array();
            $carr["id"] = $Pregunta->id;
            $carr["idFamilia"] = $Pregunta->idFamilia;
            $carr["idArea"] = $Pregunta->idArea;
            $carr["bloque"] = $Pregunta->bloque;
            $carr["pregunta"] = $Pregunta->pregunta;

            $carr["selected"] = "unselected";

            $TestTresResults = TestTresResults::where("userId",$email)->where("fase",2)->where("pregunta",$Pregunta->id)->first();
            $selected = ""; //$selected = "dot";
            if($TestTresResults){
                $carr["selected"] = $TestTresResults->valor;
            } else {
                $carr["selected"] = -1;
            }

            array_push($preguntasArray, $carr);
        }

        if($end){

            $selectedAreas = \DB::select("SELECT idFamilia, SUM(valor) as val FROM test_tres_results as t1 
                        LEFT OUTER JOIN  preguntas_x_carrera_x_areas as t2 ON t2.id = t1.pregunta
                        WHERE fase = 2 GROUP BY idArea,idFamilia ORDER BY val DESC");

            $TestTresPonderationsResults->familiaId1 = $selectedAreas[0]->idFamilia;
            $TestTresPonderationsResults->familiaId2 = $selectedAreas[1]->idFamilia;
            $TestTresPonderationsResults->familiaId3 = isset($selectedAreas[2]) ? $selectedAreas[2]->idFamilia : $selectedAreas[1]->idFamilia;
            $TestTresPonderationsResults->update();
        }

        $response = ['preguntas' => $preguntasArray,'area' => $areaIndex,'bloque' => $bloque,'end' => $end,'bloqueCount' => $bloqueCount[0]->totalCount,'progress' => $progress];
        
        return view("carreras_test_2")->with('response', $response);
    }

    public function carrerasFamiliasView(Request $request){

        $email = \Session::get("email");
        
        $TestTresPonderationsResults = TestTresPonderationsResults::where("userId",$email)->first();

        $familiaId1 = $TestTresPonderationsResults->familiaId1;
        $familiaId2 = $TestTresPonderationsResults->familiaId2;
        $familiaId3 = $TestTresPonderationsResults->familiaId3; 

        $Familia1 = Subfamilia::find($familiaId1);
        $Familia2 = Subfamilia::find($familiaId2);
        $Familia3 = Subfamilia::find($familiaId3);
        
        $response = ['familia1' => $Familia1,'familia2' => $Familia2,'familia3' => $Familia3];
        
        return view("carreras_familias")->with('response', $response);
    }
}
