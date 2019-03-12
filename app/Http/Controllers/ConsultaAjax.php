<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\graduates;
use App\Pollscompany;
use DB;
class ConsultaAjax extends Controller
{


public function funcion(Request $value)
{

$Egresados= DB::table('graduates')
->join('polls','polls.graduate_id', '=', 'graduates.id')
->select('graduates.name','graduates.last_name','graduates.address','graduates.phone','polls.question_3','polls.question_9')
->where('graduates.id_egreso','=', $value->value)
->get();

return view('reportes.tabla',compact('Egresados'));

}
public function graficas1()
{
$q1a = DB::table('pollscompany')->where('question_4', 'Administracion')->count();
$q1b = DB::table('pollscompany')->where('question_4', 'Contaduria')->count();
$q1c = DB::table('pollscompany')->where('question_4', 'Derecho')->count();
$q1d = DB::table('pollscompany')->where('question_4', 'Ingenieria en Sistemas')->count();
$q1e = DB::table('pollscompany')->where('question_4', 'Ingenieria Industrial')->count();
$q1f = DB::table('pollscompany')->where('question_4', 'Ingenieria Mecanica')->count();
$q1g = DB::table('pollscompany')->where('question_4', 'Ingenieria en Electrica')->count();
$q1h = DB::table('pollscompany')->where('question_4', 'Ingenieria Electronica')->count();
$q1i = DB::table('pollscompany')->where('question_4', 'Ingenieria Quimica')->count();
$q1j = DB::table('pollscompany')->where('question_4', 'Ingenieria bioquimica')->count();
$q1k = DB::table('pollscompany')->where('question_4', 'Ingenieria en Gestion Empresarial')->count();
$q1l = DB::table('pollscompany')->where('question_4', 'Otras')->count();


$q2a = DB::table('pollscompany')->where('question_5', 'Excelente formacion')->count();
$q2b = DB::table('pollscompany')->where('question_5', 'Buena formacion')->count();
$q2c = DB::table('pollscompany')->where('question_5', 'Regular formacion')->count();
$q2d = DB::table('pollscompany')->where('question_5', 'Insatisfactoria formacion')->count();

$q3a = DB::table('pollscompany')->where('question_6', 'Excelente')->count();
$q3b = DB::table('pollscompany')->where('question_6', 'Bueno')->count();
$q3c = DB::table('pollscompany')->where('question_6', 'Regular')->count();
$q3d = DB::table('pollscompany')->where('question_6', 'Insatisfactorio')->count();


$q4a = DB::table('pollscompany')->where('question_7', 'Muy importante')->count();
$q4b = DB::table('pollscompany')->where('question_7', 'Medianamente importante')->count();
$q4c = DB::table('pollscompany')->where('question_7', 'Poco importante')->count();
$q4d = DB::table('pollscompany')->where('question_7', 'No es importante')->count();

$q5a = DB::table('pollscompany')->where('question_8', 'Muy importante')->count();
$q5b = DB::table('pollscompany')->where('question_8', 'Medianamente importante')->count();
$q5c = DB::table('pollscompany')->where('question_8', 'Poco importante')->count();
$q5d = DB::table('pollscompany')->where('question_8', 'No es importante')->count();


$q6a = DB::table('pollscompany')->where('question_9', 'Muy importante')->count();
$q6b = DB::table('pollscompany')->where('question_9', 'Medianamente importante')->count();
$q6c = DB::table('pollscompany')->where('question_9', 'Poco importante')->count();
$q6d = DB::table('pollscompany')->where('question_9', 'No es importante')->count();

$q7a = DB::table('pollscompany')->where('question_10', 'Que tienen previsto continuar contratando profesionistas del Tecnológico')->count();
$q7b = DB::table('pollscompany')->where('question_10', 'Que prefieren contratar profesionistas de otras universidades:')->count();

$q8a = DB::table('pollscompany')->where('question_11', 'Muy importante')->count();
$q8b = DB::table('pollscompany')->where('question_11', 'Medianamente importante')->count();
$q8c = DB::table('pollscompany')->where('question_11', 'Poco importante')->count();
$q8d = DB::table('pollscompany')->where('question_11', 'No es importante')->count();


 return view("estadistics.Grafica1",compact(
   'q1a','q1b','q1c','q1d','q1e','q1f','q1g','q1h','q1i','q1j','q1k','q1l',
   'q2a','q2b','q2c','q2d'
   ,'q3a','q3b','q3c','q3d',
   'q4a','q4b','q4c','q4d',
   'q5a','q5b','q5c','q5d',
   'q6a','q6b','q6c','q6d',
   'q7a','q7b',
   'q8a','q8b','q8c','q8d'

 ));
}


public function Impresion()
{
$q1a = DB::table('pollscompany')->where('question_4', 'Administracion')->count();
$q1b = DB::table('pollscompany')->where('question_4', 'Contaduria')->count();
$q1c = DB::table('pollscompany')->where('question_4', 'Derecho')->count();
$q1d = DB::table('pollscompany')->where('question_4', 'Ingenieria en Sistemas')->count();
$q1e = DB::table('pollscompany')->where('question_4', 'Ingenieria Industrial')->count();
$q1f = DB::table('pollscompany')->where('question_4', 'Ingenieria Mecanica')->count();
$q1g = DB::table('pollscompany')->where('question_4', 'Ingenieria en Electrica')->count();
$q1h = DB::table('pollscompany')->where('question_4', 'Ingenieria Electronica')->count();
$q1i = DB::table('pollscompany')->where('question_4', 'Ingenieria Quimica')->count();
$q1j = DB::table('pollscompany')->where('question_4', 'Ingenieria bioquimica')->count();
$q1k = DB::table('pollscompany')->where('question_4', 'Ingenieria en Gestion Empresarial')->count();
$q1l = DB::table('pollscompany')->where('question_4', 'Otras')->count();


$q2a = DB::table('pollscompany')->where('question_5', 'Excelente formacion')->count();
$q2b = DB::table('pollscompany')->where('question_5', 'Buena formacion')->count();
$q2c = DB::table('pollscompany')->where('question_5', 'Regular formacion')->count();
$q2d = DB::table('pollscompany')->where('question_5', 'Insatisfactoria formacion')->count();

$q3a = DB::table('pollscompany')->where('question_6', 'Excelente')->count();
$q3b = DB::table('pollscompany')->where('question_6', 'Bueno')->count();
$q3c = DB::table('pollscompany')->where('question_6', 'Regular')->count();
$q3d = DB::table('pollscompany')->where('question_6', 'Insatisfactorio')->count();


$q4a = DB::table('pollscompany')->where('question_7', 'Muy importante')->count();
$q4b = DB::table('pollscompany')->where('question_7', 'Medianamente importante')->count();
$q4c = DB::table('pollscompany')->where('question_7', 'Poco importante')->count();
$q4d = DB::table('pollscompany')->where('question_7', 'No es importante')->count();

$q5a = DB::table('pollscompany')->where('question_8', 'Muy importante')->count();
$q5b = DB::table('pollscompany')->where('question_8', 'Medianamente importante')->count();
$q5c = DB::table('pollscompany')->where('question_8', 'Poco importante')->count();
$q5d = DB::table('pollscompany')->where('question_8', 'No es importante')->count();


$q6a = DB::table('pollscompany')->where('question_9', 'Muy importante')->count();
$q6b = DB::table('pollscompany')->where('question_9', 'Medianamente importante')->count();
$q6c = DB::table('pollscompany')->where('question_9', 'Poco importante')->count();
$q6d = DB::table('pollscompany')->where('question_9', 'No es importante')->count();

$q7a = DB::table('pollscompany')->where('question_10', 'Que tienen previsto continuar contratando profesionistas del Tecnológico')->count();
$q7b = DB::table('pollscompany')->where('question_10', 'Que prefieren contratar profesionistas de otras universidades:')->count();

$q8a = DB::table('pollscompany')->where('question_11', 'Muy importante')->count();
$q8b = DB::table('pollscompany')->where('question_11', 'Medianamente importante')->count();
$q8c = DB::table('pollscompany')->where('question_11', 'Poco importante')->count();
$q8d = DB::table('pollscompany')->where('question_11', 'No es importante')->count();


 return view("reportes.gImpresion",compact(
   'q1a','q1b','q1c','q1d','q1e','q1f','q1g','q1h','q1i','q1j','q1k','q1l',
   'q2a','q2b','q2c','q2d'
   ,'q3a','q3b','q3c','q3d',
   'q4a','q4b','q4c','q4d',
   'q5a','q5b','q5c','q5d',
   'q6a','q6b','q6c','q6d',
   'q7a','q7b',
   'q8a','q8b','q8c','q8d'

 ));
}


}
