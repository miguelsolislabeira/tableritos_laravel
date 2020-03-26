<?php

/**
 * Antonio J.Sánchez
 * curso 2019/20
 */

namespace App\Http\Controllers;

use App\Models\Nota ;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    //
    public function show()
    {
    	$idTab = $_GET['id'] ;
    	$notas = Nota::where('idTab', '=', $idTab)->get() ;
    	return view('notas.ver',['notas' => $notas]) ;
    }
}
