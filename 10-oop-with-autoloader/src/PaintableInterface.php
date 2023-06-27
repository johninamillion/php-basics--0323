<?php

namespace SaeInstitute\WebPHP;

interface PaintableInterface {
	public function paint( string $color ) : self;

}