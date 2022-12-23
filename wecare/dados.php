<?php

include("conexao.php");

$nome=$_POST["nome"];
$sobrenome=$_POST["sobrenome"]; 
$cpf=$_POST["cpf"];  
$datanascimento=$_POST["datanascimento"]; 
$endereco=$_POST["endereco"]; 
$cep=$_POST["cep"]; 
$cidade=$_POST["cidade"];  
$numero=$_POST["numero"]; 
$celular=$_POST["celular"]; 
$telefone=$_POST["telefone"]; 
$email=$_POST["email"];
$senha=$_POST["senha"]; 

mysqli_query($sql,"insert into usuariofis (nome,sobrenome,cpf,datanascimento,endereco,cep,cidade,numero,celular,telefone,email,senha) values ('$nome','$sobrenome','$cpf','$datanascimento','$endereco','$cep','$cidade','$numero','$celular','$telefone','$email','$senha')") ;

header('location:realizado.html');

?>