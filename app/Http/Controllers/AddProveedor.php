<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProveedor extends Controller
{
    public function create() {
        return view("add-proveedor-welcome");
    }
}
