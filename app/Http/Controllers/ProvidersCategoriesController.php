<?php

namespace App\Http\Controllers;

use App\ProvidersCategories;
use App\Category;
use Illuminate\Support\Facades\DB;

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

        $providerId = (int)$providerId;
        $result = DB::table('providers_categories')
                    ->join('categories', 'categories.id', 'providers_categories.category_id')
                    -> select ( 'providers_categories.category_id as category_id',
                                'categories.name as category_name')
                        ->where('providers_categories.provider_id', $providerId)
                        ->get();

        /*                
        $result = ProvidersCategories::where('provider_id', $provider_Id)
                -> with('category')
                -> select ('category_id')
                -> get();
*/
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
