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
}
