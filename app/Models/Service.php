<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    
	public $table = "services";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "task",
		"area",
		"contact",
		"period",
		"company_id"
	];

	public static $rules = [
	    "task" => "required|max:1000",
		"area" => "required|max:1000",
		"contact" => "required|max:1000",
		"period" => "required"
	];

	public function company()
	{
		return $this->belongsTo('App\Models\Company');
	}


}
