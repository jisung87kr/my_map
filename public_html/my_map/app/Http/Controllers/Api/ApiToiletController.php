<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ToiletController;

class ApiToiletController extends ToiletController
{
    public function responseIndex($result)
    {
        return $result->toJSON(JSON_PRETTY_PRINT);
    }
}
