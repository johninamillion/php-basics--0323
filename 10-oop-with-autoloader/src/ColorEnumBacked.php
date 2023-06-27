<?php

namespace SaeInstitute\WebPHP;

enum ColorEnumBacked: string {

	case RED = 'red';
	case GREEN = 'green';
	case BLUE = 'blue';
	case WHITE = 'white';
	case BLACK = 'black';

	function isDark() : bool {

		return in_array( $this->name, [ self::BLACK->name, self::BLUE->name ] );
	}

	function isLight() : bool {

		return in_array( $this->name, [ self::WHITE->name, self::RED, self::GREEN->name ] );
	}

}