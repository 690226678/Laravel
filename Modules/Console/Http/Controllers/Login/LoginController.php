<?php

namespace Modules\Console\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\{Crypt, Hash, Redis, Validator};

//use Modules\Common\Models\Admin\login;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        dd('111');
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string'
        ]);
        $username = $request->input('$username');
        $password = $request->input('password');

    }

}
