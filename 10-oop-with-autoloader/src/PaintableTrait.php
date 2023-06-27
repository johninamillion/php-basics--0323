<?php

namespace SaeInstitute\WebPHP;

trait PaintableTrait  {
	public function paint( string $color ) : PaintableInterface {
		$this->color = $color;
		$this->log( "paint {$color}." );

		return $this;
	}

}