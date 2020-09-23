<?php
$serverName="localhost";
$userName="root";
$userPassword="";
$dbName="se_old";

$conn = new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$userPassword);
?>