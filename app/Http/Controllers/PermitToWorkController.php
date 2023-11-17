<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\PermitToWork\PermitToWorkInterface;
use Illuminate\Http\Request;

class PermitToWorkController extends Controller
{
    private $permit_to_work;
    public function __construct(PermitToWorkInterface $permit_to_work)
    {
        $this->permit_to_work = $permit_to_work;
    }
    function index()
    {
        // $data = User::role('supervisor')->get();
        // return response()->json($data);
        return view('content.permit_to_work.index');
    }
}
