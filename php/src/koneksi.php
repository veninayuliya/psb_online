<?php
define('DB_SERVER','172.20.0.2');
define('DB_USER','root');
define('DB_PASS','admin');
define('DB_NAME','psb_online');

$db = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
?>