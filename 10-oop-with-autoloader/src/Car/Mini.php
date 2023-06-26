<?php

namespace SaeInstitute\WebPHP\Car;

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