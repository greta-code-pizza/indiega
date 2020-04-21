<?php

if($_GET['page'] == "admin") {
  require_once('administration/index.php');
} else {
  if($_GET['page'] == "plop") {
    echo('Page Plop !');
  } else {
    echo("<a href='http://localhost:8888/admin'>Go admin</a>");
  }
}
