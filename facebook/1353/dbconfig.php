<?php
define('localhost', 'localhost');
define('root', 'username');    // DB username
define('', 'password');    // DB password
define('reflections', 'database');      // DB name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>