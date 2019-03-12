<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GraficasController extends Controller
{
    public function uno(Request $value)
    {

      $pdf = \PDF::loadView('reportes.Graficas',compact('data'));
              return $pdf->download('reporte.pdf');

    }
}
