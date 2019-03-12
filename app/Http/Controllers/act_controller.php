<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\Models\Survey_q;
use App\Http\Requests\CreatePollRequest;
use App\Models\Poll;
use App\Pollscompany;
use App\Models\Company;
use App\Pollcompany;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Auth;
use Alert;
use App\User;
use App\Models\Graduate;
use App\Models\Period;
use App\polls2s;

class act_controller extends Controller
{
    //
    public function update($id, CreatePollRequest $request)
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

        $update = polls2s::where('id_poll', $id)->update([
          'question1'=>$p1,
          'question2'=>$p2,
          'question3'=>$p3,
          'question4'=>$p4,
          'question5'=>$p5,
          'question6'=>$p6,
          'question7'=>$p7,
          'question8'=>$p8,
          'question9'=>$p9,
          'Comentarios'=>$comentarios
        ]);

    		Flash::message('Actualizada correctamente');
        $encuesta = polls2s::orderBy('id_poll','desc')->get();

    		return  Redirect('home');
    	}


    public function edit($id)
    	{
        $di = polls2s::where('id_empresa',$id)->orderBy('id_poll','desc')->first();

        if (empty($di)) {
          return redirect('home');
        }
        
        $poll = polls2s::find($di->id_poll);

        return view('polls.enc_empl_upd')->with('poll', $poll);
    	}
}
