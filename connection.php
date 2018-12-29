<?php

define('DB_USER', 'abu');
define('DB_PASSWORD', 'aburefko159753');//mysql valjda za mac :P
define('DB_HOST', 'localhost');
define('DB_NAME', 'aneskiso');


$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('could not connect' . mysqli_connect_error());

?>
