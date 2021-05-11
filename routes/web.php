<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about_test', function () {
    return view('about_test');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/api/intereses/getall', 'InteresesTestController@getAll');

Route::get('/api/areas/areas_test_repository_get_area_test', 'AreasTestController@areasTestRepositoryGetAreaTest');

Route::get('/api/aptitudes/getall', 'AptitudesTestController@getAll');
Route::post('/api/aptitudes/send_test', 'AptitudesTestController@sendTest');
Route::post('/api/intereses/send_test', 'InteresesTestController@sendTest');
Route::post('/api/testtres/send_test', 'TestTresController@sendTest');
Route::post('/api/testtres/send_test_fase_2', 'TestTresController@sendTestFase2');

Route::post('/api/areas/get_areas', 'AreasTestController@getAreas');
Route::post('/api/areas/send_test', 'AreasTestController@sendTest');
Route::post('/api/carreras/carreras_test_1_test_service', 'CarrerasController@carrerasTest1TestService');
Route::post('/api/carreras/update_results_test_four', 'CarrerasController@updateResultsTestFour');

Route::get('/api/files/download_results_pdf', 'FilesController@downloadResultsPDF');
Route::get('/results_report_index', 'ResultsController@resultsReportIndexView');

Route::get('/api/carreras/carreras_x_area_test_service', 'AreasTestController@carrerasXAreaTestService');


Route::post('/api/carreras/send_test_carreras_results', 'CarrerasController@sendTestCarrerasResults');

Route::post('/api/areas/get_cruce_areas_test_service', 'AreasTestController@getCruceAreasTestService');

Route::middleware(['session'])->group(function () {
    
    Route::get('/welcome', function () {
        return view('welcome');
    });
    Route::get('/continue_test', function () {
        return view('continue_test');
    });
    Route::get('/aptitudes_index', function () {
        return view('aptitudes_index');
    });

    Route::get('/premium_results_report_index', 'ResultsController@premiumResultsReportIndexView');

    Route::get('/aptitudes_test', 'AptitudesTestController@aptitudesTestView');
    Route::get('/aptitudes_results', 'AptitudesTestController@aptitudesResultsView');
    Route::get('/intereses_test', 'InteresesTestController@interesesTestView');
    Route::get('/areas_index', 'AreasTestController@areasResultsView');
    Route::get('/intereses_index', function () {
        return view('intereses_index');
    });
    Route::get('/intereses_results', 'InteresesTestController@interesesResultsView');
    Route::get('/areas_tests', 'AreasTestController@areasTestView');
    Route::get('/carreras_test_1', 'CarrerasController@carrerasTest1View');
    Route::get('/carreras_test_2', 'CarrerasController@carrerasTest2View');
    Route::get('/carreras_test_instrumentales', 'CarrerasController@carrerasTestInstrumentalesView');
    Route::get('/areas_test_sociales', function () {
        return view('areas_test_sociales');
    });
    Route::get('/carreras_familias', 'CarrerasController@carrerasFamiliasView');

    Route::get('/areas_test_quimicas', function () {
        return view('areas_test_quimicas');
    });
    Route::get('/areas_test_quimicas', function () {
        return view('areas_test_quimicas');
    });
    Route::get('/carreras_index', function () {
        return view('carreras_index');
    });
    Route::get('/carreras_test_recursos_financieros', function () {
        return view('carreras_test_recursos_financieros');
    });
    Route::get('/carreras_test_recursos_humanos', function () {
        return view('carreras_test_recursos_humanos');
    });

    Route::get('/carreras_results_carreras', 'CarrerasController@carrerasResultsCarrerasView');

    Route::get('/premium_test_objetivos', function () {
        return view('premium_test_objetivos');
    });
    Route::get('/premium_test_importancia', function () {
        return view('premium_test_importancia');
    });
    Route::get('/premium_test_campo_aplicacion', function () {
        return view('premium_test_campo_aplicacion');
    });
    Route::get('/premium_test_materias', function () {
        return view('premium_test_materias');
    });
    Route::get('/premium_test_aptitudes', function () {
        return view('premium_test_aptitudes');
    });
    Route::get('/premium_test_intereses', function () {
        return view('premium_test_intereses');
    });
    Route::get('/premium_test_ambiente', function () {
        return view('premium_test_ambiente');
    });
    Route::get('/premium_test_personalidad', function () {
        return view('premium_test_personalidad');
    });
    Route::get('/premium_results_report_aptitudes_habilidades', function () {
        return view('premium_results_report_aptitudes_habilidades');
    });
    Route::get('/premium_results_report_intereses_profesionales', function () {
        return view('premium_results_report_intereses_profesionales');
    });
    Route::get('/premium_results_report_areas_profesionales', function () {
        return view('premium_results_report_areas_profesionales');
    });
    Route::get('/premium_results_report_carreras_ideales', function () {
        return view('premium_results_report_carreras_ideales');
    });
    Route::get('/premium_results_report_carreras_ideales_2', function () {
        return view('premium_results_report_carreras_ideales_2');
    });
    Route::get('/premium_results_report_final', function () {
        return view('premium_results_report_final');
    });
    Route::get('/carreras_test_ordena', function () {
        return view('carreras_test_ordena');
    });
});

Route::get('/loginView', 'LoginController@loginView');
Route::post('/login', 'LoginController@login');
Route::post('/closeLogin', 'LoginController@closeLogin');