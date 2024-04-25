<?php

namespace App\Actions\Admin;

use App\Models\Product;

class ProductVariationPercentage

{
    public function __construct(public bool $type) 
    {}
    public function handle()
    {
        $productsPreviousMonthCount = Product::query()
            ->whereType($this->type)
            ->whereMonth('created_at',now()->subMonthNoOverflow())
            ->count();

        $productsCurrentMonthCount = Product::query()
            ->whereType($this->type)
            ->whereMonth('created_at',now()->month)
            ->count();
       
        if($productsPreviousMonthCount === 0){
            return 0;
        }

        return (($productsCurrentMonthCount - $productsPreviousMonthCount) / $productsPreviousMonthCount) * 100;

    }
}


