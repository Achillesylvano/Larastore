<?php

namespace App\Http\Controllers\Admin;

use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Models\Accessory\Property;
use App\Http\Controllers\Controller;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accessories = Accessory::orderBy('id')->paginate(15);

        return view('admin.accessory.index',[
            'accessories' => $accessories
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accessory $accessory)
    {
        return view('admin.accessory.edit',[
            'accessory' => $accessory,
            'properties' => Property::pluck('category','id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
