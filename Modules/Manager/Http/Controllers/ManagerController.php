<?php

namespace Modules\Manager\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ManagerController extends BaseController
{
    public function index()
    {
        return view('manager::index');
    }

}
