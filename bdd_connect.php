<?php
// Database settings
$db="listoftext";
$dbhost="localhost";
$dbport=3307;
$dbuser="root";
$dbpasswd="";
 
$pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
$pdo->exec("SET CHARACTER SET utf8");
 
if (!$pdo) {
   die("Connection failed: " . mysql_error());
}
  echo "Connected successfully to database";

?>