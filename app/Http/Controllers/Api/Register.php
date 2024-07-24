<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class Register extends Controller
{
    public function Store (Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:8',

        ]);
        $user = User::create($request->all());
        return response($user, 200);

    }
}
