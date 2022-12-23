<?php

include("conexao.php"); 

$nome=$_POST['nome'];
$email=$_POST['email'];
$comentario=$_POST['comentario'];

$insert="insert into coment (nome, email, comentario) values ('$nome','$email','$comentario')";

?>