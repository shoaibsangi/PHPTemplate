<?php
session_start();

session_destroy();
echo "Hello";
header('location:login.php');

?>