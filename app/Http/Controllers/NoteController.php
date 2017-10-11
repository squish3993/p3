<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    	public function __invoke() 
    	{
    		return view('welcome');
    	}
    	public function getNoteValue()
    	{
    		return 'This will process the form';
    	}
}


