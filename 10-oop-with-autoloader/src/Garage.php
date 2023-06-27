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

	public function leaveGarage( VehicleInterface $car ) : self {
		$car->leave( $this );

		return $this;
	}

	public function parkCar( VehicleInterface $car ) : self {
		$car->park( $this );

		return $this;
	}

	public function addCar( VehicleInterface $car ) : self {
		$this->cars[ $car->getId() ] = $car;

		return $this;
	}

	public function removeCar( VehicleInterface $car ) : self {
		unset( $this->cars[ $car->getId() ] );

		return $this;
	}

	public function paintCars( ColorEnum $color ) : self {
		foreach ( $this->cars as $car ) {
			if ( $car instanceof PaintableInterface ) {
				$car->paint( $color );
			}
		}

		return $this;
	}

}