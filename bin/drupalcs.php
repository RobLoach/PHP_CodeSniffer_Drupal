<?php

// Bootstrap the application.
require __DIR__.'/../src/bootstrap.php';

error_reporting(E_ALL | E_STRICT);

// Set up the command line interface.
$phpcs = new PHP_CodeSniffer_CLI();
$phpcs->checkRequirements();

// Add the Drupal standard.
$values = $phpcs->getCommandLineValues();
$standard = dirname(__DIR__) . '/src/Drupal';
if (!isset($values['standard'])) {
	$values['standard'] = $standard;
}
else {
	$values['standard'] .= ',' . $standard;
}

// Process width PHP CodeSnifer.
$numErrors = $phpcs->process($values);
if ($numErrors === 0) {
    exit(0);
} else {
    exit(1);
}
