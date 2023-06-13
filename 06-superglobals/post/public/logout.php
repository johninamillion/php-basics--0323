<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'bootstrap.php';

// session beenden
session_destroy();

// weiterleitung auf login.php
header( 'Location: login.php' );