<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function redirect()
    {
        return redirect()->away('https://siwecos.de');
    }
}
