<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\polls2s;
use DB;
use Auth;
class pollsController extends Controller
{
    public function save(Request $request)
    {
      $p1 = $request['p1'];
      $p2 = $request['p2'];
      $p3 = $request['p3'];
      $p4 = $request['p4'];
      $p5 = $request['p5'];

      $rp6 = $request['p6'];
      $p6 =  implode(' , ', $rp6);

      $rp7 = $request['p7'];
      $p7 =  implode(' , ', $rp7);

      $rp8 = $request['p8'];
      $p8 =  implode(' , ', $rp8);



      if ($comentarios = $request['Comentarios'] == null) {
        $comentarios = 'Sin Comentarios';
      }else {
        $comentarios = $request['Comentarios'];
      }
      $p9 = $request['p9'];

      $iyear=date("Y");
      $datos = new polls2s();

      $datos->question1 = $p1;
      $datos->question2 = $p2;
      $datos->question3 = $p3;
      $datos->question4 = $p4;
      $datos->question5 = $p5;
      $datos->question6 = $p6;
      $datos->question7 = $p7;
      $datos->question8 = $p8;
      $datos->question9 = $p9;
      $datos->year=$iyear;
      $datos->Comentarios = $comentarios;

      $datos->id_empresa = Auth::user()->id;
      $datos->save();


      return redirect('home');
    }

public function consulta()
{
  $ayear=DB::table("polls2s")
  ->orderby("year","asc")->get();

  $q1a= DB::table('polls2s')
  ->where('question1','=', 'Pública')->count();
  $q1b= DB::table('polls2s')
  ->where('question1','=', 'Privada')->count();
  $q1c= DB::table('polls2s')
  ->where('question1','=', 'Social')->count();

  $q2a= DB::table('polls2s')
  ->where('question2','=', 'Microempresa')->count();
  $q2b= DB::table('polls2s')
  ->where('question2','=', 'Pequeña')->count();
  $q2c= DB::table('polls2s')
  ->where('question2','=', 'Mediana')->count();
  $q2d= DB::table('polls2s')
  ->where('question2','=', 'Grande')->count();


  $q3a= DB::table('polls2s')
  ->where('question3','=', 'Agro-industrial')->count();
  $q3b= DB::table('polls2s')
  ->where('question3','=', 'Silvicultura')->count();
  $q3c= DB::table('polls2s')
  ->where('question3','=', 'Pesca y acuacultura')->count();
  $q3d= DB::table('polls2s')
  ->where('question3','=', 'Alimentos, bebidas y tabaco')->count();
  $q3e= DB::table('polls2s')
  ->where('question3','=', 'Textiles, Vestido y Cuero')->count();
  $q3f= DB::table('polls2s')
  ->where('question3','=', 'Madera y sus Productos')->count();
  $q3g= DB::table('polls2s')
  ->where('question3','=', 'Papel Imprenta y editoriales')->count();
  $q3h= DB::table('polls2s')
  ->where('question3','=', 'Caucho y plástico')->count();
  $q3i= DB::table('polls2s')
  ->where('question3','=', 'Minerales no metálicos')->count();
  $q3j= DB::table('polls2s')
  ->where('question3','=', 'Productos metálicos, Maquinaria y Equipo')->count();
  $q3k= DB::table('polls2s')
  ->where('question3','=', 'Construcción')->count();
  $q3l= DB::table('polls2s')
  ->where('question3','=', 'Electricidad, Agua y Gas')->count();
  $q3m= DB::table('polls2s')
  ->where('question3','=', 'Comercio y Turismo')->count();
  $q3n= DB::table('polls2s')
  ->where('question3','=', 'Transporte, Almacenaje y Comunicaciones')->count();
  $q3o= DB::table('polls2s')
  ->where('question3','=', 'Servicios Financieros, Seguros, actividades, Inmobiliarias
   y de alquiler')->count();
  $q3p= DB::table('polls2s')
  ->where('question3','=', 'Educación')->count();

  $q4a= DB::table('polls2s')
  ->where('question4','=', '1')->count();
  $q4b= DB::table('polls2s')
  ->where('question4','=', 'De 2 a 5')->count();
  $q4c= DB::table('polls2s')
  ->where('question4','=', 'De 6 a 8')->count();
  $q4d= DB::table('polls2s')
  ->where('question4','=', 'De 9 a 10')->count();
  $q4e= DB::table('polls2s')
  ->where('question4','=', 'Mas de 10')->count();

  $q5a= DB::table('polls2s')
  ->where('question5','=', 'Completamente')->count();
  $q5b= DB::table('polls2s')
  ->where('question5','=', 'Medianamente')->count();
  $q5c= DB::table('polls2s')
  ->where('question5','=', 'Ligeramente')->count();
  $q5d= DB::table('polls2s')
  ->where('question5','=', 'Ninguna Relación')->count();

  $q6a= DB::table('polls2s')
  ->where('question6','like', '%Área o campo de estudio%')->count();
  $q6b= DB::table('polls2s')
  ->where('question6','like', '%Titulación%')->count();
  $q6c= DB::table('polls2s')
  ->where('question6','like', '%Experiencia laboral / Práctica (antes de egresar)%')->count();
  $q6d= DB::table('polls2s')
  ->where('question6','like', '%Posicionamiento de la Institución de egreso%')->count();
  $q6e= DB::table('polls2s')
  ->where('question6','like', '%Conocimiento de idiomas extranjeros%')->count();
  $q6f= DB::table('polls2s')
  ->where('question6','like', '%Recomendaciones/referencias%')->count();
  $q6g= DB::table('polls2s')
  ->where('question6','like', '%Personalidad/Actitudes%')->count();
  $q6h= DB::table('polls2s')
  ->where('question6','like', '%Capacidad de liderazgo%')->count();



  $q7a= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Mecánica%')->count();
  $q7b= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería en sistemas Computacionales%')->count();
  $q7c= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Industrial%')->count();
  $q7d= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Electrónica%')->count();
  $q7e= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Eléctrica%')->count();
  $q7f= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería bioquímica%')->count();
  $q7g= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Química%')->count();
  $q7h= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería en Gestión empresarial%')->count();
  $q7i= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería en logística%')->count();


  $q8a= DB::table('polls2s')
  ->where('question8','like', '%Habilidad para resolver conflictos%')->count();
  $q8b= DB::table('polls2s')
  ->where('question8','like', '%Trabajo en equipo%')->count();
  $q8c= DB::table('polls2s')
  ->where('question8','like', '%Gestión de proyectos%')->count();
  $q8d= DB::table('polls2s')
  ->where('question8','like', '%Puntualidad y asistencia%')->count();
  $q8e= DB::table('polls2s')
  ->where('question8','like', '%Cumplimiento de las normas%')->count();
  $q8f= DB::table('polls2s')
  ->where('question8','like', '%Creatividad e innovación%')->count();
  $q8g= DB::table('polls2s')
  ->where('question8','like', '%Capacidad de negociación%')->count();
  $q8h= DB::table('polls2s')
  ->where('question8','like', '%Capacidad de abstracción, análisis y síntesis%')->count();
  $q8i= DB::table('polls2s')
  ->where('question8','like', '%Liderazgo y toma de decisiones%')->count();
  $q8j= DB::table('polls2s')
  ->where('question8','like', '%Ortografía y redacción de documentos%')->count();

  $q9a= DB::table('polls2s')
  ->where('question9','=', 'Excelente')->count();
  $q9b= DB::table('polls2s')
  ->where('question9','=', 'Muy bueno')->count();
  $q9c= DB::table('polls2s')
  ->where('question9','=', 'Bueno')->count();
  $q9d= DB::table('polls2s')
  ->where('question9','=', 'Regular')->count();
  $q9e= DB::table('polls2s')
  ->where('question9','=', 'Malo')->count();

$enviar = 'General';

    return view('estadistics.Graph_enc', compact(
      'q1a','q1b','q1c',
      'q2a','q2b','q2c','q2d',
      'q3a','q3b','q3c','q3d','q3e','q3f','q3g','q3h','q3i','q3j','q3k','q3l','q3m','q3n','q3o','q3p',
      'q4a','q4b','q4c','q4d','q4e',
      'q5a','q5b','q5c','q5d','q6a',
      'q6a','q6b','q6c','q6d','q6e','q6f','q6g','q6h',
      'q7a','q7b','q7c','q7d','q7e','q7f','q7g','q7h','q7i',
      'q8a','q8b','q8c','q8d','q8e','q8f','q8g','q8h','q8i','q8j',
      'q9a','q9b','q9c','q9d','q9e','ayear','enviar'
    ));

}

public function generar(Request $anio)
{
  $fecha=$anio->get('Saño');
if($fecha=='Generales')
{
header("Location: graficas2");
exit();
}

  $q1a= DB::table('polls2s')
  ->where('question1','=', 'Pública')
  ->where('year',$fecha)
  ->count();

  $q1b= DB::table('polls2s')
  ->where('question1','=', 'Privada')
->where('year',$fecha)
  ->count();

  $q1c= DB::table('polls2s')
  ->where('year',$fecha)
  ->where('question1','=', 'Social')->count();

  $q2a= DB::table('polls2s')
  ->where('question2','=', 'Microempresa')->where('year',$fecha)->count();
  $q2b= DB::table('polls2s')
  ->where('question2','=', 'Pequeña')->where('year',$fecha)->count();
  $q2c= DB::table('polls2s')
  ->where('question2','=', 'Mediana')->where('year',$fecha)->count();
  $q2d= DB::table('polls2s')
  ->where('question2','=', 'Grande')->where('year',$fecha)->count();


  $q3a= DB::table('polls2s')
  ->where('question3','=', 'Agro-industrial')->where('year',$fecha)->count();
  $q3b= DB::table('polls2s')
  ->where('question3','=', 'Silvicultura')->where('year',$fecha)->count();
  $q3c= DB::table('polls2s')
  ->where('question3','=', 'Pesca y acuacultura')->where('year',$fecha)->count();
  $q3d= DB::table('polls2s')
  ->where('question3','=', 'Alimentos, bebidas y tabaco')->where('year',$fecha)->count();
  $q3e= DB::table('polls2s')
  ->where('question3','=', 'Textiles, Vestido y Cuero')->where('year',$fecha)->count();
  $q3f= DB::table('polls2s')
  ->where('question3','=', 'Madera y sus Productos')->where('year',$fecha)->count();
  $q3g= DB::table('polls2s')
  ->where('question3','=', 'Papel Imprenta y editoriales')->where('year',$fecha)->count();
  $q3h= DB::table('polls2s')
  ->where('question3','=', 'Caucho y plástico')->where('year',$fecha)->count();
  $q3i= DB::table('polls2s')
  ->where('question3','=', 'Minerales no metálicos')->where('year',$fecha)->count();
  $q3j= DB::table('polls2s')
  ->where('question3','=', 'Productos metálicos, Maquinaria y Equipo')->where('year',$fecha)->count();
  $q3k= DB::table('polls2s')
  ->where('question3','=', 'Construcción')->where('year',$fecha)->count();
  $q3l= DB::table('polls2s')
  ->where('question3','=', 'Electricidad, Agua y Gas')->where('year',$fecha)->count();
  $q3m= DB::table('polls2s')
  ->where('question3','=', 'Comercio y Turismo')->where('year',$fecha)->count();
  $q3n= DB::table('polls2s')
  ->where('question3','=', 'Transporte, Almacenaje y Comunicaciones')->where('year',$fecha)->count();
  $q3o= DB::table('polls2s')
  ->where('question3','=', 'Servicios Financieros, Seguros, actividades, Inmobiliarias
   y de alquiler')->where('year',$fecha)->count();
  $q3p= DB::table('polls2s')
  ->where('question3','=', 'Educación')->where('year',$fecha)->count();

  $q4a= DB::table('polls2s')
  ->where('question4','=', '1')->where('year',$fecha)->count();
  $q4b= DB::table('polls2s')
  ->where('question4','=', 'De 2 a 5')->where('year',$fecha)->count();
  $q4c= DB::table('polls2s')
  ->where('question4','=', 'De 6 a 8')->where('year',$fecha)->count();
  $q4d= DB::table('polls2s')
  ->where('question4','=', 'De 9 a 10')->where('year',$fecha)->count();
  $q4e= DB::table('polls2s')
  ->where('question4','=', 'Mas de 10')->where('year',$fecha)->count();

  $q5a= DB::table('polls2s')
  ->where('question5','=', 'Completamente')->where('year',$fecha)->count();
  $q5b= DB::table('polls2s')
  ->where('question5','=', 'Medianamente')->where('year',$fecha)->count();
  $q5c= DB::table('polls2s')
  ->where('question5','=', 'Ligeramente')->where('year',$fecha)->count();
  $q5d= DB::table('polls2s')
  ->where('question5','=', 'Ninguna Relación')->where('year',$fecha)->count();

  $q6a= DB::table('polls2s')
  ->where('question6','like', '%Área o campo de estudio%')->where('year',$fecha)->count();
  $q6b= DB::table('polls2s')
  ->where('question6','like', '%Titulación%')->where('year',$fecha)->count();
  $q6c= DB::table('polls2s')
  ->where('question6','like', '%Experiencia laboral / Práctica (antes de egresar)%')->where('year',$fecha)->count();
  $q6d= DB::table('polls2s')
  ->where('question6','like', '%Posicionamiento de la Institución de egreso%')->where('year',$fecha)->count();
  $q6e= DB::table('polls2s')
  ->where('question6','like', '%Conocimiento de idiomas extranjeros%')->where('year',$fecha)->count();
  $q6f= DB::table('polls2s')
  ->where('question6','like', '%Recomendaciones/referencias%')->where('year',$fecha)->count();
  $q6g= DB::table('polls2s')
  ->where('question6','like', '%Personalidad/Actitudes%')->where('year',$fecha)->count();
  $q6h= DB::table('polls2s')
  ->where('question6','like', '%Capacidad de liderazgo%')->where('year',$fecha)->count();



  $q7a= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Mecánica%')->where('year',$fecha)->count();
  $q7b= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería en sistemas Computacionales%')->where('year',$fecha)->count();
  $q7c= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Industrial%')->where('year',$fecha)->count();
  $q7d= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Electrónica%')->where('year',$fecha)->count();
  $q7e= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Eléctrica%')->where('year',$fecha)->count();
  $q7f= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería bioquímica%')->where('year',$fecha)->count();
  $q7g= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Química%')->where('year',$fecha)->count();
  $q7h= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería en Gestión empresarial%')->where('year',$fecha)->count();
  $q7i= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería en logística%')->where('year',$fecha)->count();


  $q8a= DB::table('polls2s')
  ->where('question8','like', '%Habilidad para resolver conflictos%')->where('year',$fecha)->count();
  $q8b= DB::table('polls2s')
  ->where('question8','like', '%Trabajo en equipo%')->where('year',$fecha)->count();
  $q8c= DB::table('polls2s')
  ->where('question8','like', '%Gestión de proyectos%')->where('year',$fecha)->count();
  $q8d= DB::table('polls2s')
  ->where('question8','like', '%Puntualidad y asistencia%')->where('year',$fecha)->count();
  $q8e= DB::table('polls2s')
  ->where('question8','like', '%Cumplimiento de las normas%')->where('year',$fecha)->count();
  $q8f= DB::table('polls2s')
  ->where('question8','like', '%Creatividad e innovación%')->where('year',$fecha)->count();
  $q8g= DB::table('polls2s')
  ->where('question8','like', '%Capacidad de negociación%')->where('year',$fecha)->count();
  $q8h= DB::table('polls2s')
  ->where('question8','like', '%Capacidad de abstracción, análisis y síntesis%')->where('year',$fecha)->count();
  $q8i= DB::table('polls2s')
  ->where('question8','like', '%Liderazgo y toma de decisiones%')->where('year',$fecha)->count();
  $q8j= DB::table('polls2s')
  ->where('question8','like', '%Ortografía y redacción de documentos%')->where('year',$fecha)->count();

  $q9a= DB::table('polls2s')
  ->where('question9','=', 'Excelente')->where('year',$fecha)->count();
  $q9b= DB::table('polls2s')
  ->where('question9','=', 'Muy bueno')->where('year',$fecha)->count();
  $q9c= DB::table('polls2s')
  ->where('question9','=', 'Bueno')->where('year',$fecha)->count();
  $q9d= DB::table('polls2s')
  ->where('question9','=', 'Regular')->where('year',$fecha)->count();
  $q9e= DB::table('polls2s')
  ->where('question9','=', 'Malo')->where('year',$fecha)->count();

  $ayear=DB::table("polls2s")
  ->orderby("year","asc")->get();

  $enviar = $anio->get('Saño');

    return view('estadistics.Graph_enc', compact(
      'q1a','q1b','q1c',
      'q2a','q2b','q2c','q2d',
      'q3a','q3b','q3c','q3d','q3e','q3f','q3g','q3h','q3i','q3j','q3k','q3l','q3m','q3n','q3o','q3p',
      'q4a','q4b','q4c','q4d','q4e',
      'q5a','q5b','q5c','q5d','q6a',
      'q6a','q6b','q6c','q6d','q6e','q6f','q6g','q6h',
      'q7a','q7b','q7c','q7d','q7e','q7f','q7g','q7h','q7i',
      'q8a','q8b','q8c','q8d','q8e','q8f','q8g','q8h','q8i','q8j',
      'q9a','q9b','q9c','q9d','q9e','ayear','enviar'
    ));

}

public function imprimir(Request $oAnio)
{

  $enviar = $oAnio->get('Sanio');

    if($enviar=='General')
    {
  $q1a= DB::table('polls2s')
  ->where('question1','=', 'Pública')->count();
  $q1b= DB::table('polls2s')
  ->where('question1','=', 'Privada')->count();
  $q1c= DB::table('polls2s')
  ->where('question1','=', 'Social')->count();

  $q2a= DB::table('polls2s')
  ->where('question2','=', 'Microempresa')->count();
  $q2b= DB::table('polls2s')
  ->where('question2','=', 'Pequeña')->count();
  $q2c= DB::table('polls2s')
  ->where('question2','=', 'Mediana')->count();
  $q2d= DB::table('polls2s')
  ->where('question2','=', 'Grande')->count();


  $q3a= DB::table('polls2s')
  ->where('question3','=', 'Agro-industrial')->count();
  $q3b= DB::table('polls2s')
  ->where('question3','=', 'Silvicultura')->count();
  $q3c= DB::table('polls2s')
  ->where('question3','=', 'Pesca y acuacultura')->count();
  $q3d= DB::table('polls2s')
  ->where('question3','=', 'Alimentos, bebidas y tabaco')->count();
  $q3e= DB::table('polls2s')
  ->where('question3','=', 'Textiles, Vestido y Cuero')->count();
  $q3f= DB::table('polls2s')
  ->where('question3','=', 'Madera y sus Productos')->count();
  $q3g= DB::table('polls2s')
  ->where('question3','=', 'Papel Imprenta y editoriales')->count();
  $q3h= DB::table('polls2s')
  ->where('question3','=', 'Caucho y plástico')->count();
  $q3i= DB::table('polls2s')
  ->where('question3','=', 'Minerales no metálicos')->count();
  $q3j= DB::table('polls2s')
  ->where('question3','=', 'Productos metálicos, Maquinaria y Equipo')->count();
  $q3k= DB::table('polls2s')
  ->where('question3','=', 'Construcción')->count();
  $q3l= DB::table('polls2s')
  ->where('question3','=', 'Electricidad, Agua y Gas')->count();
  $q3m= DB::table('polls2s')
  ->where('question3','=', 'Comercio y Turismo')->count();
  $q3n= DB::table('polls2s')
  ->where('question3','=', 'Transporte, Almacenaje y Comunicaciones')->count();
  $q3o= DB::table('polls2s')
  ->where('question3','=', 'Servicios Financieros, Seguros, actividades, Inmobiliarias
   y de alquiler')->count();
  $q3p= DB::table('polls2s')
  ->where('question3','=', 'Educación')->count();

  $q4a= DB::table('polls2s')
  ->where('question4','=', '1')->count();
  $q4b= DB::table('polls2s')
  ->where('question4','=', 'De 2 a 5')->count();
  $q4c= DB::table('polls2s')
  ->where('question4','=', 'De 6 a 8')->count();
  $q4d= DB::table('polls2s')
  ->where('question4','=', 'De 9 a 10')->count();
  $q4e= DB::table('polls2s')
  ->where('question4','=', 'Mas de 10')->count();

  $q5a= DB::table('polls2s')
  ->where('question5','=', 'Completamente')->count();
  $q5b= DB::table('polls2s')
  ->where('question5','=', 'Medianamente')->count();
  $q5c= DB::table('polls2s')
  ->where('question5','=', 'Ligeramente')->count();
  $q5d= DB::table('polls2s')
  ->where('question5','=', 'Ninguna Relación')->count();

  $q6a= DB::table('polls2s')
  ->where('question6','like', '%Área o campo de estudio%')->count();
  $q6b= DB::table('polls2s')
  ->where('question6','like', '%Titulación%')->count();
  $q6c= DB::table('polls2s')
  ->where('question6','like', '%Experiencia laboral / Práctica (antes de egresar)%')->count();
  $q6d= DB::table('polls2s')
  ->where('question6','like', '%Posicionamiento de la Institución de egreso%')->count();
  $q6e= DB::table('polls2s')
  ->where('question6','like', '%Conocimiento de idiomas extranjeros%')->count();
  $q6f= DB::table('polls2s')
  ->where('question6','like', '%Recomendaciones/referencias%')->count();
  $q6g= DB::table('polls2s')
  ->where('question6','like', '%Personalidad/Actitudes%')->count();
  $q6h= DB::table('polls2s')
  ->where('question6','like', '%Capacidad de liderazgo%')->count();


  $q7a= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Mecánica%')->count();
  $q7b= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería en sistemas Computacionales%')->count();
  $q7c= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Industrial%')->count();
  $q7d= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Electrónica%')->count();
  $q7e= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Eléctrica%')->count();
  $q7f= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería bioquímica%')->count();
  $q7g= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Química%')->count();
  $q7h= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería en Gestión empresarial%')->count();
  $q7i= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería en logística%')->count();


  $q8a= DB::table('polls2s')
  ->where('question8','like', '%Habilidad para resolver conflictos%')->count();
  $q8b= DB::table('polls2s')
  ->where('question8','like', '%Trabajo en equipo%')->count();
  $q8c= DB::table('polls2s')
  ->where('question8','like', '%Gestión de proyectos%')->count();
  $q8d= DB::table('polls2s')
  ->where('question8','like', '%Puntualidad y asistencia%')->count();
  $q8e= DB::table('polls2s')
  ->where('question8','like', '%Cumplimiento de las normas%')->count();
  $q8f= DB::table('polls2s')
  ->where('question8','like', '%Creatividad e innovación%')->count();
  $q8g= DB::table('polls2s')
  ->where('question8','like', '%Capacidad de negociación%')->count();
  $q8h= DB::table('polls2s')
  ->where('question8','like', '%Capacidad de abstracción, análisis y síntesis%')->count();
  $q8i= DB::table('polls2s')
  ->where('question8','like', '%Liderazgo y toma de decisiones%')->count();
  $q8j= DB::table('polls2s')
  ->where('question8','like', '%Ortografía y redacción de documentos%')->count();

  $q9a= DB::table('polls2s')
  ->where('question9','=', 'Excelente')->count();
  $q9b= DB::table('polls2s')
  ->where('question9','=', 'Muy bueno')->count();
  $q9c= DB::table('polls2s')
  ->where('question9','=', 'Bueno')->count();
  $q9d= DB::table('polls2s')
  ->where('question9','=', 'Regular')->count();
  $q9e= DB::table('polls2s')
  ->where('question9','=', 'Malo')->count();

  $ayear=DB::table("polls2s")
  ->orderby("year","asc")->get();
  if ($enviar!="General") {
    $enviar='Año: '.$enviar;}
  return view('reportes.Graph_emp', compact(
    'q1a','q1b','q1c',
    'q2a','q2b','q2c','q2d',
    'q3a','q3b','q3c','q3d','q3e','q3f','q3g','q3h','q3i','q3j','q3k','q3l','q3m','q3n','q3o','q3p',
    'q4a','q4b','q4c','q4d','q4e',
    'q5a','q5b','q5c','q5d','q6a',
    'q6a','q6b','q6c','q6d','q6e','q6f','q6g','q6h',
    'q7a','q7b','q7c','q7d','q7e','q7f','q7g','q7h','q7i',
    'q8a','q8b','q8c','q8d','q8e','q8f','q8g','q8h','q8i','q8j',
    'q9a','q9b','q9c','q9d','q9e','ayear','enviar'));

}else{

  $q1a= DB::table('polls2s')
  ->where('question1','=', 'Pública')->where('year',$enviar)->count();
  $q1b= DB::table('polls2s')
  ->where('question1','=', 'Privada')->where('year',$enviar)->count();
  $q1c= DB::table('polls2s')
  ->where('question1','=', 'Social')->where('year',$enviar)->count();

  $q2a= DB::table('polls2s')
  ->where('question2','=', 'Microempresa')->where('year',$enviar)->count();
  $q2b= DB::table('polls2s')
  ->where('question2','=', 'Pequeña')->where('year',$enviar)->count();
  $q2c= DB::table('polls2s')
  ->where('question2','=', 'Mediana')->where('year',$enviar)->count();
  $q2d= DB::table('polls2s')
  ->where('question2','=', 'Grande')->where('year',$enviar)->count();


  $q3a= DB::table('polls2s')
  ->where('question3','=', 'Agro-industrial')->where('year',$enviar)->count();
  $q3b= DB::table('polls2s')
  ->where('question3','=', 'Silvicultura')->where('year',$enviar)->count();
  $q3c= DB::table('polls2s')
  ->where('question3','=', 'Pesca y acuacultura')->where('year',$enviar)->count();
  $q3d= DB::table('polls2s')
  ->where('question3','=', 'Alimentos, bebidas y tabaco')->where('year',$enviar)->count();
  $q3e= DB::table('polls2s')
  ->where('question3','=', 'Textiles, Vestido y Cuero')->where('year',$enviar)->count();
  $q3f= DB::table('polls2s')
  ->where('question3','=', 'Madera y sus Productos')->where('year',$enviar)->count();
  $q3g= DB::table('polls2s')
  ->where('question3','=', 'Papel Imprenta y editoriales')->where('year',$enviar)->count();
  $q3h= DB::table('polls2s')
  ->where('question3','=', 'Caucho y plástico')->where('year',$enviar)->count();
  $q3i= DB::table('polls2s')
  ->where('question3','=', 'Minerales no metálicos')->where('year',$enviar)->count();
  $q3j= DB::table('polls2s')
  ->where('question3','=', 'Productos metálicos, Maquinaria y Equipo')->where('year',$enviar)->count();
  $q3k= DB::table('polls2s')
  ->where('question3','=', 'Construcción')->where('year',$enviar)->count();
  $q3l= DB::table('polls2s')
  ->where('question3','=', 'Electricidad, Agua y Gas')->where('year',$enviar)->count();
  $q3m= DB::table('polls2s')
  ->where('question3','=', 'Comercio y Turismo')->where('year',$enviar)->count();
  $q3n= DB::table('polls2s')
  ->where('question3','=', 'Transporte, Almacenaje y Comunicaciones')->where('year',$enviar)->count();
  $q3o= DB::table('polls2s')
  ->where('question3','=', 'Servicios Financieros, Seguros, actividades, Inmobiliarias
   y de alquiler')->where('year',$enviar)->count();
  $q3p= DB::table('polls2s')
  ->where('question3','=', 'Educación')->where('year',$enviar)->count();

  $q4a= DB::table('polls2s')
  ->where('question4','=', '1')->where('year',$enviar)->count();
  $q4b= DB::table('polls2s')
  ->where('question4','=', 'De 2 a 5')->where('year',$enviar)->count();
  $q4c= DB::table('polls2s')
  ->where('question4','=', 'De 6 a 8')->where('year',$enviar)->count();
  $q4d= DB::table('polls2s')
  ->where('question4','=', 'De 9 a 10')->where('year',$enviar)->count();
  $q4e= DB::table('polls2s')
  ->where('question4','=', 'Mas de 10')->where('year',$enviar)->count();

  $q5a= DB::table('polls2s')
  ->where('question5','=', 'Completamente')->where('year',$enviar)->count();
  $q5b= DB::table('polls2s')
  ->where('question5','=', 'Medianamente')->where('year',$enviar)->count();
  $q5c= DB::table('polls2s')
  ->where('question5','=', 'Ligeramente')->where('year',$enviar)->count();
  $q5d= DB::table('polls2s')
  ->where('question5','=', 'Ninguna Relación')->where('year',$enviar)->count();

  $q6a= DB::table('polls2s')
  ->where('question6','like', '%Área o campo de estudio%')->where('year',$enviar)->count();
  $q6b= DB::table('polls2s')
  ->where('question6','like', '%Titulación%')->where('year',$enviar)->count();
  $q6c= DB::table('polls2s')
  ->where('question6','like', '%Experiencia laboral / Práctica (antes de egresar)%')->where('year',$enviar)->count();
  $q6d= DB::table('polls2s')
  ->where('question6','like', '%Posicionamiento de la Institución de egreso%')->where('year',$enviar)->count();
  $q6e= DB::table('polls2s')
  ->where('question6','like', '%Conocimiento de idiomas extranjeros%')->where('year',$enviar)->count();
  $q6f= DB::table('polls2s')
  ->where('question6','like', '%Recomendaciones/referencias%')->where('year',$enviar)->count();
  $q6g= DB::table('polls2s')
  ->where('question6','like', '%Personalidad/Actitudes%')->where('year',$enviar)->count();
  $q6h= DB::table('polls2s')
  ->where('question6','like', '%Capacidad de liderazgo%')->where('year',$enviar)->count();


  $q7a= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Mecánica%')->where('year',$enviar)->count();
  $q7b= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería en sistemas Computacionales%')->where('year',$enviar)->count();
  $q7c= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Industrial%')->where('year',$enviar)->count();
  $q7d= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Electrónica%')->where('year',$enviar)->count();
  $q7e= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Eléctrica%')->where('year',$enviar)->count();
  $q7f= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería bioquímica%')->where('year',$enviar)->count();
  $q7g= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería Química%')->where('year',$enviar)->count();
  $q7h= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería en Gestión empresarial%')->where('year',$enviar)->count();
  $q7i= DB::table('polls2s')
  ->where('question7','like', '%Ingeniería en logística%')->where('year',$enviar)->count();


  $q8a= DB::table('polls2s')
  ->where('question8','like', '%Habilidad para resolver conflictos%')->where('year',$enviar)->count();
  $q8b= DB::table('polls2s')
  ->where('question8','like', '%Trabajo en equipo%')->where('year',$enviar)->count();
  $q8c= DB::table('polls2s')
  ->where('question8','like', '%Gestión de proyectos%')->where('year',$enviar)->count();
  $q8d= DB::table('polls2s')
  ->where('question8','like', '%Puntualidad y asistencia%')->where('year',$enviar)->count();
  $q8e= DB::table('polls2s')
  ->where('question8','like', '%Cumplimiento de las normas%')->where('year',$enviar)->count();
  $q8f= DB::table('polls2s')
  ->where('question8','like', '%Creatividad e innovación%')->where('year',$enviar)->count();
  $q8g= DB::table('polls2s')
  ->where('question8','like', '%Capacidad de negociación%')->where('year',$enviar)->count();
  $q8h= DB::table('polls2s')
  ->where('question8','like', '%Capacidad de abstracción, análisis y síntesis%')->where('year',$enviar)->count();
  $q8i= DB::table('polls2s')
  ->where('question8','like', '%Liderazgo y toma de decisiones%')->where('year',$enviar)->count();
  $q8j= DB::table('polls2s')
  ->where('question8','like', '%Ortografía y redacción de documentos%')->where('year',$enviar)->count();

  $q9a= DB::table('polls2s')
  ->where('question9','=', 'Excelente')->where('year',$enviar)->count();
  $q9b= DB::table('polls2s')
  ->where('question9','=', 'Muy bueno')->where('year',$enviar)->count();
  $q9c= DB::table('polls2s')
  ->where('question9','=', 'Bueno')->where('year',$enviar)->count();
  $q9d= DB::table('polls2s')
  ->where('question9','=', 'Regular')->where('year',$enviar)->count();
  $q9e= DB::table('polls2s')
  ->where('question9','=', 'Malo')->count();

  if ($enviar!="General") {
    $enviar='Año: '.$enviar;
  }

  return view('reportes.Graph_emp', compact(
    'q1a','q1b','q1c',
    'q2a','q2b','q2c','q2d',
    'q3a','q3b','q3c','q3d','q3e','q3f','q3g','q3h','q3i','q3j','q3k','q3l','q3m','q3n','q3o','q3p',
    'q4a','q4b','q4c','q4d','q4e',
    'q5a','q5b','q5c','q5d','q6a',
    'q6a','q6b','q6c','q6d','q6e','q6f','q6g','q6h',
    'q7a','q7b','q7c','q7d','q7e','q7f','q7g','q7h','q7i',
    'q8a','q8b','q8c','q8d','q8e','q8f','q8g','q8h','q8i','q8j',
    'q9a','q9b','q9c','q9d','q9e','ayear','enviar'));


}








}
}
