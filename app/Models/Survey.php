<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class Survey extends Model
{
    
	public $table = "surveys";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "survey_title",
		"survey_text",
		"survey_status",
		"type_encuesta"
	];

	public static $rules = [
	    "survey_title" => "required",
		"survey_text" => "required",
		"survey_status" => "required",
		"type_encuesta" =>"required"
	];

	public function questions()
	{
		return $this->hasMany('App\Models\Survey_q');
	}

	public static function Surveycomp(){
		
    return DB::table('surveys')->where('type_encuesta', '2')->get();
    }

		
}
