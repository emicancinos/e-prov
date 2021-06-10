<?php

namespace App\Http\Controllers;
use App\provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {      
        $categoryId =  $request->category_id;

            if($categoryId == null){
                   $providers = Provider::all();
            } else{
                     $providers = DB::table('providers')
                     ->join('providers_categories', 'providers.id', '=', 'providers_categories.provider_id')
                     ->where('providers_categories.category_id', '=', $categoryId)
                     ->select('providers.*')
                     ->get();
            }          
        return $providers;
       
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
            'email'=>'required|string|email',
            'cuit_number' => 'required|string|min:11',
            'enrollment_number' => 'required|max:255',
            'business_name'=> 'required|string|max:255',  
        ]);
  
        $provider = provider::create($request->all());
   
        return $provider;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function show(provider $provider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function edit(provider $provider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, provider $provider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function destroy(provider $provider)
    {
        //
    }
}
