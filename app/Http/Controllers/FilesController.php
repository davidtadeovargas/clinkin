<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    //

    public function downloadResultsPDF(Request $request){
    	
    	$premium = false;
    	if(\Session::get('license')=="P"){
            $premium = true;
        }

        //PDF file is stored under project/public/download/info.pdf
	    /*$file= public_path(). "/pdfs/empty.pdf";

	    $headers = array(
	              'Content-Type: application/pdf',
	            );

	    return \Response::download($file, 'empty.pdf', $headers);*/

        $pdf = app('dompdf.wrapper');
        $pdf->loadView('results_report_index');

        return $pdf->stream('mi-archivo.pdf');
    }
}
