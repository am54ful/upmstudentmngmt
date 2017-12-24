<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
require dirname(__DIR__) . '\..\..\vendor\autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;

use App\Applicant;

class MessageController extends Controller
{

	public function show()
	{
		
		$applicants = Applicant::where('id', '>=', 1)->limit(15)->get();
		// $applicants = Applicant::all();

		return view('home',compact('applicants'));
	}

	public function ajaXshow($id)
	{
		
		$applicants = Applicant::where('id', '>=', $id)->limit(20)->get();
		// $applicants = Applicant::all();

		return $applicants;
	}
}
