<?php

define('DB_USER', 'kiso');
define('DB_PASSWORD', 'password');//mysql valjda za mac :P
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'aneskiso');


$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect' . mysqli_connect_error());

?>
