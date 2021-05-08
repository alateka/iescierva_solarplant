<?php
ini_set('display_errors', 1);
require_once 'libs/PostgresSQLdb.php';
require_once 'libs/Controller.php';
require_once 'libs/Application.php';
require_once '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();