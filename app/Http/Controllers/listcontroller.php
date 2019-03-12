<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class listcontroller extends Controller
{
   function see()
   {

   	$survs= DB::table('users')
   	->join('companies','companies.user_id', '=', 'users.id')
   	->join('polls2s', 'polls2s.id_empresa','=','users.id')
  	->select('companies.name','companies.sector','companies.address','companies.phone',
  'companies.director','companies.contact','users.email')->get();


   		return view('administrator.list',compact('survs'));
   }

   function impr()
   {
   	
   	$survs= DB::table('users')
   	->join('companies','companies.user_id', '=', 'users.id')
   	->join('polls2s', 'polls2s.id_empresa','=','users.id')
  	->select('companies.name','companies.sector','companies.address','companies.phone',
  'companies.director','companies.contact','users.email')->get();

   	$pdf = \PDF::loadView('reportes.lista-survs',compact('survs'));
        return $pdf->download('lista.pdf');


   }


}
