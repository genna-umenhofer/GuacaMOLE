<?php

function sanitize($dirty) {
  $clean = htmlentities($dirty, ENT_QUOTES, "UTF-8");
  return $clean;
}

?>