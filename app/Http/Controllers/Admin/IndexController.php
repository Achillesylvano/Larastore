<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Product;
use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\Admin\DashboardDataService;


class IndexController extends Controller 
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, DashboardDataService $dashboardService)
    {
        $dashboardData = $dashboardService->getDashboardData();  
        return view('user.admin.dashboard',$dashboardData);
    }
}
