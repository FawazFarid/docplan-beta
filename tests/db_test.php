<?php
require '../lib/database.php';

$db = new \DatabaseLibrary\Database(array(
    'database_type' => 'mysql',
    'database_name' => 'docplan',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''
));


