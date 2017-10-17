<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class startTaskuser extends Model
{
   protected $primaryKey = 'id';
   protected $fillable = [
        'idTask',
		'idUser',
     	'titleTask',
     	'descriptionTask',
     	'startTask',
     	'endTask',
     	'startTaskuser',
        'startTasklatitude',
     	'startTasklongitude',
        'statusTask'
     ];
}
