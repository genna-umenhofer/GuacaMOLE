<?php
include('../.env.php');


$dbServerName = $databServer;
$dbUserName = $databUser;
$dbPassword = $databPass;
$dbName = $databName;

$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

