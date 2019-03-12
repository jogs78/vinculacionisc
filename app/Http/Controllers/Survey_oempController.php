<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey_o;
use App\Http\Requests;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use App\Models\Survey_q;


class Survey_oempController extends Controller
{	

	public function index(){
		
	}



    public function createCustom($id)
	{
		$question = Survey_q::find($id);
		$surveyOs = Survey_o::where('survey_q_id', $question->id)->get();
		return view('surveyOs.index2')
		->with('surveyOs', $surveyOs)
		->with('question', $question);
	}



	public function store(Request $request)
	{
        $input = $request->all();

		$surveyO = Survey_o::create($input);

		Flash::message('Survey_o saved successfully.');

		$question = Survey_q::find($surveyO->survey_q_id);
		$surveyOs = Survey_o::where('survey_q_id', $question->id)->get();
	//var_dump($surveyOs);
		//return redirect(route('surveyOs.index'))
	//	return view('surveyOs.index2')
	//	->with('surveyOs', $surveyOs)
	//	->with('question', $question);
		return redirect()->back();

	}

	public function update($id, Request $request)
	{
		/** @var Survey_q $surveyQ */
		$surveyQ = Survey_q::find($id);

		if(empty($surveyQ))
		{
			Flash::error('Survey_q not found');
			return redirect(route('surveyQscom.index'));
		}

		$surveyQ->fill($request->all());
		$surveyQ->save();

		Flash::message('Survey_q updated successfully.');

		return redirect(route('surveyQscom.index2'));
	}


	public function edit($id)
	{
		$surveyO = Survey_o::find($id);
		
		/*if(empty($surveyO))
		{
			Flash::error('Survey_o not found');
			return redirect(route('surveyOs.index'));
		}*/

		return view('surveyOs.edit2')->with('surveyO',$surveyO);
	}

	public function destroy($id)
	{

		/** @var Survey_o $surveyO */
		$surveyO = Survey_o::find($id);

		if(empty($surveyO))
		{
			Flash::error('Survey_o not found');
			return redirect(route('surveyOs.index'));
		}

		$surveyO->delete();

		Flash::message('ELIMINADA EXITOSAMENTE');

		//return redirect(route('surveyOs.index'));
		return redirect()->back();
	}


}
