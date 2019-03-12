<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateResidentsRequest;
use App\Models\Residents;
use App\Models\Period;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;
use Alert;
use Auth;

class ResidentsController extends AppBaseController
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
				$query = Residents::query();
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

        $residents = $query->get();

        return view('residents.index')
            ->with('residents', $residents)
            ->with('attributes', $attributes);
	}

	/**
	 * Show the form for creating a new Residents.
	 *
	 * @return Response
	 */
	public function create()
	{
		$periods = Period::pluck('description','description');
		return view('residents.create')
		->with('periods', $periods);
	}

	/**
	 * Store a newly created Residents in storage.
	 *
	 * @param CreateResidentsRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateResidentsRequest $request)
	{
        $user = Auth::user();
		$company = $user->company;
		$input = $request->all();
		$input['company_id'] = $company->id;

		$resident = Residents::create($input);

		Alert::success('Solicitud de Residentes Generada Exitosamente!')->persistent("Cerrar");

		return redirect(route('residents.index'));
	}

	/**
	 * Display the specified Residents.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$periods = Period::pluck('description','description');
		$residents = Residents::find($id);

		if(empty($residents))
		{
			Flash::error('Residents not found');
			return redirect(route('residents.index'));
		}

		return view('residents.show')->with('residents', $residents);
	}

	/**
	 * Show the form for editing the specified Residents.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$residents = Residents::find($id);

		if(empty($residents))
		{
			Flash::error('Residents not found');
			return redirect(route('residents.index'));
		}

		return view('residents.edit')->with('periods', $periods)->with('residents', $residents);
	}

	/**
	 * Update the specified Residents in storage.
	 *
	 * @param  int    $id
	 * @param CreateResidentsRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateResidentsRequest $request)
	{
		/** @var Residents $residents */
		$residents = Residents::find($id);

		if(empty($residents))
		{
			Flash::error('Residents not found');
			return redirect(route('residents.index'));
		}

		$residents->fill($request->all());
		$residents->save();

		Alert::success('Solicitud Editada Exitosamente!')->persistent("Cerrar");

		return redirect(route('residents.index'));
	}

	/**
	 * Remove the specified Residents from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Residents $residents */
		$residents = Residents::find($id);

		if(empty($residents))
		{
			Flash::error('Residents not found');
			return redirect(route('residents.index'));
		}

		$residents->delete();

		Alert::success('Solicitud Eliminada Exitosamente!')->persistent("Cerrar");

		return redirect(route('residents.index'));
	}
}
