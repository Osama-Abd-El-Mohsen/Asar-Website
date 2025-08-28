<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Exceptions\InvalidOrderException;

class UserController extends Controller
{
    public function signup()
    {
        $validated = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $finded_email = User::where(['email'=> request()->email])->first();
        if(isset($finded_email->email))
        {
            return back()->withErrors([
                'signup' => "user already exist try to log in now",
                ]); ;
        }
        else{
            User::create(
                [
                    "name"=>request()->name,
                    "email"=>request()->email,
                    "password"=>request()->password,
                    ]
                );
            }
            return to_route("products.index");
    }

    public function login()
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $finded_email = User::where([
            'email'=> request()->email,
            ])->first();

        if(isset($finded_email))
        {
            if (Hash::check(request()->password, $finded_email->password)) {
                return to_route("products.index");
            }

            else {
                return back()->withErrors([
                'login' => 'Wrong Password Or Email',
                ]);
            }
        }

        else {
            return back()->withErrors([
            'login' => 'Wrong Password Or Email',
            ]);
        }
            // return "failed to login ";
        }


    }

