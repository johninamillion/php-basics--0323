<?php

namespace SaeInstitute\WebPHP;

trait VehicleTrait {

	private ?Garage $garage        = NULL;

	private bool    $drive         = FALSE;

	private bool    $parked        = FALSE;

	private bool    $engineStarted = FALSE;

	protected function log( string $message ) : void {
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

	public function park( Garage $garage ) : VehicleInterface {
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

}