<?php namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Requests\CreateDepiRequest;
use App\Models\Depi;
//use App\Models\DB;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use Schema;

use Alert;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;



class DepiController extends AppBaseController
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
		$depis=Depi::Depis();
		return view('depis.index',compact('depis'));
		
	}
/*
		$query = Depi::query();
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

        $depis = $query->get();
     
  	

       return view('depis.index')
           	 ->with('depis', $depis)
				->with('attributes', $attributes);
  */          
	

	/**
	 * Show the form for creating a new Depi.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('depis.create');
	}

	/**
	 * Store a newly created Depi in storage.
	 *
	 * @param CreateDepiRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateDepiRequest $request)
	{
        $input = $request->all();

        
    
       $residente="";

      for ($i=0; $i <sizeof($input["names_residents"]); $i++) { 
      	
      		
      			$residente.=$input["names_residents"][$i].".";	

			
      	
      }


     DB::table('depis')->insert(
   
   	 ['name_project' => $input["name_project"],
   	  'line_investigation' => $input["line_investigation"],
   	  'name_residence'=>$input["name_residence"],
   	   'names_residents'=>$residente,
   	   'name_tesis'=>$input["names_tesis"],
   	   'names_tesis'=>$input["names_tesis"],
   	   'publications'=>$input["publications"],
   	   'publications_number'=>$input["publications_number"],
   	   'name_magazine'=>$input["name_magazine"],
   	   'type_publication'=>$input["type_publication"],
   	   'name_article'=>$input["name_article"],
   	   'prototype'=>$input["prototype"],
   	   'patents'=>$input["patents"],
   	   'validity_of'=>$input["validity_of"],
   	   'valid_at'=>$input["valid_at"],
   	   'others'=>$input["others"],
   	   'teacher_id'=>$input['teacher_id'],
   	   'created_at'=>date("Y-m-d H:i:s"),
   	   'updated_at'=>date("Y-m-d H:i:s")
   	  ]
	);
	
		Alert::success('Registrado con exito');

		return redirect(route('depis.index'));
		
		
				
		
	}

	/**
	 * Display the specified Depi.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$depi = Depi::find($id);

		if(empty($depi))
		{
			Flash::error('Depi not found');
			return redirect(route('depis.index'));
		}

		return view('depis.show')->with('depi', $depi);
	}

	/**
	 * Show the form for editing the specified Depi.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$depi = Depi::find($id);

		if(empty($depi))
		{
			Flash::error('Depi not found');
			return redirect(route('depis.index'));
		}

		return view('depis.edit')->with('depi', $depi);
	}

	/**
	 * Update the specified Depi in storage.
	 *
	 * @param  int    $id
	 * @param CreateDepiRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateDepiRequest $request)
	{
		/** @var Depi $depi */
		$depi = Depi::find($id);

		if(empty($depi))
		{
			Flash::error('Depi not found');
			return redirect(route('depis.index'));
		}

		$depi->fill($request->all());
		$depi->save();

		Flash::message('Depi updated successfully.');

		return redirect(route('depis.index'));
	}

	/**
	 * Remove the specified Depi from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		/** @var Depi $depi */
		$depi = Depi::find($id);

		if(empty($depi))
		{
			Flash::error('Depi not found');
			return redirect(route('depis.index'));
		}

		$depi->delete();

		Flash::message('Depi deleted successfully.');

		return redirect(route('depis.index'));
	}
}
