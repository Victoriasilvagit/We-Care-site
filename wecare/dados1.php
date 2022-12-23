<?php

include("conexao.php");

$nomeempresa=$_POST["nomeempresa"];
$cnpj=$_POST["cnpj"]; 
$endereco=$_POST["endereco"]; 
$cep=$_POST["cep"]; 
$cidade=$_POST["cidade"];  
$numero=$_POST["numero"]; 
$celular=$_POST["celular"]; 
$telefone=$_POST["telefone"]; 
$email=$_POST["email"];
$senha=$_POST["senha"]; 

mysqli_query($sql,"insert into usuariojud (nomeempresa,cnpj,endereco,cep,cidade,numero,celular,telefone,email,senha) values ('$nomeempresa','$cnpj','$endereco','$cep','$cidade','$numero','$celular','$telefone','$email','$senha')") ;


header('location:realizado.html');
?>
