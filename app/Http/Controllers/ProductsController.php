<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index()
    {
        $allProducts = Product::all();
        return view("products.index", ['products' => $allProducts]);
    }

    public function show(Product $product)
    {
        return view("products.show", ['product' => $product]);
    }

    public function edit(Product $product)
    {
        $productId = Product::find($product->id);
        if (isset($productId)) {
            return view("products.edit", ['product' => $productId]);
        } else return to_route("products.index");
    }

    public function create()
    {
        return view("products.create");
    }

    public function destroy(Product $product)
    {
        $foundedProduct = Product::find($product->id);
        $foundedProduct->delete();
        return to_route("products.index", $product->id);
    }

    public function store()
    {
        // @dd(request()->all());
        request()->validate(
            [
                'name' => 'required|string',
                'description' => 'required|string|max:200',
                'img' => 'required|mimes:png,jpg,jpeg',
                'price' => 'required|integer|max:100000',
                'sale' => 'required|integer|max:100',
                'isPopular' => 'required|boolean',
            ],
        );
        $path = null;
        if (request()->hasFile('img')) {
            $path = request()->file('img')->store('products', 'public');
            // This stores in storage/app/public/products and returns the relative path
        }
        // <img src="{{ asset('storage/'.$product->img) }}" alt="Product image">

        Product::create(
            [
                'name' => request()->name,
                'description' => request()->description,
                'img' => $path,
                'price' => request()->price,
                'sale' => request()->sale,
                'isPopular' => request()->isPopular,
            ]
        );
        return redirect()->route("products.index");
    }
    public function update(Product $product)
{
    request()->validate([
        'name'        => 'required|string',
        'description' => 'required|string|max:200',
        'img'         => 'nullable|mimes:png,jpg,jpeg',
        'price'       => 'required|integer|max:100000',
        'sale'        => 'required|integer|max:100',
        'isPopular'   => 'required|boolean',
    ]);

    $data = request()->only(['name', 'description', 'price', 'sale', 'isPopular']);

    // Handle image
    if (request()->hasFile('img')) {
        // optional: delete old image
        if ($product->img && Storage::exists('public/' . $product->img)) {
            Storage::delete('public/' . $product->img);
        }

        $path = request()->file('img')->store('products', 'public');
        $data['img'] = $path; 
    }

    $product->update($data);

    return redirect()->route('products.show', $product->id);
}
}
