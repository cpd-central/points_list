<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Protocol extends Eloquent 
{
	protected $connection = 'mongodb';
	protected $collection = 'protocols';

	protected $fillable = ['Name', 'Types'];
}
