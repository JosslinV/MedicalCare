<?php
session_start();

session_destroy();
echo("ok");
header('location: ../index.php');
?>
