Flight Boilerplate
==================

A simple boilerplate based off of the [Flight](http://github.com/mikecao/flight) PHP framework.

```php
require 'vendor/autoload.php';

Flight::register('db', 'PDO', array('mysql:host=localhost;port=3306;dbname=database', 'username', 'password'), function($db) {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
});

function help() {
  echo 'This is your help documentation!';
}

/* Routes */
Flight::route('GET /', function() {
  echo 'Hello World!';
});

Flight::route('POST /@name', function($name) {
  echo 'Hello, '.$name.', how are you?';
});

Flight::route('/help', 'help');

function notFound() {
  echo 'The resource you are trying to view is not here.';
}

Flight::map('notFound', 'notFound');

/* execute */
Flight::start();
```
