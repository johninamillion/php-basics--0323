<?php

namespace SaeInstitute\WebPHP\Car;

use SaeInstitute\WebPHP\AbstractCar;
use SaeInstitute\WebPHP\ColorEnum;
use SaeInstitute\WebPHP\NormalCrashTrait;

class Mercedes extends AbstractCar {

	public function __construct( string $model, string $type, ColorEnum  $color ) {
		parent::__construct( 'Mercedes', 'Mercedes Benz', $model, $type, $color );
	}

}