<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    
	public $table = "shippings";

	public $primaryKey = "id";
    
	public $timestamps = true;

	public $fillable = [
	    "title",
		"body",
		"file",
		"tipocorreo"
	];

	public static $rules = [
	    "title" => "required",
		"body" => "required",
		"tipocorreo" => "required"
	];

}
