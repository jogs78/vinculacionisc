<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pollscompany extends Model
{
     public $table = "pollscompany";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "question_1",
		"question_2",
		"question_3",
		"question_4",
		"question_5",
		"question_6",
		"question_7",
		"question_8",
		"question_9",
		"question_10",
		"question_11",
		"question_12",
		"question_13",
		"question_14",
		"company_id"
	];

	public static $rules = [
		/*"question_4" => "required",
		"question_5" => "required",
		"question_6" => "required",
		"question_7" => "required",
		"question_8" => "required",
		"question_9" => "required",
		"question_10" => "required",
		"question_11" => "required",
		"question_12" => "required",
		"question_13" => "required",
		"question_14" => "required",*/
	];

}
