<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
    return 'user';
    }

    public function insert(Request $request)
    {
        $user = $request;
        return User::create($request->all());
    }

    public function delete(Request $request, $id)
    {
        $user = $request;

        return DB::transaction(function () use ($id) {
        $request = User::findOrFail($id);
        $request->delete();

    
    }


}  
