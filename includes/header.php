<?php

$current_page = basename($_SERVER["PHP_SELF"]);
if ($current_page === 'index.php') {
    $logo = 'assets/guacamole-logo.png';
    $home_link = 'index.php';
    $learn_link = 'pages/learn.php';
    $practice_link = 'pages/practice.php';
    $review_link = 'pages/review.php';
    $connect_link = 'pages/connect.php';
    $css_link = 'styles.css';
    $js_link = 'script.js';
    $db_link = 'includes/dbc.php';
    $lessons_link = 'pages/lessons.php';
    $contact_link = 'index.php#contact';
    $about_link = 'pages/about.php';
    $sitemap_link = 'pages/sitemap.php';
} else {
  $logo = '../assets/guacamole-logo.png';
  $home_link = '../index.php';
  $learn_link = 'learn.php';
  $practice_link = 'practice.php';
  $review_link = 'review.php';
  $connect_link = 'connect.php';
  $css_link = '../styles.css';
  $js_link = '../script.js';
  $register_link = 'register.php';
  $db_link = '../includes/dbc.php';
  $lessons_link = 'lessons.php';
  $contact_link = '../index.php#contact';
  $about_link = 'about.php';
  $sitemap_link = 'sitemap.php';
}
include_once $db_link;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo $logo; ?>">
  <link rel="stylesheet" href="<?php echo $css_link; ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;500;700&family=IM+Fell+Double+Pica:ital@0;1&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <title>GuacaMOLE</title>
</head>

<body>
  <nav>
    <ul class="bottom-nav">
      <li><a href="<?php echo $home_link; ?>"><img src="<?php echo $logo; ?>" alt="" class="logo"></a></li>
      <li><a href="<?php echo $learn_link; ?>" class="nav-link">Learn</a></li>
      <li><a href="<?php echo $practice_link; ?>" class="nav-link">Practice</a></li>
      <!--<li><a href="<?php /*echo $review_link; */?>" class="nav-link">Review</a></li>-->
     <li><a href="<?php echo $connect_link; ?>" class="nav-link">Connect</a></li>
      <li><a href="<?php echo $lessons_link; ?>" class="nav-link">Lessons</a></li>
    </ul>
  </nav>
  <main>