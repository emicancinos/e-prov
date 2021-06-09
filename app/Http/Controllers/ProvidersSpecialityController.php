<?php

namespace App\Http\Controllers;

use App\ProvidersSpeciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvidersSpecialityController extends Controller
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
            'speciality_id' => 'required',
        ]);
  
        $providersSpeciality = ProvidersSpeciality::create($request->all());
   
        return $providersSpeciality;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\providers_speciality  $providers_speciality
     * @return \Illuminate\Http\Response
     */
    public function showbyProviderId(ProvidersSpeciality $providers_speciality, $providerId)
    {
        $providerId = (int)$providerId;

        $result = DB::table('providers_specialities')
                    ->join('specialities', 'specialities.id', 'providers_specialities.speciality_id')
                    -> select ( 'providers_specialities.speciality_id as speciality_id',
                                'providers_specialities.provider_id as provider_id',
                                'specialities.description as specility_description',
                                'specialities.category_id as category_id')
                        ->where('providers_specialities.provider_id', $providerId)
                        ->get();
        /*
        //$result = ProvidersSpeciality::finda($providerId);
        $result = ProvidersSpeciality::where('provider_id', $providerId)
                -> select (['id', 'provider_id','speciality_id'])
                -> with ('speciality')
                -> get();
        */
        return $result;
    }

        /**
     * Display the specified resource by provider
     *
     * @param  \App\providers_speciality  $providers_speciality
     * @return \Illuminate\Http\Response
     */
    public function show(ProvidersSpeciality $providers_speciality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\providers_speciality  $providers_speciality
     * @return \Illuminate\Http\Response
     */
    public function edit(ProvidersSpeciality $providers_speciality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\providers_speciality  $providers_speciality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProvidersSpeciality $providers_speciality)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\providers_speciality  $providers_speciality
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProvidersSpeciality $providers_speciality)
    {
        //
    }
}
