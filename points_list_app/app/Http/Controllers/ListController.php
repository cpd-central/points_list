<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Protocol;
use App\Relay;
use App\User;


class ListController extends Controller
{
	public function protocolindex()
	{
		$protocols=Protocol::all();	
		return view('protocolindex', compact('protocols'));
	}
	
	public function relayindex()
	{
		return view('relayindex');
	}

	public function edit($id)
	{
		return Null;
	}

	public function destroy($id)
	{
		return Null;
	}
}
