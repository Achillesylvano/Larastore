<?php

namespace App\Actions\Admin;

use App\Models\Accessory;


class AccessoryVariationPercentage

{
    public function __construct() 
    {}
    public function handle()
    {
        $accessoriesPreviousMonthCount = Accessory::query()
            ->whereMonth('created_at',now()->subMonthNoOverflow())
            ->count();

        $accessoriesCurrentMonthCount = Accessory::query()
            ->whereMonth('created_at',now()->month)
            ->count();
       
        if($accessoriesPreviousMonthCount === 0){
            return 0;
        }

        return (($accessoriesCurrentMonthCount - $accessoriesPreviousMonthCount) / $accessoriesPreviousMonthCount) * 100;

    }
}


