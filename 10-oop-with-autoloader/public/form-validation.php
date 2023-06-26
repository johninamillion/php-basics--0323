<?php

final class Registration {

	const VALID_GENDERS = [ 'male', 'female' ];
	const VALID_COUNTRIES = [ 'Germany', 'Austria', 'Swiss' ];

	private array $errors = [];

	public function getErrors() : array {

		return $this->errors;
	}

	public function register(
		?string $gender,
		?string $username,
		?string $email,
		?string $password,
		?string $country,
		?string $termsOfService
	) : bool {
		$validateGender         = $this->validateGender( $gender );
		$validateUsername       = $this->validateUsername( $username );
		$validateEmail          = $this->validateEmail( $email );
		$validatePassword       = $this->validatePassword( $password );
		$validateCountry        = $this->validateCountry( $country );
		$validateTermsOfService = $this->validateTermsOfService( $termsOfService );

		return $validateGender
			&& $validateUsername
			&& $validateEmail
			&& $validatePassword
			&& $validateCountry
			&& $validateTermsOfService;
	}

	private function validateCountry( ?string $country ) : bool {
		global $country_options;

		// überprüfen ob ein land ausgewählt wurde
		if ( is_null( $country ) ) {
			$this->errors[ 'country' ][] = 'Bitte wählen Sie ein Land aus.';
		}
		elseif ( !in_array( $country, self::VALID_COUNTRIES ) ) {
			$this->errors[ 'country' ][] = 'Bitte wählen Sie ein verfügbares Land aus.';
		}

		return !isset( $this->errors[ 'country' ] );
	}

	private function validateEmail( ?string $email ) : bool {
		// überprüfen ob eine e-amil angegeben wurde
		if ( is_null( $email ) || empty( $email ) ) {
			$this->errors[ 'email' ][] = 'Bitte geben Sie eine E-Mail Adresse ein.';
		}
		// überprüfen ob die e-mail adresse valide ist
		elseif ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
			$this->errors[ 'email' ][] = 'Die E-Mail Adresse ist ungültig.';
		}

		return !isset( $this->errors[ 'email' ] );
	}

	private function validateGender( ?string $gender ) : bool {
		global $gender_options;

		// überprüfen ob ein geschlecht ausgewählt wurde
		if ( is_null( $gender ) ) {
			$this->errors[ 'gender' ][] = 'Bitte wählen Sie ein Geschlecht aus.';
		}
		// überprüfen ob der wert von gender im array mit allen optionen vorhanden ist
		elseif ( !in_array( $gender, self::VALID_GENDERS ) ) {
			$this->errors[ 'gender' ][] = 'Bitte wähle ein verfügbares Geschlecht aus.';
		}

		return !isset( $this->errors[ 'gender' ] );
	}

	private function validatePassword( ?string $password ) : bool {
		// überprüfen ob das passwort leer ist
		if ( is_null( $password ) || empty( $password ) ) {
			$this->errors[ 'password' ][] = 'Bitte geben Sie ein Passwort ein.';
		}
		// überprüfen ob das passwort kürzer als 8 Zeichen ist
		elseif ( strlen( $password ) < 8 ) {
			$this->errors[ 'password' ][] = 'Das Passwort muss mindestens 8 Zeichen lang sein.';
		}
		// überprüfen ob das passwort länger als 16 Zeichen ist
		elseif ( strlen( $password ) > 16 ) {
			$this->errors[ 'password' ][] = 'Das Passwort darf maximal 16 Zeichen lang sein.';
		}
		// überprüfen ob das passwort keine zahlen enthält
		if ( !preg_match( '/\d/', $password ) ) {
			$this->errors[ 'password' ][] = 'Das Passwort muss mindestens eine Zahl enthalten.';
		}
		// überprüfen ob das passwort keine kleinbuchstaben enthält
		if ( !preg_match( '/[a-z]/', $password ) ) {
			$this->errors[ 'password' ][] = 'Das Passwort muss mindestens einen kleinen Buchstaben enthalten.';
		}
		// überprüfen ob das passwort keine großbuchstaben enthält
		if ( !preg_match( '/[A-Z]/', $password ) ) {
			$this->errors[ 'password' ][] = 'Das Passwort muss mindestens einen großen Buchstaben enthalten.';
		}
		// überprüfen ob das passwort keine sonderzeichen enthält
		if ( !preg_match( '/\W/', $password ) ) {
			$this->errors[ 'password' ][] = 'Das Passwort muss mindestens ein Sonderzeichen enthalten.';
		}
		// überprüfen ob das passwort leerzeichen enthält
		if ( preg_match( '/\s/', $password ) ) {
			$this->errors[ 'password' ][] = 'Das Passwort darf keine Leerzeichen enthalten.';
		}

		return !isset( $this->errors[ 'password' ] );
	}

	private function validateTermsOfService( ?string $termsOfService ) {
		// überprüfen ob die nutzungsbedingungen akzeptiert wurden
		if ( is_null( $termsOfService ) ) {
			$this->errors[ 'terms-of-service' ][] = 'Bitte akzeptieren Sie die Nutzungsbedingungen.';
		}

		return !isset( $this->errors[ 'terms-of-service' ] );
	}

	private function validateUsername( ?string $username ) : bool {
		// überprüfen ob der Nutername leer ist
		if ( is_null( $username ) || empty( $username ) ) {
			$this->errors[ 'username' ][] = 'Bitte geben Sie einen Benutzernamen ein.';
		}
		// überprüfen ob der Nutername kürzer als 4 Zeichen ist
		elseif ( strlen( $username ) < 4 ) {
			$this->errors[ 'username' ][] = 'Der Benutzername muss mindestens 4 Zeichen lang sein.';
		}
		// überprüfen ob der Nutername länger als 16 Zeichen ist
		elseif ( strlen( $username ) > 16 ) {
			$this->errors[ 'username' ][] = 'Der Benutzername darf maximal 16 Zeichen lang sein.';
		}
		// überprüfen ob der Nutername whitespace (leerzeichen/tabs) enthält
		if ( !is_null( $username ) && preg_match( '/\s/', $username ) ) {
			$this->errors[ 'username' ][] = 'Der Benutzername darf keine Leerzeichen enthalten.';
		}

		return !isset( $this->errors[ 'username' ] );
	}

}

