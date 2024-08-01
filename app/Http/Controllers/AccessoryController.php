<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Models\Accessory\Property;
use App\Http\Requests\SearchAccessoryRequest;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SearchAccessoryRequest $request)
    {
        $validated = $request->validated();
        $brand = $request->validated('brand');
        $price = $request->validated('price');
        $property_id = $request->validated('property_id');
        $status = $request->validated('status');

        $accessories = Accessory::query()
            ->FilterByName($brand)
            ->FilterByPrice($price)
            ->FilterByProperty($property_id)
            ->FilterByStatus($status)
            ->latest()
            ->paginate(12);

        return view('accessory.index', [
            'accessories' => $accessories,
            'input' => $validated,
            'properties' => Property::pluck('category', 'id')
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Accessory $accessory)
    {
        return view('accessory.show', [
            'accessory' => $accessory
        ]);
    }
}
