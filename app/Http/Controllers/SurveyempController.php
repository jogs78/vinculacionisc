<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateSurveyRequest;
use App\Models\Survey;
use App\Models\Survey_q;

use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

class SurveyempController extends Controller
{
    public function index(Request $request)
	{
		$Surveycomp=Survey::SurveyComp();

        return view('surveys.index2')
            ->with('surveyscomp', $Surveycomp);
	}
	
	
	public function create()
	{
		return view('surveys.create2');
	}

	public function viewQuestions(Request $request)
	{
		$Surveyqemp=Survey_q::Surveyqemp();
		
		return view('surveyQs.index2')
		->with('surveyQs', $Surveyqemp);
	}


	public function store(Request $request)
	{
        $input = $request->all();

		$survey = Survey::create($input);

		Flash::message('Survey saved successfully.');

		return redirect(route('surveyscom.index'));
	}


	public function update($id, Request $request)
	{
		/** @var Survey $survey */
		$survey = Survey::find($id);

		if(empty($survey))
		{
			Flash::error('Survey not found');
			return redirect(route('surveyscom.index'));
		}

		$survey->fill($request->all());
		$survey->save();

		Flash::message('Survey updated successfully.');

		return redirect(route('surveyscom.index'));
	}



	public function edit($id)
	{
		$survey = Survey::find($id);

		if(empty($survey))
		{
			Flash::error('Survey not found');
			return redirect(route('surveyscom.index'));
		}

		return view('surveys.edit2')->with('survey', $survey);
	}



	public function destroy($id)
	{
		/** @var Survey $survey */
		$survey = Survey::find($id);

		if(empty($survey))
		{
			Flash::error('Survey not found');
			return redirect(route('surveyscom.index'));
		}

		$survey->delete();

		Flash::message('Survey deleted successfully.');

		return redirect(route('surveyscom.index'));
	}

}