$users = [
	[
		'gender' => 'male',
		'username' => 'nutzer1',
		'email' => 'nutzer1@test.de',
		'password' => 'passwort1§$$',
		'country' => 'Germany',
		'terms-of-service' => 'on',
	],
	[
		'gender' => 'female',
		'username' => 'nutzer2',
		'email' => 'nutzer2@test.at',
		'password' => 'passwort2§$$',
		'country' => 'Austria',
		'terms-of-service' => 'on',
	],
	[
		'gender' => 'male',
		'username' => 'nutzer3',
		'email' => 'nutzer3@test.ch',
		'password' => 'passwort3§$$',
		'country' => 'Swiss',
		'terms-of-service' => 'on',
	],
	[
		'gender' => 'female',
		'username' => 'nutzer4',
		'email' => 'nutzer4@test.de',
		'password' => 'passwort4§$$',
		'country' => 'Germany',
		'terms-of-service' => 'on',
	],
	[
		'gender' => 'male',
		'username' => 'nutzer5',
		'email' => 'nutzer5@test.at',
		'password' => 'passwort5§$$',
		'country' => 'Austria',
		'terms-of-service' => 'on',
	],
	[
		'gender' => 'female',
		'username' => 'nutzer6',
		'email' => 'nutzer6@test.ch',
		'password' => 'passwort6§$$',
		'country' => 'Swiss',
		'terms-of-service' => 'on',
	],
	[
		'gender' => 'male',
		'username' => 'nutzer7',
		'email' => 'nutzer7@test.gr',
		'password' => 'passwort7§$$',
		'country' => 'Greece',
		'terms-of-service' => 'on',
	],
	[
		'gender' => 'female',
		'username' => 'nutzer8',
		'email' => 'nutzer8@test.de',
		'password' => 'passwort8§$$',
		'country' => 'Germany',
		'terms-of-service' => 'on',
	],
	[
		'gender' => 'male',
		'username' => 'nutzer9',
		'email' => 'nutzer9@test.at',
		'password' => 'passwort9§$$',
		'country' => 'Austria',
		'terms-of-service' => 'on',
	],
	[
		'gender' => 'female',
		'username' => 'nutzer10',
		'email' => 'nutzer10@test.gr',
		'password' => 'passwort10§$$',
		'country' => 'Greece',
		'terms-of-service' => 'on',
	],
];


foreach ( $users as $user ) {
	$registration = new Registration();

	$registration->register(
		$user[ 'gender' ],
		$user[ 'username' ],
		$user[ 'email' ],
		$user[ 'password' ],
		$user[ 'country' ],
		$user[ 'terms-of-service' ]
	);

	echo "Validate user: {$user[ 'username' ]}\n";
	echo "<pre>";
	var_dump( $registration->getErrors() );
	echo "</pre>\n";
}
