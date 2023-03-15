<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ResturantController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Resturants/Index');
    }
    //resturant menu page
    public function menuPage()
    {
        return Inertia::render('Resturants/Menu');
    }
}
