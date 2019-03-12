<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Http\Requests;
use App\Models\Depi;
class DepisTeacherController extends Controller
{

    public function index(Request $request)
	{   
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

        return view('depis.index2')
            ->with('depis', $vacancies)
            ->with('attributes', $attributes);
		
	}











}
