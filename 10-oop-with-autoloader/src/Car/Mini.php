<?php

namespace SaeInstitute\WebPHP\Car;

use SaeInstitute\WebPHP\ColorEnum;
use SaeInstitute\WebPHP\NormalCrashTrait;

final class Mini extends BMW {

	public function __construct( string $model, ColorEnum $color ) {
		parent::__construct(
			$model,
			parent::TYPE_SMALL_CAR,
			$color
		);

		$this->name = 'Mini';
	}

}