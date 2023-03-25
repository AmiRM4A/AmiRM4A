<?php

namespace app\Services;

use CRUD;

class CityService
{
    public static function getCities($data)
    {
        $get_cities = new CRUD();
        return $get_cities->getCities($data);
    }
    public static function createCity($data)
    {
        $create_city = new CRUD();
        if (!isset($data['name']) || !isset($data['province_id'])) {
            return false;
        }
        return $create_city->addCity($data['name'], $data['province_id']);
    }
    public static function removeCity($id)
    {
        $remove_city = new CRUD();
        return $remove_city->deleteCity($id);
    }
    public static function updateCity($data)
    {
        $update_city = new CRUD();
        if (!isset($data['name']) || !isset($data['city_id'])) {
            return false;
        }
        return $update_city->updateCity($data['city_id'], $data['name']);
    }
}