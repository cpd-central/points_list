<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Relay extends Eloquent 
{
	protected $connection = 'mongodb';
	protected $collection = 'relays';

	protected $fillable = ['Name', 'Model', 'Tags'];
}
