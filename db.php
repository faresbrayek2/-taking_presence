<?php
$base = mysqli_connect ('localhost', 'root', '');
mysqli_select_db ($base,'iset' ) ;
$pdo = new PDO('mysql:host=localhost;dbname=iset', 'root', '');
?>