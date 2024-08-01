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
        $validated = $request->validated();
        $phone = ($this->filterProduct($request))
            ->whereType(true)
            ->paginate(12);

        return view('product.phone.index', [
            'products' => $phone,
            'input' => $validated
        ]);
    }

    /**
     * Display a listing of the computer products.
     *
     * @return \Illuminate\Http\Response
     */
    public function computersIndex(SearchProductRequest $request): View
    {
        $validated = $request->validated();
        $computers = ($this->filterProduct($request))
            ->whereType(false)
            ->paginate(12);

        return view('product.computer.index', [
            'products' => $computers,
            'input' => $validated
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

    private function filterProduct(SearchProductRequest $request)
    {
        $brand = $request->validated('brand');
        $price = $request->validated('price');
        $status = $request->validated('status');

        $query = Product::query()
            ->FilterByName($brand)
            ->FilterByPrice($price)
            ->FilterByStatus($status)
            ->latest();

        return $query;
    }
}
