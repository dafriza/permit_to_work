<?php

namespace App\Http\Controllers\form_layouts;

use App\Helper\RolesAndPermissionsHelper;
use App\Http\Controllers\Controller;
use App\Models\PermitToWork;
use App\Services\PermitToWork\PermitToWorkInterface;
use Illuminate\Http\Request;

class HorizontalTestingForm extends Controller
{
    protected $permit_to_work;
    public function __construct(PermitToWorkInterface $permit_to_work)
    {
        $this->permit_to_work = $permit_to_work;
    }
    public function index()
    {
        // $data = $this->raph->linkPermissions();
        // return response()->json($data);
        return view('content.form-layout.form-layouts-horizontaltesting');
    }
    function getDirectSPV()
    {
    }
}
