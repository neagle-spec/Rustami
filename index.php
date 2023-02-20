<?php

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

// Require the necessary files
require_once('vendor/autoload.php');

//Create an instance of the base class
$f3 = Base::instance();

//Create an instance of the Controller class
//$con = new Controller($f3);

//Define a default route
$f3->route('GET /', function () {
    $view = new Template();
    echo $view->render('views/home.html');
});