<?php

namespace SaeInstitute\WebPHP\Car;

use SaeInstitute\WebPHP\AbstractCar;

class BMW extends AbstractCar {

	public function __construct( string $model, string $type, string $color ) {
		parent::__construct(
			'BMW',
			'BMW',
			$model,
			$type,
			$color
		);
	}

}