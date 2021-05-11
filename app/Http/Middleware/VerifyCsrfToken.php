<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        "login",
        "closeLogin",
        "/api/aptitudes/getall",
        "/api/aptitudes/send_test",
        "/api/intereses/send_test",
        "/api/areas/get_areas",
        "premium_results_report_index",
        "/api/carreras/carreras_x_area_test_service",
        "/api/areas/send_test",
        "/api/carreras/carreras_test_1_test_service",
        "/api/testtres/send_test",
        "/api/testtres/send_test_fase_2",
        "/api/areas/get_cruce_areas_test_service",
        "/api/carreras/send_test_carreras_results",
        "/api/areas/areas_test_repository_get_area_test",
        "/api/carreras/update_results_test_four"];
}
