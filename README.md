Flight Boilerplate
==================

A simple PHP flight boilerplate that I use often. Based off of the Flight extensible PHP micro-framework: <http://github.com/mikecao/flight>

```php
/* Required Documents */
require_once('flight/Flight.php');

/* Configuration */
Flight::register('db', 'PDO', array('hostname','database','username','password'));
// $db = Flight::db();

/* Document Functions */
function help(){
  echo 'This is your help documentation!';
}

/* Document Routes */
Flight::route('GET /', function(){
  echo 'Hello World!';
});

Flight::route('POST /', function(){
  echo 'This is a POST request';
});

Flight::route('/help', 'help');

/* Error Documents */
function notFound(){
  echo 'The resource you are trying to view is not here.';
}

Flight::map('notFound', 'notFound');

/* Execute the Document */
Flight::start();
```
