<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function getRequestData($model, $address)
    {
        $cityRow = $this->getCity($address);
        return $this->getCurrentPositionData($model, $cityRow);
    }

    public function getCity($address)
    {
        $addrArr = explode(' ', $address);
        list($province, $city) = $addrArr;
        return City::where('title', $city)->first();
    }

    public function getCurrentPositionData($model, $cityRow)
    {
        return $model::where('city_id', $cityRow['id'])->get();
    }
}
