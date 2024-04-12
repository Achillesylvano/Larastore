<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accessories = Accessory::paginate(12);

        return view('accessory.index',[
            'accessories' => $accessories
        ]);
    }

     /**
     * Display the specified resource.
     */
    public function show(Accessory $accessory)
    {
        return view('accessory.show',[
            'accessory' => $accessory
        ]);
    }
}
