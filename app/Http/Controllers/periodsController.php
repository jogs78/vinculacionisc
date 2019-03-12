<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\periods;
class periodsController extends Controller
{
public function Mostrar()
{
$periodos= DB::table('periods')
->select('periods.description','periods.id')->get();
return view('reportes.Egresados',compact('periodos'));
}
}
