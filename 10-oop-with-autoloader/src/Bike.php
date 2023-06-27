<?php

namespace SaeInstitute\WebPHP;
 class Bike implements PaintableInterface, VehicleInterface {

	 use PaintableTrait;
	 use VehicleTrait;

	 private ?Garage $garage        = NULL;

	 private bool    $drive         = FALSE;

	 private bool    $engineStarted = FALSE;

	 private bool    $parked        = FALSE;

	 public function __construct(
		 protected string $name,
		 protected string $manufacturer,
		 protected string $model,
		 protected string $color = AbstractCar::COLOR_BLACK
	 ) {}

 }