<?php

namespace SaeInstitute\WebPHP;

interface PaintableInterface {
	public function paint( ColorEnum $color ) : self;

}