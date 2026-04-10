<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index () {
        $trains = Train::orderBy('departure', 'asc')->get();
        return view('index', compact('trains'));
    }
}
