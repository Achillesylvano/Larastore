<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Product;
use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\Admin\ProductVariationPercentage;
use App\Actions\Admin\AccessoryVariationPercentage;
use App\Actions\Admin\SubscribersVariationPercentage;

class IndexController extends Controller 
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
         $productSmartphoneCount = Product::query()
            ->whereType(true)
            ->count();
        
        $productComputerCount = Product::query()
            ->whereType(false)
            ->count();    

        $accessoryCount = Accessory::query()
            ->count();

        $subscribersCount = User::query()
            ->verified()
            ->count();

        $subscribersVariationPercentage = (new SubscribersVariationPercentage)->handle();
        $productSmartphonesVariationPercentage = (new ProductVariationPercentage(true))->handle();
        $productComputersVariationPercentage = (new ProductVariationPercentage(false))->handle();
        $accessoryVariationPercentage = (new AccessoryVariationPercentage)->handle();
        
        return view('user.dashboard',[
            'productComputerCount' => $productComputerCount,
            'productSmartphoneCount' => $productSmartphoneCount,
            'productSmartphonesVariationPercentage' => $productSmartphonesVariationPercentage,
            'productComputersVariationPercentage' => $productComputersVariationPercentage,
            'accessoryCount' => $accessoryCount,
            'accessoryVariationPercentage' => $accessoryVariationPercentage,
            'subscribersCount' => $subscribersCount,
            'subscribersVariationPercentage' => $subscribersVariationPercentage
        ]);
    }
}
