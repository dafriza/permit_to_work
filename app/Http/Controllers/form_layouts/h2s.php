<?php

namespace App\Http\Controllers\form_layouts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class h2s extends Controller
{
    public function index()
    {
        return view('content.form-layout.form-layouth2s');
    }
}
