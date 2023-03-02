<?php
  
  error_reporting(E_ALL);
  ini_set('display_errors', 'on');

  include_once 'dbc.php';

  $topic = $_POST["topic"];

  $sql = "SELECT * FROM information WHERE category='$topic'";
  $result = mysqli_query($conn, $sql);

  $info = $result -> fetch_assoc();

  echo json_encode($info);