<?php

namespace App\Http\Controllers;

use App\ProvidersCategories;
use Error;
use Illuminate\Http\Request;

class ProvidersCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'provider_id'=>'required',
            'category_id' => 'required',
        ]);
  
        $providersCategories = ProvidersCategories::create($request->all());
   
        return $providersCategories;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProvidersCategories  $providersCategories
     * @return \Illuminate\Http\Response
     */
    public function show(ProvidersCategories $providersCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProvidersCategories  $providersCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(ProvidersCategories $providersCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProvidersCategories  $providersCategories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProvidersCategories $providersCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProvidersCategories  $providersCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProvidersCategories $providersCategories)
    {
        //
    }
}
