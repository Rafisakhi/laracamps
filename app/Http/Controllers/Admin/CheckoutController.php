<?php

namespace App\Http\Controllers\Admin;

use App\Models\Checkout;
use App\Mail\Checkout\Paid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function update(Request $request , Checkout $checkout)
    {
        $checkout->is_paid = true;
        $checkout->save();
        Mail::to($checkout->User->email)->send(new Paid($checkout));
        
        session()->flash('success', "Checkout With ID {$checkout->id} has been Updated!");
        return redirect(route('admin.dashboard'));
    }
}
