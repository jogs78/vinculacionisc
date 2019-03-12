<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Models\Poll;
use App\period;
use App\Models\Survey_o;
use App\Models\Survey_q;

class EgresadosEstadisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $periodos_question5 = DB::table('periods')->get();
                               
      return view('estadistics.est-egresados')
             ->with('periodos_question5',$periodos_question5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function questionTitulado($periodo){
        //SELECT COUNT(*) FROM polls WHERE question_6='No' AND question_5="Enero-Junio 2014"

//SELECT q_text FROM `survey_qs` WHERE id=3
       
$pregunta=DB::table('survey_qs')
                ->select('q_text')
                ->where('id','=',2)
                ->get();

       

        $questionNo = DB::table('polls')
                     ->where('question_6','=','No')
                     ->where('question_5','=',$periodo)
                    ->count();
        $questionSi= DB::table('polls')
                     ->where('question_6','=','Si')
                     ->where('question_5','=',$periodo)
                    ->count();
         $questionEn_proceso= DB::table('polls')
                     ->where('question_6','=','En Proceso')
                     ->where('question_5','=',$periodo)
                    ->count();
          $total=$questionNo+$questionSi+$questionEn_proceso; 
          
         $data=array("pregunta"=>$pregunta,"periodo"=>$periodo,"totaltitulados"=>$total,"questionNo"=>$questionNo,"questionSi"=>$questionSi,"questionEn_proceso"=>$questionEn_proceso);
        return json_encode($data);       

      //  var_dump('$data');

    }
    public function questionTiempoEmpleo($periodo){
        $pregunta=DB::table('survey_qs')
                ->select('q_text')
                ->where('id','=',3)
                ->get();

            $Menosdeuno = DB::table('polls')
                     ->where('question_7','=','Menos de un año')
                     ->where('question_5','=',$periodo)
                    ->count();      
         $de1a3 = DB::table('polls')
                     ->where('question_7','=',' 1 a 3 años')
                     ->where('question_5','=',$periodo)
                    ->count();      

        $de3a5 = DB::table('polls')
                     ->where('question_7','=','3 a 5 años')
                     ->where('question_5','=',$periodo)
                    ->count();
          $AunNotrabaja = DB::table('polls')
                     ->where('question_7','=','Aún no trabajo')
                     ->where('question_5','=',$periodo)
                    ->count();  

         $total=$Menosdeuno+$de1a3+$de3a5+$AunNotrabaja;
         
         $data=array("pregunta"=>$pregunta,"periodo"=>$periodo,"total"=>$total,"Menosdeuno"=>$Menosdeuno,"de1a3"=>$de1a3,                           'AunNotrabaja'=>$AunNotrabaja,"de3a5"=>$de3a5);        

         return json_encode($data);


    }
    public function questionFormacion($periodo){
              $pregunta=DB::table('survey_qs')
                            ->select('q_text')
                            ->where('id','=',9)
                            ->get();

            $Trabajo = DB::table('polls')
                     ->where('question_13','=','Trabajo')
                     ->where('question_5','=',$periodo)
                    ->count();     

            $Vinculacion = DB::table('polls')
                     ->where('question_13','=','Vinculación')
                     ->where('question_5','=',$periodo)
                    ->count();   

            $TomaDecisiones = DB::table('polls')
                             ->where('question_13','=','Toma de Decisiones')
                             ->where('question_5','=',$periodo)
                            ->count();   
             $Operacionales = DB::table('polls')
                             ->where('question_13','=','Operacionales')
                             ->where('question_5','=',$periodo)
                            ->count();  
             $Investigacion = DB::table('polls')
                             ->where('question_13','=','Investigación')
                             ->where('question_5','=',$periodo)
                            ->count();     
             $Otros = DB::table('polls')
                             ->where('question_13','=','Otro(s)')
                             ->where('question_5','=',$periodo)
                            ->count();  
       
             $total=$Trabajo+$Vinculacion+$TomaDecisiones+$Operacionales+$Investigacion+$Otros;
  
             $data=array("pregunta"=>$pregunta,"periodo"=>$periodo,"total"=>$total,"Trabajo"=>$Trabajo,"Vinculacion"=>$Vinculacion,
                "TomaDecisiones"=>$TomaDecisiones,"Operacionales"=>$Operacionales,"Investigacion"=>$Investigacion,"Otros"=>$Otros);        

             return json_encode($data);



    }
    public function questionAreaDesem($periodo){
         $pregunta=DB::table('survey_qs')
                            ->select('q_text')
                            ->where('id','=',10)
                            ->get();
        $Desarrollosoftware = DB::table('polls')
                             ->where('question_14','=','Desarrollo de software')
                             ->where('question_5','=',$periodo)
                            ->count(); 
                     $Basededatos = DB::table('polls')
                             ->where('question_14','=','Base de datos')
                             ->where('question_5','=',$periodo)
                            ->count();          
                $Redes = DB::table('polls')
                             ->where('question_14','=','Redes')
                             ->where('question_5','=',$periodo)
                            ->count();   

         
         $AplicacionesMoviles = DB::table('polls')
                             ->where('question_14','=','Aplicaciones Móviles')
                             ->where('question_5','=',$periodo)
                            ->count();  
           
         $Arquitectura = DB::table('polls')
                             ->where('question_14','=','Arquitectura de computadoras')
                             ->where('question_5','=',$periodo)
                            ->count();  
          $Negocios = DB::table('polls')
                             ->where('question_14','=','Negocios')
                             ->where('question_5','=',$periodo)
                            ->count();  
           $Otros = DB::table('polls')
                             ->where('question_14','=','Otro(s)')
                             ->where('question_5','=',$periodo)
                            ->count(); 
        $total=$Desarrollosoftware+$Basededatos+$Redes+$AplicacionesMoviles+$Arquitectura+$Negocios+$Otros;

    $data=array("pregunta"=>$pregunta,"periodo"=>$periodo,"total"=>$total,"Desarrollosoftware"=>$Desarrollosoftware,"Basededatos"=>$Basededatos,
                "Redes"=>$Redes,"AplicacionesMoviles"=>$AplicacionesMoviles,"Arquitectura"=>$Arquitectura,"Negocios"=>$Negocios,"Otros"=>$Otros);        

             return json_encode($data);

    }
    function questionSectorEconomico($periodo){
         $pregunta=DB::table('survey_qs')
                            ->select('q_text')
                            ->where('id','=',7)
                            ->get();
        $Primario = DB::table('polls')
                             ->where('question_11','=','Primario')
                             ->where('question_5','=',$periodo)
                            ->count(); 
       $Secundario = DB::table('polls')
                             ->where('question_11','=','Secundario')
                             ->where('question_5','=',$periodo)
                            ->count(); 

         $Terciario = DB::table('polls')
                             ->where('question_11','=','Terciario')
                             ->where('question_5','=',$periodo)
                            ->count();    
         $Educativo = DB::table('polls')
                             ->where('question_11','=','Educativo')
                             ->where('question_5','=',$periodo)
                            ->count(); 

        $Nolaboro = DB::table('polls')
                             ->where('question_11','=','No laboro')
                             ->where('question_5','=',$periodo)
                            ->count(); 
        $total=$Primario+$Secundario+$Terciario+$Educativo+$Nolaboro;
        $data=array("pregunta"=>$pregunta,"periodo"=>$periodo,"total"=>$total,"Primario"=>$Primario,"Secundario"=>$Secundario,"Terciario"=>$Terciario,"Educativo"=>$Educativo,'Nolaboro'=>$Nolaboro);
        return json_encode($data);                  

    } 
    function questionTipoInstitucion($periodo){

 $pregunta=DB::table('survey_qs')
                            ->select('q_text')
                            ->where('id','=',6)
                            ->get();

     $Publica = DB::table('polls')
                             ->where('question_10','=','Publica')
                             ->where('question_5','=',$periodo)
                            ->count(); 
     $Privada = DB::table('polls')
                             ->where('question_10','=','Privada')
                             ->where('question_5','=',$periodo)
                            ->count(); 
       $Propia = DB::table('polls')
                             ->where('question_10','=','Propia')
                             ->where('question_5','=',$periodo)
                            ->count(); 
         $Nolaboro = DB::table('polls')
                             ->where('question_10','=','No laboro')
                             ->where('question_5','=',$periodo)
                            ->count(); 
        $total=$Publica+$Privada+$Propia+$Nolaboro;
        $data=array('pregunta' =>$pregunta ,'periodo'=>$periodo,'total'=>$total,'Publica'=>$Publica,'Privada'=>$Privada,
            'Propia'=>$Propia,'Nolaboro'=>$Nolaboro);
        return json_encode($data);

    }

    function questionrelacionado($periodo){

 $pregunta=DB::table('survey_qs')
                            ->select('q_text')
                            ->where('id','=',8)
                            ->get();
 $Muyrelacionado = DB::table('polls')
                             ->where('question_12','=','Muy relacionado')
                             ->where('question_5','=',$periodo)
                            ->count(); 

 $Pocorelacionado = DB::table('polls')
                             ->where('question_12','=','Poco relacionado')
                             ->where('question_5','=',$periodo)
                            ->count(); 

 $Parcialmente = DB::table('polls')
                             ->where('question_12','=','Parcialmente')
                             ->where('question_5','=',$periodo)
                            ->count(); 
 $Notrabajo = DB::table('polls')
                             ->where('question_12','=','No trabajo')
                             ->where('question_5','=',$periodo)
                            ->count(); 


    $total=$Muyrelacionado+$Pocorelacionado+$Parcialmente+$Notrabajo;
    $data = array('pregunta'=>$pregunta,'periodo'=>$periodo,'total'=>$total,'Muyrelacionado' =>$Muyrelacionado ,'Pocorelacionado'=>$Pocorelacionado,'Parcialmente'=>$Parcialmente,'Notrabajo'=>$Notrabajo);
 return json_encode($data);


    }

     function tablaresultados($periodo){
          

        $resultados=DB::table('polls')
                    ->select('polls.question_1','polls.question_11','polls.question_10','polls.question_12')
                     ->where('polls.question_5','=',$periodo)
                     ->get();


        $data=array('resultados'=>$resultados,'periodo'=>$periodo);
        return json_encode($data);

    }
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
