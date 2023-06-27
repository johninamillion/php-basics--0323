<?php

namespace SaeInstitute\WebPHP\Car;

use SaeInstitute\WebPHP\NormalCrashTrait;

final class Mini extends BMW {

	public function __construct( string $model, string $color ) {
		parent::__construct(
			$model,
			parent::TYPE_SMALL_CAR,
			$color
		);

		$this->name = 'Mini';
	}

}