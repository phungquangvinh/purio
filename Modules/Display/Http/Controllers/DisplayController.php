<?php

namespace Modules\Display\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class DisplayController extends Controller
{

    public function index()
    {
        return view('display::home.index');
    }

}
