<?php
namespace App\Services\PermitToWork;

use App\Models\User;

class PermitToWorkServices implements PermitToWorkInterface
{
    function getDirectSPV()
    {
        $data = User::role('supervisor')->get();
        return response()->json($data);
    }
}
