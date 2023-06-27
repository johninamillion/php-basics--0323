<?php

namespace SaeInstitute\WebPHP;

abstract class AbstractCar implements VehicleInterface {

	use VehicleTrait;

	const COLOR_BLACK = 'black';
	const COLOR_BLUE  = 'blue';
	const COLOR_GREEN = 'green';
	const COLOR_RED   = 'red';
	const COLOR_WHITE = 'white';

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
		protected string $color = self::COLOR_BLACK
	) {}

}