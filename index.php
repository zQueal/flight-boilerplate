<?php

# Required Documents
require 'vendor/autoload.php'); # for use with composer

# Configuration
Flight::register('db', 'PDO', array('mysql:host=localhost;port=3306;dbname=database', 'username', 'password'), function($db) {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
});
// $db = Flight::db();

# Functions
function help(){
  echo 'This is your help documentation!';
}

# Routes
Flight::route('GET /', function(){
  echo 'Hello World!';
});

Flight::route('POST /@name', function($name){
  echo 'Hello, '. $name . ', how are you?';
});

Flight::route('/help', 'help');

# Error Documents
function notFound(){
  echo 'The resource you are trying to view is not here.';
}

Flight::map('notFound', 'notFound');

# Execute
Flight::start();

?>
