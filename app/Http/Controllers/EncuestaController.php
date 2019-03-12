<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
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


class EncuestaController extends Controller
{
    public function index(){
   	$query = Pollscompany::query();
        $columns = Schema::getColumnListing('$TABLE_NAME$');
        $attributes = array();

        foreach($columns as $attribute){
            if($request[$attribute] == true)
            {
                $query->where($attribute, $request[$attribute]);
                $attributes[$attribute] =  $request[$attribute];
            }else{
                $attributes[$attribute] =  null;
            }
        };

        $polls = $query->get();

        return view('polls.index')
            ->with('polls', $polls)
            ->with('attributes', $attributes);
    }

	public function create()
	{
		$user = Auth::user();
		$company = $user->company;
		$poll = $company->poll;
		$questions=Survey_q::where('survey_id','2')->get();

		$encuesta = polls2s::orderBy('id_poll','desc')->get();
		
		return view('polls.show2')->with('company', $company)
		->with('poll',$poll)
		->with('questions',$questions)
		->with('encuesta', $encuesta);
	
	}
	

    public function store(Request $request)
	{
        $input = $request->all();
        $user = Auth::user();
        $company = $user->company;
		$polls = Pollscompany::where('company_id', $company->id)->get();
		$preguntas=Survey_q::where('survey_id','=','2')->get();

		//$questions = Survey_q::where('survey_id',2)->get();
		//var_dump($polls);

       //var_dump($input);
        //$input['question_1'] = $user->name;
        //$input['question_2'] = $company->phone;
        //$input['question_3'] = $user->email;
        
      $input['company_id'] = $company->id;

         DB::table('pollscompany')->insert(
   
   	 ['question_1' => $input['question_1'],
   	  'question_2' => $input['question_2'],
   	  'question_3'=>$input['question_3'],
   	  'question_4'=>$input['question_4'],
   	  'question_5'=>$input['question_5'],
   	   'question_6'=>$input['question_6'],
   	   'question_7'=>$input['question_7'],
   	  'question_8'=>$input['question_8'],
   	   'question_9'=>$input['question_9'],
   	   'question_10'=>$input['question_10'],
   	   'question_11'=>$input['question_11'],
   	   'question_12'=>$input['question_12'],
   	  'question_13'=>$input['question_13'],
   	  //'comment'=>$input['question_15'],
   	   'company_id'=>$input['company_id'],
   	   'created_at'=>date('Y-m-d H:i:s'),
   	   'updated_at'=>date('Y-m-d H:i:s')
   	  ]
	);
        
		Alert::success('Encuesta Guardada Exitosamente.')->persistent('Cerrar');

    	$encuesta = polls2s::orderBy('id_poll','desc')->get();

		return view('polls.show2')->with('polls', $polls)
		->with('company', $company)
		->with('questions', $preguntas)
    	->with('encuesta', $encuesta);
		
	}


	public function show($id)
	{
		$poll = Pollscompany::find($id);

		if(empty($poll))
		{
			Flash::error('Poll not found');
			return redirect(route('polls.index'));
		}

		return view('polls.show2')->with('poll', $poll);
	}


	

public function update($id, CreatePollRequest $request)
	{
		$polls = Pollscompany::find($id);
		$user = Auth::user();
        $company = $user->company;
		$questions=Survey_q::where('survey_id','2')->get();

		if(empty($polls))
		{
			Flash::error('Poll not found');
			
		}

		$polls->fill($request->all());
		$polls->save();

		Flash::message('Actualizada correctamente');

		return view('polls.show2')->with('company', $company)
		->with('polls', $polls)
		->with('questions', $questions);
		dd($input);
	}


public function edit($id)
	{
		$poll =Pollscompany::find($id);

		if(empty($poll))
		{
			Flash::error('No esta la encuesta');
			
		}

		return view('partials.upsurveycompany')->with('poll', $poll);
	}


	





}