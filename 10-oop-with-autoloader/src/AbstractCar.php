<?php

namespace SaeInstitute\WebPHP;

abstract class AbstractCar implements VehicleInterface {

	use VehicleTrait;

	const TYPE_HYPER_CAR = 'hyper-car';
	const TYPE_OLDTIMER  = 'oldtimer';

	const TYPE_SUPERCAR = 'supercar';

	const TYPE_SMALL_CAR = 'small-car';

	const TYPE_SUV = 'suv';

	public function __construct(
		protected string $name,
		protected string $manufacturer,
		protected string $model,
		protected string $type,
		protected ColorEnum $color = ColorEnum::WHITE,
	) {}

	public function getColor() : ColorEnum {

		return $this->color;
	}

}