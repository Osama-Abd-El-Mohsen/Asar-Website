<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $allProducts = Product::all();
        return view("products.index",['products'=>$allProducts]);
    }

    public function show(Product $product)
    {
        return view("products.show",['product'=>$product]);
    }

    public function create()
    {
        return view("products.create");
    }

    public function store()
    {
        // @dd(request()->all());
        request()->validate(
        [
                'name'=>'required|string',
                'description'=>'required|string|max:200',
                'price'=>'required|int',
                'sale'=>'required|int|max:100',
            ],

        );
        @dd(request()->all());
        return view("products.create");
    }
}
