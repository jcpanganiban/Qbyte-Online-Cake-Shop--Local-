<?php
require_once "../includes/dbh.inc.php";
require_once "../includes/functions.inc.php";

if (isset($_POST['update-name-submit'])){
  $username = $_POST['name'];
}