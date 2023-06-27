<?php

namespace SaeInstitute\WebPHP;

trait PaintableTrait  {
	public function paint( ColorEnum $color ) : PaintableInterface {
		$this->color = $color;
		$this->log( "paint {$color->value}." );

		return $this;
	}

}