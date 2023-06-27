<?php

namespace SaeInstitute\WebPHP\Car;

use SaeInstitute\WebPHP\AbstractCar;

class Mercedes extends AbstractCar {

	public function __construct( string $model, string $type, string $color ) {
		parent::__construct( 'Mercedes', 'Mercedes Benz', $model, $type, $color );
	}

}