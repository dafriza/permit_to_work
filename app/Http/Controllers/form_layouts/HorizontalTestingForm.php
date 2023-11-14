<?php

namespace App\Http\Controllers\form_layouts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HorizontalTestingForm extends Controller
{
    public function index()
    {
        return view('content.form-layout.form-layouts-horizontaltesting');
    }
}
