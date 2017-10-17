<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class endTaskuser extends Model
{
      protected $primaryKey = 'id';
   protected $fillable = [
        'idTask',
		'idUser',
     	'titleTask',
     	'descriptionTask',
     	'startTask',
     	'endTask',
     	'endTaskuser',
     	'endTasklatitude',
     	'endTasklongitude',
        'statusTask'
     ];
}
