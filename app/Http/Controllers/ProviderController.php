<?php

namespace App\Http\Controllers;
use App\provider;
use App\User;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::all();
        
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
    public function show(provider $provider, $id)
    {
        $infoProvider = Provider::find($id);
        return $infoProvider;
    }
    
    /**
     * Display the specified resource by userId
     *
     * @param  \App\provider  $provider
     * @return \Illuminate\Http\Response
     */
    public function showbyUserId(provider $provider, $userid)
    {
        $user_id = (int)$userid;

        $provider = DB::table('users')
                ->join('providers', 'users.id', '=', 'providers.user_id')
                -> join('cities', 'cities.id', '=', 'providers.city_id')
                -> select ( 'users.id as user_id',
                            'users.email as user_email',
                            'users.user_type as user_user_type',
                            'providers.id as provider_id',
                            'providers.email as provider_email',
                            'providers.cuit_number as provider_cuit_number',
                            'providers.enrollment_number as provider_enrollment_number',
                            'providers.business_name as provider_business_name',
                            'cities.location as city_location')
            ->where('users.id', $user_id)
            ->get();

        return $provider;
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
