<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_job = "localhost";
$database_job='job';
$username_job = "nishal";
$password_job = "Nishal1337";
$job;
$database_job = mysqli_connect($hostname_job, $username_job, $password_job,"job") or trigger_error(mysqli_error(),E_USER_ERROR);


?>