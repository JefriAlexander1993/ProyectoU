<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //
    public function index()
    {
    	return view('frond.pagePrincipal.index');
    }
}
