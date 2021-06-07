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
        $users = DB::table('users')
                ->get();

        $users = DB::table('users')
            ->join('providers', 'users.id', '=', 'providers.user_id')
            ->join('cities', 'cities.id', '=', 'providers.city_id')
            ->get();
        
        return $users;
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
