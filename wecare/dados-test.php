<?php

session_start();


$email = $_POST["email"];
$senha = $_POST["senha"];

if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:index.php');
  }


else
{
  unset ($_SESSION['email']);
  unset ($_SESSION['senha']);

  header('location:Home.php');

}


?>