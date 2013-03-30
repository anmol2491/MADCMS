<?php
session_start();

//MADCMS's db variables
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','mad');

//Connecting to our db using above variables and the retrned value gets stored in conn
$conn = @mysql_connect (DBHOST, DBUSER, DBPASS);
$conn = @mysql_select_db (DBNAME);

//Checking connection to db
if(!$conn){

  die( "Cannot find MADCMS db. Check PHPMYADMIN ");
}

//define include checker
define('included', 1);

//Including function.php 
include('functions.php');
?>
