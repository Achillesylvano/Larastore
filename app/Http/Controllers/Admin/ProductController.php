<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Productproperty\Ram;
use App\Http\Controllers\Controller;
use App\Models\Productproperty\Size;
use App\Models\Productproperty\Storage;
use App\Http\Requests\ProductFormRequest;
use App\Models\Productproperty\Processor;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('created_at','desc')->paginate(15);

        return view('admin.product.index',[
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product;

        return view('admin.product.edit-create',[
            'product' => $product,
            'processors' => Processor::pluck('name','id'),
            'rams' => Ram::pluck('capacity','id'),
            'sizes' => Size::pluck('length','id'),
            'storages' => Storage::pluck('capacity','id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFormRequest $request)
    {
        $data = $request->validated();

        $product = Product::create($data);

        return to_route('admin.product.index')->with('success','Le produit a bien été créé');
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
        return view('admin.product.edit-create',[
            'product' => $product,
            'processors' => Processor::pluck('name','id'),
            'rams' => Ram::pluck('capacity','id'),
            'sizes' => Size::pluck('length','id'),
            'storages' => Storage::pluck('capacity','id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductFormRequest $request, Product $product)
    {
        $data = $request->validated();

        $product->update($data);

        return to_route('admin.product.index')->with('success','Le produit a bien été modifier');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
