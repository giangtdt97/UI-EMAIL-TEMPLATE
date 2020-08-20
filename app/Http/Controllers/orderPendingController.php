<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderPendingController extends Controller
{
    public function index()
    {
        return view('orderPending');
    }
}
