<?php 

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'dbphp7');

$conn = new PDO('mysql:host='.HOST.';dbname='.DBNAME.';', USER, PASS);

 ?>