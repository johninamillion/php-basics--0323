<?php

namespace SaeInstitute\WebPHP;

final class Garage {

	/**
	 * @var array[AbstractCar]
	 */
	private array $cars = [];

	public function __construct(
		public string $name
	) {}

	public function leaveGarage( AbstractCar $car ) : self {
		$car->leave( $this );

		return $this;
	}

	public function parkCar( AbstractCar $car ) : self {
		$car->park( $this );

		return $this;
	}

	public function addCar( AbstractCar $car ) : self {
		$this->cars[ $car->getId() ] = $car;

		return $this;
	}

	public function removeCar( AbstractCar $car ) : self {
		unset( $this->cars[ $car->getId() ] );

		return $this;
	}

	public function paintCars( string $color ) : self {
		foreach ( $this->cars as $car ) {
			$car->paint( $color );
		}

		return $this;
	}

}