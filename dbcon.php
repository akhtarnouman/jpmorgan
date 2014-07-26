<?php
$hostname_conn = "localhost";
$database_conn = "questalliance";
$username_conn = "root";
$password_conn = "";
$db = mysqli_connect($hostname_conn, $username_conn, $password_conn,$database_conn) or die('Can\'t create connection: '.mysqli_error());
?>