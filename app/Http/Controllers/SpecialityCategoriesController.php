<?php

namespace App\Http\Controllers;
use App\SpecialityCategories;
use Illuminate\Http\Request;

class SpecialityCategoriesController extends Controller
{
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
            'speciality_id' => 'required'
        ]);
  
        $specialitycategories = SpecialityCategories::create($request->all());
   
        return $specialitycategories;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProvidersCategories  $providersCategories
     * @param   $providerId
     * @return \Illuminate\Http\Response
     */
    public function showbyProviderId(Request $request, $providerId)
    {
        /** @var  $provider_Id */

        $provider_Id = (int)$providerId;
        /*
        $result = ProvidersCategories::where('provider_id', $provider_Id)
                    -> with('category')
                    -> get();
        */
        $result = SpecialityCategories::where('provider_id', $provider_Id)
                -> with('speciality')
                -> with('category')
                -> get();
/*
        foreach ($result as $item){
            $name = $item;
        }*/
        return $result;
    }


}
