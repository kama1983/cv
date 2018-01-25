<?php 

function __autoload($class)
{
     $aa = core . $class . '.php';
     if (file_exists($aa)) {
         include_once $aa;
     }
}

function autoload($class)
{
     $aa = core . $class . '.php';
     if (file_exists($aa)) {
         include_once $aa;
     }
}


spl_autoload_register('__autoload');
include_once core.'Helper.php';
include_once core.'Image.php';
include_once core.'pdf/tcpdf.php';
