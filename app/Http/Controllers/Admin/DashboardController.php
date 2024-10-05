<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index() {
        $statusCounts = Product::select('status', DB::raw('count(*) as total'))
                               ->groupBy('status')
                               ->get();

        return view('pages.admin.dashboard', compact('statusCounts'));
    }
}
