<?php

namespace App\Http\Controllers;

use App\ProvidersCategories;
use App\Category;

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
     * Display the specified resource.
     *
     * @param  \App\ProvidersCategories  $providersCategories
     * @param   $providerId
     * @return \Illuminate\Http\Response
     */
    public function showbyProviderId(ProvidersCategories $providersCategories, $providerId)
    {
        /** @var  $provider_Id */

        $provider_Id = (int)$providerId;
        /*
        $result = ProvidersCategories::where('provider_id', $provider_Id)
                    -> with('category')
                    -> get();
        */
        $result = ProvidersCategories::where('provider_id', $provider_Id)
                -> with('category')
                -> select ('category_id')
                -> get();

        return $result;
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
