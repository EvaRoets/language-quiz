<?php

// Require the correct variable type to be used (no auto-converting)
declare(strict_types=1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

function displayErrors()
{
    var_dump("<pre>");
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
    echo '<h2>$_SERVER</h2>';
    var_dump($_SERVER["REQUEST_URI"]);
    var_dump("</pre>");
}

displayErrors();

// Load your classes
require_once 'classes/Data.php';
require_once 'classes/LanguageGame.php';
require_once 'classes/Word.php';
// require_once 'classes/Player.php'; // Only needed for extra's


// Start the game
$game = new LanguageGame();
//$game->run();

//session_destroy();

require 'view.php';
