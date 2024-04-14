<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Productproperty\Ram;
use App\Http\Controllers\Controller;
use App\Models\Productproperty\Size;
use App\Models\Productproperty\Storage;
use App\Models\Productproperty\Processor;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('id')->paginate(15);

        return view('admin.product.index',[
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit',[
            'product' => $product,
            'processors' => Processor::pluck('name','id'),
            'rams' => Ram::pluck('id','capacity'),
            'sizes' => Size::pluck('id','length'),
            'storages' => Storage::pluck('id','capacity')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
