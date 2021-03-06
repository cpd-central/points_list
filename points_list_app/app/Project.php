<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Project extends Eloquent 
{
	protected $connection = 'mongodb';
	protected $collection = 'projects';

	protected $fillable = [
		'projectname', 'relays'
	];
}
