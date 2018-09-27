<?php

namespace App\Http\Controllers;

use App\Raw_material;
use Illuminate\Http\Request;

class RawMaterialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('frond.raw_materials.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Raw_material  $raw_material
     * @return \Illuminate\Http\Response
     */
    public function show(Raw_material $raw_material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Raw_material  $raw_material
     * @return \Illuminate\Http\Response
     */
    public function edit(Raw_material $raw_material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Raw_material  $raw_material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Raw_material $raw_material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Raw_material  $raw_material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Raw_material $raw_material)
    {
        //
    }
}
