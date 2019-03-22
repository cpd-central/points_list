<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PointsListController extends Controller
{
	public function relayindex($id)
	{
		#get all of the relays within this project and show on page 
		$relays = Project::find($id)->relays;
		return view('/projectedit', compact('relays', 'id'));	
	}	

	public function addrelay()
	{
		return view('/addrelay');	
	}

	public function storerelay(Request $request, $id)
	{
		$relay = $request->get('relayname');
		$project = Project::find($id);
		$relays = $project['relays'];
		$relays = array_push($relays, $relay);
		$project->relays = $relays;	
		return view('/projectedit', compact('relays', 'id'));	
	}
}
