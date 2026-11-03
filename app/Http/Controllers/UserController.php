<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index() {
        return view('users');
    }

    function getUsers() {
        return view('users', ['name' => 'Kailash']);
    }

    //  function getDetails($name) {
    //     return view('users', ['name' => $name]);
    // }

    function getDetails($name) {
        return view('user.welcome-user', ['name' => $name]);
    }

    
}
