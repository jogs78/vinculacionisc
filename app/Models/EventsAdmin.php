<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class EventsAdmin extends Model
{
    public $table = "education";


	public $primaryKey = "id";
    
	public $timestamps = true;


	protected $fillable = [
	    "name",
		"path",
		"description",
		"direction",
		"date",
		"duration",
		"type_events"
	];

    public static $rules = [
	    "name"=> "required",
		"path"=> "requiered",
		"description"=> "required",
		"direction"=> "required",
		"date"=> "required",
		"duration"=> "required",
		"type_events"=> "required"
	];

   /* public function setPathAttribute($path){
        $this->attributes['path'] = Carbon::now()->second.$path->getClienteOriginalName();
        $name=Carbon::now()->second.$path->getClienteOriginalName();
        \Storage::disk('local')->put($name, \File::get($path));
    }*/
	/*public function setPathAttribute($path){
		$name = Carbon::now()->second.$path->getClientOriginalName();
		$this->attributes['path'] = $name;
		\Storage::disk('local')->put($name, \File::get($path));
	}*/

}
