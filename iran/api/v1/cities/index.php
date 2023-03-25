<?php
include_once '../../../autoload.php';

use app\Utilities\Cache;
use app\Utilities\Validation;
use \app\Services\CityService;
use \app\Utilities\Response;

match ($_SERVER['REQUEST_METHOD']) {
    'GET' => getHandler(), // Input: ProvinceID --- Output: Cities with provinceid given
    'POST' => postHandler(), // Input: a json with 'name' and 'province_id' params --- Output: a json with http code and a msg
    'DELETE' => deleteHandler(), // Input: city_id --- Output: a json with http code and a msg
    'PUT' => putHandler(), // Input: a json with 'city_id' and 'name' (new name for city_id given) params --- Output: a json with http code and a msg
    default => Response::RespondAndDie('Invalid Request...', self::HTTP_METHOD_NOT_ALLOWED)
};

function getHandler()
{
    Cache::start();
    $request_body = [
        'province_id' => $_GET['province_id'] ?? null,
        'page' => $_GET['page'] ?? null,
        'page_size' => $_GET['page_size'] ?? null,
        'fields' => $_GET['fields'] ?? '*',
        'orderby' => $_GET['orderby'] ?? null,
    ];
    $validation = new Validation();
    if ($validation->isValidProvince($request_body['province_id']) <= 0 || !is_numeric($request_body['province_id'])) {
        Response::RespondAndDie('Invalid province id(' . $request_body['province_id'] . ')', Response::HTTP_NOT_FOUND);
    }
    $result = CityService::getCities($request_body);
    echo Response::Respond($result, Response::HTTP_OK);
    Cache::end();
    die();
}

function postHandler()
{
    $request_body = json_decode(file_get_contents('php://input'), true);
    if (CityService::createCity($request_body) <= 0 || empty($request_body['city_name'])) {
        Response::RespondAndDie('Invalid data!', Response::HTTP_NOT_ACCEPTABLE);
    }
    Response::RespondAndDie('Your city successfully created...', Response::HTTP_CREATED);
}

function deleteHandler()
{
    $city_id = $_GET['city_id'] ?? null;
    $validation = new Validation();
    if ($validation->isValidCity($city_id) <= 0 || !is_numeric($city_id)) {
        Response::RespondAndDie("Invalid city id($city_id)", Response::HTTP_NOT_FOUND);
    }
    CityService::removeCity($city_id);
    Response::RespondAndDie("City($city_id) successfully removed...", Response::HTTP_OK);
}

function putHandler()
{
    $request_body = json_decode(file_get_contents('php://input'), true);
    if (CityService::updateCity($request_body) <= 0) {
        Response::RespondAndDie("Invalid data", Response::HTTP_NOT_FOUND);
    }
    Response::RespondAndDie("Name of the city successfully changed...", Response::HTTP_OK);
}