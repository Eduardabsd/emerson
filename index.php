<?php 
require_once 'db.php';

if($_SERVER['REQUEST_METHOB'] == 'POST'){
  $name= trim($_POST['name']??'');
  $dob= trim($_POST['dob']??'');
  $phone= trim($_POST['phone']??'');
  $email= trim($_POST['email']??'');
  $city= trim($_POST['city']??'');
}
  ?>
