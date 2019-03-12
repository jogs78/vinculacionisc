<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePollRequest;
use App\Models\Poll;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Auth;
use Alert;
use App\User;
use App\Models\Graduate;
use App\Models\Period;
use DB;


class PollController extends AppBaseController
{

	/**
	 * Display a listing of the Post.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$query = Poll::query();
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

	/**
	 * Show the form for creating a new Poll.
	 *
	 * @return Response
	 */
	public function create()
	{
		$user = Auth::user();
		$graduate = $user->graduate;
		$poll = $graduate->poll;
		$periods = Period::pluck('description', 'description');
		
		if (isset($poll)) {
			return view('polls.show')->with('graduate', $graduate);
		}else{
			return view('polls.create')
			->with('periods', $periods);
		}
	}

	/**
	 * Store a newly created Poll in storage.
	 *
	 * @param CreatePollRequest $request
	 *
	 * @return Response
	 */
	public function store(CreatePollRequest $request)
	{
        $input = $request->all();
        $user = Auth::user();
        $graduate = $user->graduate;

       //var_dump($input);
       /* $input['question_1'] = $user->name;
        $input['question_2'] = $graduate->phone;
        $input['question_3'] = $user->email;
        */
      $input['graduate_id'] = $graduate->id;

         DB::table('polls')->insert(
   
   	 ['question_1' => $input['question_1'],
   	  'question_2' => $input['question_2'],
   	  'question_3'=>$input['question_3'],
   	   'question_4'=>$input['question_5'],
   	   'question_5'=>$input['question_4'],
   	   'question_6'=>$input['question_6'],
   	   'question_7'=>$input['question_7'],
   	   'question_8'=>$input['question_8'],
   	   'question_9'=>$input['question_9'],
   	   'question_10'=>$input['question_10'],
   	   'question_11'=>$input['question_11'],
   	   'question_12'=>$input['question_12'],
   	   'question_13'=>$input['question_13'],
   	   'question_14'=>$input['question_14'],
   	   'comment'=>$input['question_15'],
   	   'graduate_id'=>$input['graduate_id'],
   	   'created_at'=>date('Y-m-d H:i:s'),
   	   'updated_at'=>date('Y-m-d H:i:s')
   	  ]
	);
        
		Alert::success('Encuesta Guardada Exitosamente.')->persistent('Cerrar');

		return view('polls.show')->with('graduate', $graduate);
		dd($input);
	}

	/**
	 * Display the specified Poll.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$poll = Poll::find($id);

		if(empty($poll))
		{
			Flash::error('Poll not found');
			return redirect(route('polls.index'));
		}

		return view('polls.show')->with('poll', $poll);
	}

	/**
	 * Show the form for editing the specified Poll.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$poll = Poll::find($id);

		if(empty($poll))
		{
			Flash::error('Poll not found');
			return redirect(route('polls.index'));
		}

		return view('partials.upsurveygraduate')->with('poll', $poll);
	}

	/**
	 * Update the specified Poll in storage.
	 *
	 * @param  int    $id
	 * @param CreatePollRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreatePollRequest $request)
	{
		/** @var Poll $poll */
		$poll = Poll::find($id);
		 $user = Auth::user();
        $graduate = $user->graduate;
   
		if(empty($poll))
		{
			Flash::error('Poll not found');
			
		}

		
			$poll->question_1 = $request->question_1;
			$poll->question_2 = $request->question_2;
			$poll->question_3 = $request->question_3;
			$poll->question_4 = $request->question_5;
			$poll->question_5 = $request->question_4;
			$poll->question_6 = $request->question_6;
			$poll->question_7 = $request->question_7;
			$poll->question_8 = $request->question_8;
			$poll->question_9 = $request->question_9;
			$poll->question_10 = $request->question_10;
			$poll->question_11 = $request->question_11;
			$poll->question_12 = $request->question_12;
			$poll->question_13 = $request->question_13;
			$poll->question_14 = $request->question_14;
			$poll->comment = $request->question_15;

	        $poll->save();
              




		Flash::message('Poll updated successfully.');

		return view('polls.show')->with('graduate', $graduate);
		dd($input);
	}

	/**
	 * Remove the specified Poll from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Poll $poll */
		$poll = Poll::find($id);

		if(empty($poll))
		{
			Flash::error('Poll not found');
			return redirect(route('polls.index'));
		}

		$poll->delete();

		Flash::message('Poll deleted successfully.');

		return redirect(route('polls.index'));
	}


	public function edit2($id)
	{
		$poll = Poll::find($id);

		if(empty($poll))
		{
			Flash::error('Poll not found');
			return view('partials.upsurveygraduate');
		}
				
		return view('partials.upsurveygraduate')->with('poll', $poll);
	}











}
