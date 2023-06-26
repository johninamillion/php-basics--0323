<?php

namespace SaeInstitute\WebPHP\Car;

use SaeInstitute\WebPHP\AbstractCar;

final class Bugatti extends AbstractCar {

	public function __construct( string $model, string $color = self::COLOR_BLUE ) {
		parent::__construct(
			'Bugatti',
			'Bugatti',
			$model,
			parent::TYPE_HYPER_CAR,
			$color
		);
	}

	public function getName() : string {
		return $this->name;
	}

}