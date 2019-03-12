<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
class Events extends Model
{
    protected $table ="events";
    protected $fillable = [
         'name',
         'path',
         'description',
         'duration',
         'fecha',
         'addres',
         'type_events'
    ];

    public function setPathAttribute($path){
    	if(! empty($path)){
			$name = Carbon::now()->second.$path->getClientOriginalName();
			$this->attributes['path'] = $name;
			\Storage::disk('local')->put($name, \File::get($path));
    	}
	}
 
    public static function Eventos(){
		return DB::table('events')->get();
	}
/*
    public static function Eventos(){
    return DB::table('events')->where('type_events', 'Eventos')->get();
    }


    public function scopeType($query, $type_event){
       //dd($type_event);
       return $query->where('type_events','LIKE',"$%type_event%");


    }

    public function scope($query, $type_event){
       //dd($type_event);
       return $query->where('type_events','LIKE',"$%type_event%");


    }
*/
}
