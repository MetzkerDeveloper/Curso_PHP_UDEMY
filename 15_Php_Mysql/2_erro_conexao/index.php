<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db="concessionaria";



try{
  $conn = new mysqli($host,$user,$pass,$db);
  echo "conexão bem sucedida";
}catch (\Throwable $e) {
  echo "A conexão falhou <br>";
  echo "O erro foi: $e";
}