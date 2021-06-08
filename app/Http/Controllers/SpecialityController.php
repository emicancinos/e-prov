<?php

namespace App\Http\Controllers;

use App\speciality;
use Illuminate\Http\Request;
use App\Http\Traits\ApiResponser;

class SpecialityController extends Controller
{
    use ApiResponser;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speciality = speciality::all();
        return $speciality;
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
     * @param  \App\speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function show($categoryId)
    {
        $speciality= speciality::where('category_id', $categoryId)->first();
        return $speciality;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function edit(speciality $speciality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, speciality $speciality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function destroy(speciality $speciality)
    {
        //
    }

   
}
