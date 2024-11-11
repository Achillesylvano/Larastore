<?php

namespace App\Actions\Admin;

use App\Models\Product;
use App\Models\Accessory;
use App\Actions\Admin\ProductVariationPercentage;
use App\Actions\Admin\AccessoryVariationPercentage;
use App\Actions\Admin\SubscribersVariationPercentage;
use App\Models\User;

class DashboardDataService
{
    public function getDashboardData(): array
    {
        $productSmartphoneCount = Product::whereType(true)
            ->count();

        $productComputerCount = Product::whereType(false)
            ->count();

        $accessoryCount = Accessory::count();

        $subscribersCount = User::verified()
            ->count();

        $subscribersVariationPercentage = (new SubscribersVariationPercentage)->handle();
        $productSmartphonesVariationPercentage = (new ProductVariationPercentage(true))->handle();
        $productComputersVariationPercentage = (new ProductVariationPercentage(false))->handle();
        $accessoryVariationPercentage = (new AccessoryVariationPercentage)->handle();

        return [
            'productComputerCount' => $productComputerCount,
            'productSmartphoneCount' => $productSmartphoneCount,
            'productSmartphonesVariationPercentage' => $productSmartphonesVariationPercentage,
            'productComputersVariationPercentage' => $productComputersVariationPercentage,
            'accessoryCount' => $accessoryCount,
            'accessoryVariationPercentage' => $accessoryVariationPercentage,
            'subscribersCount' => $subscribersCount,
            'subscribersVariationPercentage' => $subscribersVariationPercentage,
        ];

    }
}
