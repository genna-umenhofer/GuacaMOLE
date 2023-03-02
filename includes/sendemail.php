<?php

require "../vendor/autoload.php";
include("../.env.php");
include("../functions.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Include the recaptcha autoload file
//require_once __DIR__ . '../vendor/autoload.php';

// Verify the user's response token
$recaptcha = new \ReCaptcha\ReCaptcha($secretKey);
$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

if ($resp->isSuccess()) {
    // The user's response token is valid
    //echo '<script>alert("It worked!")</script>';
    $dirtyfName = $_POST["first-name"];
    $dirtylName = $_POST["last-name"];
    $dirtyEmail = $_POST["email"];
    $dirtyMessage = $_POST["message"];

    $firstName = sanitize($dirtyfName);
    $lastName = sanitize($dirtylName);
    $email = sanitize($dirtyEmail);
    $message = sanitize($dirtyMessage);

    $mail = new PHPMailer(true);

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->isHTML(true);

    $mail->Username = $useremail;
    $mail->Password = $userpass;

    $mail->setFrom($email, $name);
    $mail->addAddress($useremail, "Genna");

    $mail->Subject = "New messge from GuacaMOLE";
    $mail->Body = "<h1>You have a new message from GuacaMOLE</h1><br><strong>Name:</strong> $firstName $lastName<br><strong>Email:</strong> $email <br><strong>Message:</strong> $message";

    $mail->send();

    header("Location: ../pages/thanks.php");
} else {
    // The user's response token is invalid
    echo '<script>alert("Something went wrong. Please go back and try again.")</script>';
    $errors = $resp->getErrorCodes();
}


error_reporting(E_ALL);
ini_set('display_errors', 'on');
/*
  $firstName = $_POST["first-name"];
  $lastName = $_POST["last-name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $secret = "6LfreYokAAAAAGXqPesaxeZSkTT1b5RpxYQBaLK0";
  $response = $_POST['g-recaptcha-response'];
  var_dump($response);
  $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response= $response";
  $data = file_get_contents($url);
  $row = json_decode($data, true);

  if ($row['success'] == "true") {

    $mail = new PHPMailer(true);

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = "genna.umenhofer.developer@gmail.com";
    $mail->Password = "fnszcgqapmjofxfz";

    $mail->setFrom($email, $name);
    $mail->addAddress("genna.umenhofer.developer@gmail.com", "Genna");

    $mail->Subject = "New messge from GuacaMOLE";
    $mail->Body = $message;

    $mail->send();

    header("Location: ../pages/thanks.php");
  } else {
    echo '<script>alert("Something went wrong. Please try again.")</script>';
  }
*/



?>