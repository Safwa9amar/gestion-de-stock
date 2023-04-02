<?php
// connect to mysqli 
$user = "root";
$password = '';
$host = "localhost";
$db = "gestion_stock";
$connection = mysqli_connect($host, $user, $password) or die ("Unable to connect!");
mysqli_select_db($connection, $db) or die ("Unable to select database!");