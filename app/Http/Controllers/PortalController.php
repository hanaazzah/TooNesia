<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function detail()
    {
        return view('details');
    }

    public function view()
    {
        return view('view');
    }
}
