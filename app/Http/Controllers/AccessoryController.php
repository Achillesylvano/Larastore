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
        $query = Accessory::query()
            ->orderBy('created_at', 'desc');
        if ($brand = $request->validated('brand')) {
            $query = $query->where('brand', 'like', "%{$brand}%");
        }
        if ($price = $request->validated('price')) {
            $query = $query->where('price', '<=', $price);
        }
        if ($property_id = $request->validated('property_id')) {
            $query = $query->where('property_id', '=', $property_id);
        }
        if ($request->validated('status') != null) {
            $query = $query->where('status', '=', $request->boolean('status'));
        }

        return view('accessory.index', [
            'accessories' => $query->paginate(12),
            'input' => $request->validated(),
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
