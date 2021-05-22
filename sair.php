<?php
session_start();
unset($SESSION['login']);
header("location:login.php");
exit;
?>