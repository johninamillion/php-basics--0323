<?php

namespace SaeInstitute\WebPHP;

interface VehicleInterface {

	public function getId() : string;

	public function leave( Garage $garage ) : self;

	public function park( Garage $garage ) : self;

}