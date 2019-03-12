<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use polls;

class ConsultaAjax3 extends Controller
{
    public function funcion()
    {

      $question1a= DB::table('polls')
      ->where('polls.question_6','=', 'Si')
      ->get();

      $question1b= DB::table('polls')
      ->where('polls.question_6','=', 'En proceso')
      ->get();

      $question1c= DB::table('polls')
      ->where('polls.question_6','=', 'No')
      ->get();
      $q1a=count($question1a);
      $q1b=count($question1b);
      $q1c=count($question1c);



      $question2a= DB::table('polls')
      ->where('polls.question_7','=', 'Menos de un año')
      ->get();

      $question2b= DB::table('polls')
      ->where('polls.question_7','=', ' 1 a 3 años')
      ->get();

      $question2c= DB::table('polls')
      ->where('polls.question_7','=', ' 3 a 5 años')
      ->get();

      $question2d= DB::table('polls')
      ->where('polls.question_7','=', 'Aún no trabajo')
      ->get();

      $q2a = count($question2a);
      $q2b=count($question2b);
      $q2c=count($question2c);
      $q2d =count($question2d);


      $question3a= DB::table('polls')
      ->where('polls.question_13','=', 'Trabajo')
      ->get();
      $question3b= DB::table('polls')
      ->where('polls.question_13','=', 'Vinculación')
      ->get();
      $question3c= DB::table('polls')
      ->where('polls.question_13','=', 'Toma de Decisiones')
      ->get();
      $question3d= DB::table('polls')
      ->where('polls.question_13','=', 'Operacionales')
      ->get();
      $question3e= DB::table('polls')
      ->where('polls.question_13','=', 'Investigación')
      ->get();
      $question3f= DB::table('polls')
      ->where('polls.question_13','=', 'Otro(s)')
      ->get();

        $q3a =count($question3a);
        $q3b =count($question3b);
        $q3c =count($question3c);
        $q3d =count($question3d);
        $q3e =count($question3e);
        $q3f =count($question3f);


        $question4a= DB::table('polls')
        ->where('question_14','=','Desarrollo de software')
        ->get();
        $question4b= DB::table('polls')
        ->where('question_14','=','Base de datos')
        ->get();
        $question4c= DB::table('polls')
        ->where('question_14','=','Redes')
        ->get();
        $question4d= DB::table('polls')
        ->where('question_14','=','Aplicaciones Móviles')
        ->get();
        $question4e= DB::table('polls')
        ->where('question_14','=','Arquitectura de computadoras')
        ->get();
        $question4f= DB::table('polls')
        ->where('question_14','=','Negocios')
        ->get();
        $question4g= DB::table('polls')
        ->where('question_14','=','Otro(s)')
        ->get();

        $q4a =count($question4a);
        $q4b =count($question4b);
        $q4c =count($question4c);
        $q4d =count($question4d);
        $q4e =count($question4e);
        $q4f =count($question4f);
        $q4g =count($question4g);


        $question5a= DB::table('polls')
        ->where('question_11','=','Primario')
        ->get();

        $question5b= DB::table('polls')
        ->where('question_11','=','Secundario')
        ->get();

        $question5c= DB::table('polls')
        ->where('question_11','=','Terciario')
        ->get();

        $question5d= DB::table('polls')
        ->where('question_11','=','Educativo')
        ->get();

        $question5e= DB::table('polls')
        ->where('question_11','=','No laboro')
        ->get();

        $q5a =count($question5a);
        $q5b =count($question5b);
        $q5c =count($question5c);
        $q5d =count($question5d);
        $q5e =count($question5e);


        $question6a= DB::table('polls')
        ->where('question_10','=','Publica')
        ->get();

        $question6b= DB::table('polls')
        ->where('question_10','=','Privada')
        ->get();

        $question6c= DB::table('polls')
        ->where('question_10','=','Propia')
        ->get();

        $question6d= DB::table('polls')
        ->where('question_10','=','No laboro')
        ->get();

        $q6a =count($question6a);
        $q6b =count($question6b);
        $q6c =count($question6c);
        $q6d =count($question6d);

        $question7a= DB::table('polls')
        ->where('question_12','=','Muy relacionado')
        ->get();
        $question7b= DB::table('polls')
        ->where('question_12','=','Poco relacionado')
        ->get();
        $question7c= DB::table('polls')
        ->where('question_12','=','Parcialmente')
        ->get();
        $question7d= DB::table('polls')
        ->where('question_12','=','No trabajo')
        ->get();
        $q7a =count($question7a);
        $q7b =count($question7b);
        $q7c =count($question7c);
        $q7d =count($question7d);

    return view('estadistics.GenGrafics',compact(
      'q1a','q1b','q1c',
      'q2a','q2b','q2c','q2d',
      'q3a','q3b','q3c','q3d','q3e','q3f',
      'q4a','q4b','q4c','q4d','q4e','q4f','q4g',
      'q5a','q5b','q5c','q5d','q5e',
      'q6a','q6b','q6c','q6d',
      'q7a','q7b','q7c','q7d'
    ));
    }

