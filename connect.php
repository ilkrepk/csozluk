<?php
define('hostname','localhost');
define('user', 'cerkesoz_dbsozluk');
define('password', 'ilkrhcem1993');
define('databaseName', 'cerkesoz_dbsozluk');

$connect = mysqli_connect(hostname, user, password, databaseName);
mysqli_set_charset($connect,"utf8");

?>