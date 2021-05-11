<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\InteresesTestRepository;
use App\Pregunta;
use App\Clasificaciones;
use App\AptitudesTest;
use App\AptitudesTestResults;

class InteresesTestController extends Controller
{
    //

	public function getAll(Request $request){
        
    	$InteresesTestRepository = new InteresesTestRepository();
    	$preguntas = $InteresesTestRepository->getAllQuestions();

        $response = ['res' => 'ok', 'preguntas' => $preguntas];
        
        return response()->json($response);
    }

    public function interesesTestView(Request $request){

    	$InteresesTestRepository = new InteresesTestRepository();
    	$preguntas = $InteresesTestRepository->getAllQuestions();

    	return view("intereses_test")->with('preguntas', $preguntas);
    }

    public function sendTest(Request $request){
        
        $questions = $request->all();
    	
    	if(\Session::has("email")){
    		$email = \Session::get("email");
    	} else {
    		$email = "artumarc.test@gmail.com";
    	}

    	$valorTotal = 0;

    	//Separa en un array de llave valor las clasificaciones y su valor en base a las
    	//respuestas del usuario
    	$clasifications = array();
    	foreach ($questions as $Question){

    		$Pregunta = Pregunta::find($Question["idPregunta"]);

    		//Guarda en la base de datos las preguntas y respuestas
    		$AptitudesTest = AptitudesTest::where("idUsuario",$email)->where("testId",2)->where("question",$Question["idPregunta"])->first();
    		if($AptitudesTest){
    			$AptitudesTest->value = $Question["valor"];
    			$AptitudesTest->update();
    		} else {
    			$AptitudesTest = new AptitudesTest();
    			$AptitudesTest->idUsuario = $email;
    			$AptitudesTest->testId = 2;
    			$AptitudesTest->question = $Question["idPregunta"];
    			$AptitudesTest->value = $Question["valor"];
    			$AptitudesTest->save();
    		}	

    		$valorTotal += $Question["valor"];
    		
    		if(!isset($clasifications[$Pregunta->idClasificacion])){
    			$clasifications[$Pregunta->idClasificacion] = $Question["valor"];
    		} else {
    			$value = $clasifications[$Pregunta->idClasificacion];
    			$value = $value + $Question["valor"];  
    		}
		}

		//Ordena del mayor al menor
		arsort($clasifications);
			
		$array = array_keys($clasifications);

		//Obtiene los mayores
		$aptitudFirst = $array[0];
		$aptitudSecond = $array[1];
		$aptitudThird = $array[2];

		//Obtiene la clasificación de la aptitud
		$Clasificacion1 = Clasificaciones::find($aptitudFirst);
		$Clasificacion2 = Clasificaciones::find($aptitudSecond);
		$Clasificacion3 = Clasificaciones::find($aptitudThird);
		
		//Guarda en la base de datos el resultado
		$AptitudesTestResults = AptitudesTestResults::where("userId",$email)->where("testId",2)->first();
		if($AptitudesTestResults){
			$AptitudesTestResults->clasificacionId1 = $Clasificacion1->id;
			$AptitudesTestResults->clasificacionId2 = $Clasificacion2->id;
			$AptitudesTestResults->clasificacionId3 = $Clasificacion3->id;
			$AptitudesTestResults->update();
		} else {
			$AptitudesTestResults = new AptitudesTestResults();
			$AptitudesTestResults->userId = $email;
			$AptitudesTestResults->testId = 2;
			$AptitudesTestResults->clasificacionId1 = $Clasificacion1->id;
			$AptitudesTestResults->clasificacionId2 = $Clasificacion2->id;
			$AptitudesTestResults->clasificacionId3 = $Clasificacion3->id;
			$AptitudesTestResults->save();
		}

		//Genera el resultado

		$response = ['res' => 'ok', 'valorTotal' => $valorTotal, 'aptitud1' => $Clasificacion1,'aptitud2' => $Clasificacion2,'aptitud3' => $Clasificacion3];
        
        return response()->json($response);
    }

    public function interesesResultsView(Request $request){

    	$AptitudesTestResults = AptitudesTestResults::where("userId",\Session::get("email"))->where("testId",2)->first();

    	//Obtiene la clasificación de la aptitud
        $Clasificacion1 = Clasificaciones::find($AptitudesTestResults->clasificacionId1);
        $Clasificacion2 = Clasificaciones::find($AptitudesTestResults->clasificacionId2);
        $Clasificacion3 = Clasificaciones::find($AptitudesTestResults->clasificacionId3);
        
        $response = ['aptitud1' => $Clasificacion1,'aptitud2' => $Clasificacion2,'aptitud3' => $Clasificacion3];

        return view("intereses_results")->with('response', $response);
    }
}