    public function funcion2()
    {

      $question1a= DB::table('polls')
      ->where('polls.question_6','=', 'Si')
      ->get();

      $question1b= DB::table('polls')
      ->where('polls.question_6','=', 'En proceso')
      ->get();

      $question1c= DB::table('polls')
      ->where('polls.question_6','=', 'No')
      ->get();
      $q1a=count($question1a);
      $q1b=count($question1b);
      $q1c=count($question1c);



      $question2a= DB::table('polls')
      ->where('polls.question_7','=', 'Menos de un año')
      ->get();

      $question2b= DB::table('polls')
      ->where('polls.question_7','=', ' 1 a 3 años')
      ->get();

      $question2c= DB::table('polls')
      ->where('polls.question_7','=', ' 3 a 5 años')
      ->get();

      $question2d= DB::table('polls')
      ->where('polls.question_7','=', 'Aún no trabajo')
      ->get();

      $q2a = count($question2a);
      $q2b=count($question2b);
      $q2c=count($question2c);
      $q2d =count($question2d);


      $question3a= DB::table('polls')
      ->where('polls.question_13','=', 'Trabajo')
      ->get();
      $question3b= DB::table('polls')
      ->where('polls.question_13','=', 'Vinculación')
      ->get();
      $question3c= DB::table('polls')
      ->where('polls.question_13','=', 'Toma de Decisiones')
      ->get();
      $question3d= DB::table('polls')
      ->where('polls.question_13','=', 'Operacionales')
      ->get();
      $question3e= DB::table('polls')
      ->where('polls.question_13','=', 'Investigación')
      ->get();
      $question3f= DB::table('polls')
      ->where('polls.question_13','=', 'Otro(s)')
      ->get();

        $q3a =count($question3a);
        $q3b =count($question3b);
        $q3c =count($question3c);
        $q3d =count($question3d);
        $q3e =count($question3e);
        $q3f =count($question3f);


        $question4a= DB::table('polls')
        ->where('question_14','=','Desarrollo de software')
        ->get();
        $question4b= DB::table('polls')
        ->where('question_14','=','Base de datos')
        ->get();
        $question4c= DB::table('polls')
        ->where('question_14','=','Redes')
        ->get();
        $question4d= DB::table('polls')
        ->where('question_14','=','Aplicaciones Móviles')
        ->get();
        $question4e= DB::table('polls')
        ->where('question_14','=','Arquitectura de computadoras')
        ->get();
        $question4f= DB::table('polls')
        ->where('question_14','=','Negocios')
        ->get();
        $question4g= DB::table('polls')
        ->where('question_14','=','Otro(s)')
        ->get();

        $q4a =count($question4a);
        $q4b =count($question4b);
        $q4c =count($question4c);
        $q4d =count($question4d);
        $q4e =count($question4e);
        $q4f =count($question4f);
        $q4g =count($question4g);


        $question5a= DB::table('polls')
        ->where('question_11','=','Primario')
        ->get();

        $question5b= DB::table('polls')
        ->where('question_11','=','Secundario')
        ->get();

        $question5c= DB::table('polls')
        ->where('question_11','=','Terciario')
        ->get();

        $question5d= DB::table('polls')
        ->where('question_11','=','Educativo')
        ->get();

        $question5e= DB::table('polls')
        ->where('question_11','=','No laboro')
        ->get();

        $q5a =count($question5a);
        $q5b =count($question5b);
        $q5c =count($question5c);
        $q5d =count($question5d);
        $q5e =count($question5e);


        $question6a= DB::table('polls')
        ->where('question_10','=','Publica')
        ->get();

        $question6b= DB::table('polls')
        ->where('question_10','=','Privada')
        ->get();

        $question6c= DB::table('polls')
        ->where('question_10','=','Propia')
        ->get();

        $question6d= DB::table('polls')
        ->where('question_10','=','No laboro')
        ->get();

        $q6a =count($question6a);
        $q6b =count($question6b);
        $q6c =count($question6c);
        $q6d =count($question6d);

        $question7a= DB::table('polls')
        ->where('question_12','=','Muy relacionado')
        ->get();
        $question7b= DB::table('polls')
        ->where('question_12','=','Poco relacionado')
        ->get();
        $question7c= DB::table('polls')
        ->where('question_12','=','Parcialmente')
        ->get();
        $question7d= DB::table('polls')
        ->where('question_12','=','No trabajo')
        ->get();
        $q7a =count($question7a);
        $q7b =count($question7b);
        $q7c =count($question7c);
        $q7d =count($question7d);
/*
        $pdf = \PDF::loadView('reportes.pdfGrafica',
        compact(
          'q1a','q1b','q1c',
          'q2a','q2b','q2c','q2d',
          'q3a','q3b','q3c','q3d','q3e','q3f',
          'q4a','q4b','q4c','q4d','q4e','q4f','q4g',
          'q5a','q5b','q5c','q5d','q5e',
          'q6a','q6b','q6c','q6d',
          'q7a','q7b','q7c','q7d'
        ) );*/

      return view('reportes.pdfGrafica',
        compact(
          'q1a','q1b','q1c',
          'q2a','q2b','q2c','q2d',
          'q3a','q3b','q3c','q3d','q3e','q3f',
          'q4a','q4b','q4c','q4d','q4e','q4f','q4g',
          'q5a','q5b','q5c','q5d','q5e',
          'q6a','q6b','q6c','q6d',
          'q7a','q7b','q7c','q7d'
        ) );
    }
}
