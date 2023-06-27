<?php

namespace SaeInstitute\WebPHP;

use SaeInstitute\WebPHP\Car\BMW;
use SaeInstitute\WebPHP\Car\Bugatti;
use SaeInstitute\WebPHP\Car\Mercedes;
use SaeInstitute\WebPHP\Car\Mini;
use SaeInstitute\WebPHP\Controller\IndexController;

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'autoload.php';

$tomsGarage = new Garage( 'Toms Garage' );
$jerrysGarage = new Garage( 'Jerrys Garage' );

$bmwI3 = new BMW( 'i3', BMW::TYPE_SUPERCAR, BMW::COLOR_RED );
$bmwI8 = new BMW( 'i8', BMW::TYPE_SUPERCAR, BMW::COLOR_RED );
$bugatti = new Bugatti( 'Veyron', Bugatti::COLOR_RED );
$mini = new Mini( 'Cooper', Mini::COLOR_RED );
$mercedes = new Mercedes( 'SLS', Mercedes::TYPE_SUPERCAR, Mercedes::COLOR_RED );
$ducatti = new Bike( 'Ducatti', 'Ducatti', 'Monster', AbstractCar::COLOR_RED );

$tomsGarage->parkCar( $bmwI3 );
$tomsGarage->parkCar( $bmwI8 );
$tomsGarage->parkCar( $bugatti );
$tomsGarage->parkCar( $mini );
$tomsGarage->parkCar( $mercedes );
$tomsGarage->parkCar( $ducatti );

echo "<pre>";
var_dump( $tomsGarage );
echo "</pre>";

$tomsGarage->paintCars( BMW::COLOR_BLUE );

echo "<pre>";
var_dump( $tomsGarage );
echo "</pre>";


$bmwI3->leave( $tomsGarage )->park( $jerrysGarage );
$bmwI8->leave( $tomsGarage )->park( $jerrysGarage );

echo "<pre>";
var_dump( $jerrysGarage );
echo "</pre>";
