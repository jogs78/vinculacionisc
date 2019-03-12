<?php

namespace App\Http\Controllers;

use App\ Http\ Requests;
use App\ Http\ Requests\ CreateCompanyRequest;
use App\ Models\ Company;
use Illuminate \Http  \Request;
use Mitul \Controller \AppBaseController;
use Response;
use Flash;
use Schema;
use Hash;
use Alert;
use App \User;
use App \Role;
use Illuminate \Support \Facades \Input;
use Auth;
use DB;

class EmpresaController extends Controller
{
    public function edit($id)
	{
		$company = Company::find($id);

		if(empty($company))
		{
			Flash::error('Company not found');
			return redirect(route('companies.index'));
		}

		return view('companies.edit2')->with('company',$company);
	}




	public function update($id, CreateCompanyRequest $request)
	{
		/** @var Company $company */
		$company = Company::find($id);

		if(empty($company))
		{
			Flash::error('Company not found');
			return redirect(route('companies.index'));
		}

		$company->fill($request->all());
		$company->save();

		Alert::success('Datos editados exitosamente!')->persistent("Cerrar");

		return view('companies.show')->with('company',$company);
	}
}
