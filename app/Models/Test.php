<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    
	public $table = "tests";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "number",
		"title"
	];

	public static $rules = [
	    "number" => "required",
		"title" => "required"
	];

}
