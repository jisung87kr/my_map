<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ToiletController;

class ApiToiletController extends ToiletController
{
    public function responseIndex($result)
    {
        return response()->json($result);
    }
}
