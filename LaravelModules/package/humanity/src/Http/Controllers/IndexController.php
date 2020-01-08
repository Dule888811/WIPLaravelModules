<?php

namespace Dule\Humanity\Http\Controllers;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('humanity::index');
    }
}