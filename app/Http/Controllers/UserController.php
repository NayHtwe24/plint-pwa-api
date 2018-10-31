<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    /**
     * Create a new user with a random name and return it
     * @return new user object as json
     */
    public function store()
    {
        // create a new user instance.
        // name of the user is just a hashed string
        $user = User::create(['name' => str_random(20)]);

        return response()->json(compact('user'));
    }
}