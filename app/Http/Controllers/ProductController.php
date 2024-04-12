<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function phoneIndex()
    {
        $products = Product::where('type',true)->paginate(12);

        return view('product.phone.index',[
            'products' => $products
        ]);
    }

     /**
     * Display a listing of the computer products.
     *
     * @return \Illuminate\Http\Response
     */
    public function computersIndex()
    {
        $products = Product::where('type',false)->paginate(12);

        return view('product.computer.index',[
            'products' => $products
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show',[
            'product' => $product
        ]);
    }
}
