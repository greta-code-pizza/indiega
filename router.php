<?php

if($_SERVER['REQUEST_URI'] == '/admin') {
  require_once('administration/index.php');
} else {
  if($_GET['page'] == "plop") {
    echo('Page Plop !');
  } else {
    echo('404 not found');
  }
}
