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
    echo $view->render('views/home.php');
});

$f3->route('GET|POST /home', function () {
    $view = new Template();
    echo $view->render('views/home.php');
});

$f3->route('GET|POST /aboutUs', function () {
    $view = new Template();
    echo $view->render('views/aboutUs.html');
});

$f3->route('GET|POST /book', function () {
    $view = new Template();
    echo $view->render('views/book.php');
});

$f3->route('GET|POST /gallery', function () {
    $view = new Template();
    echo $view->render('views/gallery.php');
});

//Run fat-free
$f3 ->run();