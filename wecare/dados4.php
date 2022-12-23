<?php

include("conexao.php");

$nome=$_POST["nome"];
$endereco=$_POST["endereco"]; 
$celular=$_POST["celular"]; 
$telefone=$_POST["telefone"]; 
$email=$_POST["email"];
$cpf=$_POST["cpf"]; 
//$descricao=$_POST["descricao"]; 

mysqli_query($sql,"insert into doe(nome,endereco,celular,telefone,email,cpf) values ('$nome','$endereco','$celular','$telefone','$email','$cpf'')") ;


?>
