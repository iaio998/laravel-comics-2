<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class HomeController extends Controller
{
    public function index()
    {
        $comics = Comic::inRandomOrder()->limit(5)->get();
        $hyper = config('my-menu.menu');
        return view('home', compact('hyper', 'comics'));
    }
}
