<?php

namespace SaeInstitute\WebPHP;

use SaeInstitute\WebPHP\Controller\IndexController;
//use SaeInstitute\WebPHP\Controller\IndexController as Asd;

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'autoload.php';


$application = new Application();

//with use
$indexController = new IndexController();
//without use
//$indexController = new Controller\Index()
//with use and alias
//$indexController = new Asd();

var_dump( $indexController );