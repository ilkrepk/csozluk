<?php
define('hostname','localhost');
define('user', 'root');
define('password', '12345678');
define('databaseName', 'sozluk');

$connect = mysqli_connect(hostname, user, password, databaseName);
mysqli_set_charset($connect,"utf8");

?>