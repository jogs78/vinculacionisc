<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Survey_q;
use App\Models\Survey;

use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;



class Survey_qempController extends Controller
{
     public function index(Request $request)
	{
		$Surveycomp=Survey::SurveyComp();

        return view('surveys.index2')
            ->with('surveyscomp', $Surveycomp);
	}
	
    public function store(Request $request)
	{
        $input = $request->all();

		$surveyQ = Survey_q::create($input);

		//Flash::message('Survey_q saved successfully.');
		Alert::success('Pregunta agregada exitosamente');

		return redirect(route('surveyscom.index'));
	}

	public function edit($id)
	{
		$surveyQ =Survey_q::find($id);

		if(empty($surveyQ))
		{
			Flash::error('Survey_q not found');
			return redirect(route('surveyQs.index2'));
		}

		return view('surveyQs.edit2')->with('surveyQ', $surveyQ);
	}


	/**
	 * Update the specified Survey_q in storage.
	 *
	 * @param  int    $id
	 * @param CreateSurvey_qRequest $request
	 *
	 * @return Response
	 */
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

		return redirect(route('surveyscom.index'));
	}




}
