<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\companies;
class ConsultaAjax2 extends Controller
{
  public function funcion(Request $value)
  {
if ($value->value == 'Todos') {
  $companies= DB::table('users')->join('companies','companies.user_id', '=', 'users.id')
  ->select('companies.name','companies.sector','companies.address','companies.phone',
  'companies.director','companies.contact','users.email')->get();
}
else {
  $companies= DB::table('users')->join('companies','companies.user_id', '=', 'users.id')
  ->select('companies.name','companies.sector','companies.address','companies.phone',
  'companies.director','companies.contact','users.email')
  ->where('companies.sector','=', $value->value)
  ->get();
}


  return view('reportes.tabla2',compact('companies'));

  }
}
