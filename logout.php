<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['name']);
$_SESSION['login']=false;
session_destroy();

header("location:index.php");
?>