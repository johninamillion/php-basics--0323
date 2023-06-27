<?php

namespace SaeInstitute\WebPHP;

enum ColorEnum {

	case Red;
	case Green;
	case Blue;
	case White;
	case Black;

	public function isDark() : bool {

		return in_array( $this->name, [ self::Black, self::Blue ] );
	}

	public function isLight() : bool {

		return in_array( $this->name, [ self::White, self::Red, self::Green ] );
	}

}