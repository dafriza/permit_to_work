<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PermitToWork;
use Illuminate\Http\Request;
use App\Services\PermitToWork\PermitToWorkInterface;

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
        $res = PermitToWork::get()->first();
        return response()->json($res);
        return view('content.permit_to_work.index');
    }
}
