<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    //order checkout
    public function checkout()
    {
        return Inertia::render('Order/Checkout');
    }
}
