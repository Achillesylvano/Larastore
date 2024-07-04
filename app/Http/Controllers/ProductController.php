<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
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
        $brand = $request->validated('brand');
        $price = $request->validated('price');
        $status = $request->validated('status');

        $query = Product::query()
            ->latest()
            ->whereType(true)
            ->FilterByName($brand)
            ->FilterByPrice($price)
            ->FilterByStatus($status);

        return view('product.phone.index', [
            'products' => $query->paginate(12),
            'input' => $request->validated()
        ]);
    }

    /**
     * Display a listing of the computer products.
     *
     * @return \Illuminate\Http\Response
     */
    public function computersIndex(SearchProductRequest $request): View
    {
        $brand = $request->validated('brand');
        $price = $request->validated('price');
        $status = $request->validated('status');

        $query = Product::query()
            ->latest()
            ->whereType(false)
            ->FilterByName($brand)
            ->FilterByPrice($price)
            ->FilterByStatus($status);

        return view('product.computer.index', [
            'products' => $query->paginate(12),
            'input' => $request->validated()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', [
            'product' => $product
        ]);
    }
}
