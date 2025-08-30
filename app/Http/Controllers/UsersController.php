<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UsersController extends Controller
{
    public function index ()
    {
        $allProducts = Product::all();
        return view("users.index",['products'=>$allProducts]);
    }
}
