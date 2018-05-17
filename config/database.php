<?php 
$server="localhost";
//$username="webReflections";
//$password="webReflections@123#";
//$database="webReflections";//
$username="root";
$password="";
$database ="webReflections";
$link = mysqli_connect($server, $username, $password);
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$selecDatabase=mysqli_select_db($link,$database);
if (!$selecDatabase) {
    die('Could not selct db:' .mysql_error());
}

?>