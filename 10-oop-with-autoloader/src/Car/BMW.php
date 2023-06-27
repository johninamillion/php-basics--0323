<?php

namespace SaeInstitute\WebPHP\Car;

use SaeInstitute\WebPHP\AbstractCar;
use SaeInstitute\WebPHP\FatalCrashTrait;
use SaeInstitute\WebPHP\PaintableInterface;
use SaeInstitute\WebPHP\PaintableTrait;

class BMW extends AbstractCar implements PaintableInterface {

	use PaintableTrait;

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