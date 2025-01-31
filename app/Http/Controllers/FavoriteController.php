<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{

    public function index()
    {
        return auth()->user()->favorites()->paginate(10);
    }

    public function get() {}
}
