<?php

error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

define( 'APP_UPLOADS_DIR_BASE', 'uploads/images' );
define( 'APP_UPLOADS_DIR',  __DIR__ . DIRECTORY_SEPARATOR .'uploads/images' );

function createCodedPath() : string {

	return date( 'Y/m' );
}

function createDirectory( string $path ) : bool {

	return file_exists( $path ) ? TRUE : mkdir( $path, 0777, TRUE );
}

function createFileName( array $file ) : string {

	return time() . '-' . $file[ 'name' ];
}

function getMaxUploadSize() : int {

	return (int) str_replace( 'M', '000000', ini_get( 'upload_max_filesize' ) );
}

function handleRequest() {
	header( 'Content-Type: application/json' );

	if ( isRequestMethod( 'POST' ) === FALSE ) {
		http_response_code( 405 );
		echo json_encode( [ 'success' => false, 'errors' => [ 'Invalid Request Method' ] ] );
		return;
	}
	if ( isValidRequest() === FALSE ) {
		http_response_code( 400 );
		echo json_encode( [ 'success' => false, 'errors' => [ 'Invalid Request' ] ] );
		return;
	}

	$errors = [];
	$upload = uploadImage( $errors );

	if ( !$upload ) {
		http_response_code( 400 );
		echo json_encode( [ 'success' => false, 'errors' => $errors ] );
		return;
	}

	http_response_code( 200 );
	echo json_encode( [ 'success' => true, 'path' => $upload ] );
}

function isValidFile( array $file ) : bool {

	return isset( $file[ 'name' ] ) || isset( $file[ 'size' ] ) || isset( $file[ 'tmp_name' ] ) || isset( $file[ 'type' ] );
}

function isValidMimeType( array $file ) : bool {

	return in_array( $file[ 'type' ], [ 'image/gif', 'image/jpeg' ] );
}

function isRequestMethod( string $request_method ) : bool {

	return $_SERVER[ 'REQUEST_METHOD' ] === $request_method;
}

function isValidRequest() : bool {

	return isset( $_FILES[ 'avatar' ] );
}

function isValidFileSize( array $file ) : bool {
	$max_upload_size = getMaxUploadSize();

	return $file[ 'size' ] <= $max_upload_size;
}

function uploadImage( array &$errors = [] ) : string|false {
	$file = $_FILES[ 'avatar' ];

	if ( !isValidFile( $file ) ) {
		$errors[] = 'Invalid File';
		return false;
	}

	if ( !isValidFileSize( $file ) ) {
		$errors[] = 'Invalid File Size';
		return false;
	}

	$date_coded_path = createCodedPath();
	$file_name = createFileName( $file );

	$target_dir_path = APP_UPLOADS_DIR . DIRECTORY_SEPARATOR . $date_coded_path;
	$target_file_path = $target_dir_path . DIRECTORY_SEPARATOR . $file_name;

	if ( !createDirectory( $target_dir_path ) ) {
		$errors[] = 'Unable to create directory';
		return false;
	}

	if ( !isValidMimeType( $file ) ) {
		$errors[] = 'Invalid File Type';
		return false;
	}

	if ( file_exists( $target_file_path ) ) {
		$errors[] = 'File already exists';
		return false;
	}

	return move_uploaded_file( $file[ 'tmp_name' ], $target_file_path )
		? APP_UPLOADS_DIR_BASE . DIRECTORY_SEPARATOR . $date_coded_path . DIRECTORY_SEPARATOR . $file_name
		: FALSE;
}

handleRequest();