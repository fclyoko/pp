<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowPanel extends Controller
{
    public function show() {
        return view("showpanel");
    }
}
