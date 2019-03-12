<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Survey_q extends Model
{
    
	public $table = "survey_qs";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "q_format",
		"q_text",
		"q_createdby",
		"q_status",
		"survey_id"
	];

	public static $rules = [
	    "q_format" => "required",
		"q_text" => "required",
		"q_createdby",
		"q_status" => "required"
	];

	public function survey()
	{
		return $this->belongsTo('App\Models\Survey');
	}

	public function options()
	{
		return $this->hasMany('App\Models\Survey_o');
	}

	public function answers()
	{
		return $this->hasMany('App\Models\Survey_a');
	}


	public static function Surveyqemp(){
		
    return DB::table('survey_qs')->where('survey_id', '2')->get();
    }

	



}
