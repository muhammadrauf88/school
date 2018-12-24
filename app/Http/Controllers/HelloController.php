<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
	/**
	* Print 'Hello World' to the browser.
	*/
    public function helloWorld()
    {
    	return 'Hello World!';
    }
}
