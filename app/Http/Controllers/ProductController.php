<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function create(Request $request) {
        return view('create');
    }

    public function store(Request $request) {
        $request->validate([
            'product_name' => 'required|unique:products|max:255',
            'price' => 'required',
            'category' => 'required',
            'image_url' => 'required|url'
        ]);
        Product::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'category' => $request->category,
            'image_url' => $request->image_url
        ]);

        return redirect()->route('home');
    }

    public function delete($product_id) {
        Product::whereProductId($product_id)->delete();
        return redirect()->route('home');
    }
}
