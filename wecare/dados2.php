<?php

 include("conexao.php");


$email=$_POST["email"];
$senha=$_POST["senha"]; 

mysqli_query ($sql,"insert into login (email,senha) values ('$email','$senha')");

header('location:dados-test.php');
?>