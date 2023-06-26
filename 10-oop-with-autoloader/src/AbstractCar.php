<?php

namespace SaeInstitute\WebPHP;

abstract class AbstractCar {

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

	private ?Garage $garage        = NULL;

	private bool    $drive         = FALSE;

	private bool    $engineStarted = FALSE;

	private bool    $parked        = FALSE;

	public function __construct(
		protected string $name,
		protected string $manufacturer,
		protected string $model,
		protected string $type,
		protected string $color = self::COLOR_BLACK
	) {}

	private function log( string $message ) : void {
		echo "{$this->name} {$this->model} {$message}\n";
	}

	public function startEngine() : self {
		$this->engineStarted = TRUE;
		$this->log( 'start engine.' );

		return $this;
	}

	public function stopEngine() : self {
		$this->engineStarted = FALSE;
		$this->log( 'stop engine.' );

		return $this;
	}

	public function drive() : self {
		if ( $this->engineStarted === FALSE ) {
			trigger_error(
				"You need to start the engine first for your {$this->name} {$this->model}",
				E_USER_ERROR
			);
		}

		$this->parked = FALSE;
		$this->drive  = TRUE;
		$this->log( 'drive.' );

		return $this;
	}

	public function getId() : string {

		return $this->manufacturer . '-' . $this->model;
	}

	public function leave( Garage $garage ) : self {
		if ( $this->parked === FALSE ) {
			trigger_error(
				"You need to park your {$this->name} {$this->model} first before you can leave.",
				E_USER_ERROR
			);
		}
		$this->startEngine();
		$this->parked = FALSE;
		$this->drive();
		$this->log( "leave {$garage->name}." );
		$this->garage = NULL;
		$garage->removeCar( $this );

		return $this;
	}

	public function park( Garage $garage ) : self {
		if ( $this->parked === TRUE ) {
			trigger_error(
				"You already parked your {$this->name} {$this->model} at {$this->garage->name}.",
				E_USER_ERROR
			);
		}

		$this->stopEngine();
		$this->parked = TRUE;
		$this->drive  = FALSE;
		$this->log( "park at {$garage->name}." );
		$this->garage = $garage;
		$garage->addCar( $this );

		return $this;
	}

	public function paint( string $color ) : self {
		$this->color = $color;
		$this->log( "paint {$color}." );

		return $this;
	}

}