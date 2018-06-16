<?php
session_start();
if($_SESSION['authentifie'] == false){
  header('location: index.php');
}
?>
