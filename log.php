<?php
session_start();
$_SESSION=array();
session_destroy();
header("LOCATION:http://localhost/projetsUE017/authentification.php");
?>