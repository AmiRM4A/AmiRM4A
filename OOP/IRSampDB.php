<?php
include_once 'BaseModel.php';
class IRSDB extends BaseModel{
    protected $table = 'users';
    protected $key = 'Username';
}

$data = new IRSDB;
$result = $data->select('Amiiiiiir');
// $result = $data->insert('Username','Password','Email','Amiiiiiir','Amir13822','nixixixix@gmail.com');
var_dump($result);