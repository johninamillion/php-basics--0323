<?php

namespace SaeInstitute\WebPHP\Car;

use SaeInstitute\WebPHP\AbstractCar;
use SaeInstitute\WebPHP\ColorEnum;
use SaeInstitute\WebPHP\PaintableInterface;
use SaeInstitute\WebPHP\PaintableTrait;

final class Bugatti extends AbstractCar implements PaintableInterface {

	use PaintableTrait;

	public function __construct( string $model, ColorEnum $color = ColorEnum::BLUE ) {
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