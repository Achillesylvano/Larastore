<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SearchProductRequest;

class ProductController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function phoneIndex(SearchProductRequest $request)
    {  
        $query = Product::query()->orderBy('created_at','desc')->whereType(true);
        if($brand = $request->validated('brand')){
            $query = $query->where('brand','like',"%{$brand}%");
        }
        if($price = $request->validated('price')){
            $query = $query->where('price','<=',$price);
        }
        if($request->validated('status') != null){
            $query = $query->where('status','=',$request->boolean('status'));
        }

        return view('product.phone.index',[
            'products' => $query->paginate(12),
            'input' => $request->validated()
        ]);
    }

     /**
     * Display a listing of the computer products.
     *
     * @return \Illuminate\Http\Response
     */
    public function computersIndex(SearchProductRequest $request)
    {
        $query = Product::query()->orderBy('created_at','desc')->whereType(false);
        if($brand = $request->validated('brand')){
            $query = $query->where('brand','like',"%{$brand}%");
        }
        if($price = $request->validated('price')){
            $query = $query->where('price','<=',$price);
        }
        if($request->validated('status') != null){
            $query = $query->where('status','=',$request->boolean('status'));
        }

        return view('product.computer.index',[
            'products' => $query->paginate(12),
            'input' => $request->validated()
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
