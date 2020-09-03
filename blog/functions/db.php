<?php 

$user   = "root";
$host   = "localhost";
$pass   = "?>bismillah";
$dbname = "my_blog";

$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass) or die("Db Gak connect");


?>