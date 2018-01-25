<?php
require_once __DIR__.'\\App\\config.php';
require_once core.'loader.php';
App::$setcontrollerpath = __DIR__.'\\app\\controllers\\';
$new = new PDO('sqlite:'.db);
// mysql ['type' => 'mysql',
//                  'host' => 'host',
//                  'username' => 'username', 
//                  'password' => 'password',
//                  'db'=> 'databaseName',
//                  'port' => 3306,
//                  'prefix' => 'my_',
//                  'charset' => 'utf8']
App::sqlite($new);
App::route();
