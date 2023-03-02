<?php
  

  error_reporting(E_ALL);
  ini_set('display_errors', 'on');


  include_once 'dbc.php';

  $num = $_POST["id"];
  $topic = $_POST["topic"];

  $sql = "SELECT * FROM practice WHERE category='$topic' AND num='$num'";
  $result = mysqli_query($conn, $sql);

  $questions = $result -> fetch_assoc();

  echo json_encode($questions);