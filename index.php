<?php
/**
 *
 * Title:GRC/IT328/Dating App/index.php
 * Author: Robert Hill III
 * Date: 04.18.2019
 * Code Version: V1.0
 * Availability: http://rhill.greenriverdev.com/328/datingB/index.php
 *
 */

//Start session
session_start();

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

////Include static head
//include('views/head.html');

//Create an instance of the Base class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function()
{
    echo"<h1>my Pets</h1><br><p><a href='order'>Order a pet</a></p>";
//    //Display a view
//    $view = new Template();
//    echo $view->render('views/home.html');

});

$f3->route('GET /order', function()
{
    //Display a view
    $view = new Template();
    echo $view->render('views/form1.html');

});

$f3->route('POST /order2', function()
{
<<<<<<< HEAD
    print_r($_POST['animal']);
//    echo"<h1>my Pets</h1><br><p><a href='order'>Order a pet</a></p>";
=======
    print_r['animal'];
>>>>>>> cf2d6665099d05fbebdecbc0f15e8eeaaf842fc3
//    //Display a view
    $view = new Template();
    echo $view->render('views/home.html');

});
//Define a Lunch route with a parameter
$f3->route('GET /@animal', function($f3,$params)
{
    $animal = $params['animal'];
    switch($animal)
    {
        case 'chicken':
            echo "Cluck!";
            break;

        case 'dog':
            echo "Wuff!";
            break;

        case 'Cat':
            echo "Meow!";
            break;

        case 'pig':
            echo "Oink!";
            break;

        case 'wolf':
            echo "Ouuuuu!";
            break;

        default:
            $f3->error(404);
    }
});

$f3->route('POST /results', function()
{
//    //Display a view
    $view = new Template();
    //echo $view->render('views/home.html');

});

//Run fat free
$f3->run();