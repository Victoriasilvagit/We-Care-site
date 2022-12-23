<?php

include("conexao.php");


$nomeempresa=$_POST["nomeempresa"];
$endereco=$_POST["endereco"]; 
$celular=$_POST["celular"]; 
$telefone=$_POST["telefone"]; 
$email=$_POST["email"];
$cnpj=$_POST["cnpj"]; 
//$ajuda=$_POST["ajuda"];

mysqli_query($sql,"insert into pat (nomeempresa,endereco,celular,telefone,email,cnpj) values ('$nomeempresa','$endereco','$celular','$telefone','$email',$cnpj')");
?>
