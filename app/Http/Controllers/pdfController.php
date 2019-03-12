<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\graduates;
use DB;
class pdfController extends Controller
{
    public function Generarpdf(Request $value)
    {
      $periodo= $value->periodo;
      $Egresados= DB::table('graduates')
      ->join('polls','polls.graduate_id', '=', 'graduates.id')
      ->select('graduates.name','graduates.last_name','graduates.address','graduates.phone','polls.question_3',
      'polls.question_9', 'polls.question_5')
      ->where('graduates.id_egreso','=', $value->value)
      ->get();
      $pdf = \PDF::loadView('reportes.reporte',compact('Egresados'),compact('periodo'));
        return $pdf->download('reporte.pdf');

    }
}
