<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function update(Request $request , Checkout $checkout)
    {
        $checkout->is_paid = true;
        $checkout->save();
        session()->flash('success', "Checkout With ID {$checkout->id} has been Updated!");
        return redirect(route('admin.dashboard'));
    }
}
