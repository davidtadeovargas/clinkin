<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarrerasResults;
use App\CarrerasResultsAll;
use App\CarrerasXAreaTestResults;
use App\AptitudesTestResults;
use App\Clasificaciones;
use App\Area;

class ResultsController extends Controller
{
    //

    public function resultsReportIndexView(Request $request){
        return view("results_report_index");
    }

    public function premiumResultsReportIndexView(Request $request){

    	$email = \Session::get("email");
    	
        //Calcula el resultado de la última sección del test 3 en la que se 
        //obtienen todas las carreras afines
    	CarrerasResultsAll::where("userId",$email)->delete();
        $CarrerasXAreaTestResult = CarrerasXAreaTestResults::where("idUsuario",$email)->first();
        if($CarrerasXAreaTestResult){
            $CarrerasResults = CarrerasResults::where("userId",$email)->get();
            foreach ($CarrerasResults as $CarrerasResult){
                if(	$CarrerasResult->carreraId==$CarrerasXAreaTestResult->idCarrera1 ||
                	$CarrerasResult->carreraId==$CarrerasXAreaTestResult->idCarrera2 ||
                	$CarrerasResult->carreraId==$CarrerasXAreaTestResult->idCarrera3){
                	
                    $CarrerasResultsAll = new CarrerasResultsAll();
                    $CarrerasResultsAll->userId = $email;
                    $CarrerasResultsAll->carreraId = $CarrerasResult->carreraId;
                    $CarrerasResultsAll->save(); 
                }
            }
        }

        //Genera el json de respuesta para todos los resultados que se deben de mostrar
        $AptitudesTestResultsAptitudes = AptitudesTestResults::where("userId",$email)->where("testId",1)->first();
        $ClasificacionAptitud1 = Clasificaciones::find($AptitudesTestResultsAptitudes->clasificacionId1);
        $ClasificacionAptitud2 = Clasificaciones::find($AptitudesTestResultsAptitudes->clasificacionId2);
        $ClasificacionAptitud3 = Clasificaciones::find($AptitudesTestResultsAptitudes->clasificacionId3);
        $AptitudesTestResultsIntereses = AptitudesTestResults::where("userId",$email)->where("testId",2)->first();
        $ClasificacionInteres1 = Clasificaciones::find($AptitudesTestResultsIntereses->clasificacionId1);
        $ClasificacionInteres2 = Clasificaciones::find($AptitudesTestResultsIntereses->clasificacionId2);
        $ClasificacionInteres3 = Clasificaciones::find($AptitudesTestResultsIntereses->clasificacionId3);
        $Aptitudes = [];
        $Aptitudes["Aptitud1"] = $ClasificacionAptitud1;
        $Aptitudes["Aptitud2"] = $ClasificacionAptitud2;
        $Aptitudes["Aptitud3"] = $ClasificacionAptitud3;
        $Intereses = [];
        $Intereses["Interes1"] = $ClasificacionInteres1;
        $Intereses["Interes2"] = $ClasificacionInteres2;
        $Intereses["Interes3"] = $ClasificacionInteres3;
        //---------------------------------------
        $Areas = [];
        $CarrerasXAreaTestResult = CarrerasXAreaTestResults::where("idUsuario",$email)->first();
        $Area1 = Area::find($CarrerasXAreaTestResult->idArea1);
        $Areas["Area1"] = $Area1; 
        $Area2 = Area::find($CarrerasXAreaTestResult->idArea2);
        $Areas["Area2"] = $Area2;
        $Area3 = Area::find($CarrerasXAreaTestResult->idArea3);
        $Areas["Area3"] = $Area3;
        //---------------------------------------
        $carreras = \DB::table('carreras_results_alls')
            ->join('carreras', 'carreras_results_alls.carreraId', '=', 'carreras.id')
            ->where('carreras_results_alls.userId', $email)
            ->select('carreras.*')
            ->get();

        $response = ['aptitudes' => $Aptitudes,'intereses' => $Intereses,'areas' => $Areas,'carreras' => $carreras];

        return view("premium_results_report_index")->with('response', $response);
    }
}
