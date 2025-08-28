<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Exceptions\InvalidOrderException;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signup()
    {
        $user = User::firstOrCreate(
            ['email' => request()->email], // search by email
            [
                'name' => request()->name,
                'password' => bcrypt(request()->password),
            ]
        );

        // Fire Registered event only if it was created
        if ($user->wasRecentlyCreated) {
            event(new Registered($user));
        }

        // Log them in regardless
        Auth::login($user);

        return redirect()->route('products.index');
    }
}
