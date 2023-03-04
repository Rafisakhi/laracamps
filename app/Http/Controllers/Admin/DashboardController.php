<?php

namespace App\Http\Controllers\admin;

use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
     public function index()
     {
        $checkouts = Checkout::with('Camp')->get();
        return view('admin.dashboard', [
            'checkout' => $checkouts
        ]);
     }
}
