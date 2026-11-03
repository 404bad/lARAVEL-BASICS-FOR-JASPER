<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    function login($type = 'user') {
        if (!in_array($type, ['user', 'admin'])) {
            abort(404);
        }
        if ($type === 'admin') {
            return view('user.admin-login', ['type' => $type]);
        }
        return view('user.user-login', ['type' => $type]);
    }

     function signup() {
        return view('signup');
    }
}
