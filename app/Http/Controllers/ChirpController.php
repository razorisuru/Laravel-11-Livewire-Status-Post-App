<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChirpController extends Controller
{
    public function index(): View
    {
        return view('chirps',[

        ]);
    }
}
