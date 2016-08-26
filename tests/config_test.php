<?php
require_once '../config/config.php';
require_once '../lib/database.php';
//require_once '../lib/medoo.php';
$config = Config::getConfig("database");

$db_options = array(
    'database_type' => $config['database_type'],
    'database_name' => $config['database_name'],
    'server' => $config['server'],
    'username' => $config['username'],
    'password' => $config['password'],
    'charset'  => $config['charset']
);

$db = new \DatabaseLibrary\Database($db_options);
    //$db = new medoo($db_options);



$cities = $db->select('cities', '*');

foreach($cities as $city)
{
	echo "city_id:" . $city["city_id"] . " - name:" . $city["name"] . "<br/>";
}

//$db->insert('cities',  [
//        //"city_id" => 3,
//	"name" => "Kisumu"]);