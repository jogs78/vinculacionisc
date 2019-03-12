<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class polls2s extends Model
{
    //
    protected $table = 'polls2s';
    public $primaryKey = 'id_poll';
    protected $fillable = ['id_poll','question1', 	'question2' ,	'question3' ,	'question4' ,	'question5', 	'question6' ,	'question7', 	'question8' 	,'question9' ,	'Comentarios' ,	'id_empresa' ,	'created_at' ,	'updated_at'];
    public $timestamps = true;
}
