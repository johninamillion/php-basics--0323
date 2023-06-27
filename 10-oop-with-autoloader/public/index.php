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

$bmwI3 = new BMW( 'i3', BMW::TYPE_SUPERCAR, ColorEnum::Blue );
$bmwI8 = new BMW( 'i8', BMW::TYPE_SUPERCAR, ColorEnum::Blue );
$bugatti = new Bugatti( 'Veyron', ColorEnum::Blue );
$mini = new Mini( 'Cooper', ColorEnum::Blue );
$mercedes = new Mercedes( 'SLS', Mercedes::TYPE_SUPERCAR, ColorEnum::Blue );
$ducatti = new Bike( 'Ducatti', 'Ducatti', 'Monster', ColorEnum::Blue );

$tomsGarage->parkCar( $bmwI3 );
$tomsGarage->parkCar( $bmwI8 );
$tomsGarage->parkCar( $bugatti );
$tomsGarage->parkCar( $mini );
$tomsGarage->parkCar( $mercedes );
$tomsGarage->parkCar( $ducatti );

echo "<pre>";
var_dump( $tomsGarage );
echo "</pre>";

$tomsGarage->paintCars( ColorEnum::Red );

echo "<pre>";
var_dump( $tomsGarage );
echo "</pre>";


$bmwI3->leave( $tomsGarage )->park( $jerrysGarage );
$bmwI8->leave( $tomsGarage )->park( $jerrysGarage );

echo "<pre>";
var_dump( $jerrysGarage );
echo "</pre>";

echo "<pre>";
var_dump( $bmwI3->getColor() );
echo "</pre>";
