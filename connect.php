<?php
define('hostname','localhost');
define('user', 'root');
define('password', '');
define('databaseName', 'sozluk');

$connect = mysqli_connect(hostname, user, password, databaseName);
mysqli_set_charset($connect,"utf8");

?>