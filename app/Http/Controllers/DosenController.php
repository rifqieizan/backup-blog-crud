<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
Use App\Model\Dosen;


class DosenController extends Controller
{
	public function index()
	{
		$dosen=Dosen::get();
		
		foreach ($dosen as $value) 
		{	
			dd($value);
			# code...
		}
	}
}
