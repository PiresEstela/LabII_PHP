<?php

$servername = "localhost";
$username = "root";
$password = "senac";
$dbname = "cliente";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){

    die("conexão falhou: ". $conn->connect_error);
}

?>