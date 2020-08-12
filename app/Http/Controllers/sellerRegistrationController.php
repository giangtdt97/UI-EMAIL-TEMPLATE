<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class sellerRegistrationController extends Controller
{
    public function index()
    {
        return view('sellerRegistration');
    }
}
