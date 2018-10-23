<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    //

    public function index()
    {
    	return view('frond.navbar.index');
    }

}
