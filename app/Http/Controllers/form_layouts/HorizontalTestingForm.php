<?php

namespace App\Http\Controllers\form_layouts;

use App\Helper\RolesAndPermissionsHelper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HorizontalTestingForm extends Controller
{
  public $raph;
  public function __construct() {
    $this->raph = new RolesAndPermissionsHelper();
  }
    public function index()
    {
        $data = $this->raph->linkPermissions();
        return response()->json($data);
        // return view('content.form-layout.form-layouts-horizontaltesting');
    }
}
