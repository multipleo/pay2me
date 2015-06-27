<?php
$server = "localhost";
$pass = "vertrigo";
$user = "root";
$banco = "wishlist";
$con = mysql_connect($server, $user, $pass) or die("Erro ao conectar com o banco");
mysql_select_db($banco) or die("Não foi possivel encontrar a database: $banco");
?>
