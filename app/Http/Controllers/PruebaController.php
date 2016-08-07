<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PruebaController extends Controller
{
    public function index()
    {
    	return view('phpinfo');
    }
}
