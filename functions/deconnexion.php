<?php
session_start();

session_destroy();
echo("ok");
header('location:../site/login.php');
?>
