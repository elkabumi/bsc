<?php
ob_start();
session_start();
$con = mysql_connect("localhost","root","");
mysql_select_db("bsc", $con);
unset($_SESSION['menu_active']);
?>