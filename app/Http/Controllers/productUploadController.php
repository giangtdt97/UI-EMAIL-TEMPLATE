<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productUploadController extends Controller
{
    public function index()
    {
        return view('productUpload');
    }
}
