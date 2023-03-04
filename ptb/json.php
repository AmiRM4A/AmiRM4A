<?php
//1.    json_encode(array, optional); php array to json object
//Associatice Array:
// $names = array(1 => "No Name", 2 => "Ali", 3 => "Ahmad");
// echo json_encode($names) . "<br>";
//Indexed Array
// $colors = array("blue", "red", "yellow", "black");
// echo json_encode($colors) . "<br>";
//If you want to see indexs of an object of indexed array, you must use "JSON_FORCE_OBJECT" in json_encode(array, ====> JSON_FORCE_OBJECT <====);

//2.    json_decode(object of json); json object to php array or stdclass object
// $namesObj = '{"1":"No Name","2":"Ali","3":"Ahmad"}';
// var_dump(json_decode($namesObj));
$data = '{ "query": "89.198.233.44", "status": "success", "continent": "Asia", "continentCode": "AS", "country": "Iran", "countryCode": "IR", "region": "23", "regionName": "Tehran", "city": "Tehran", "district": "", "zip": "", "lat": 35.7477, "lon": 51.4021, "timezone": "Asia/Tehran", "offset": 12600, "currency": "IRR", "isp": "Mobile Communication Company", "org": "new LTE service", "as": "AS197207 Mobile Communication Company of Iran PLC", "asname": "MCCI-AS", "mobile": true, "proxy": false, "hosting": false }';
$decode = json_decode($data);
echo $decode->city;
