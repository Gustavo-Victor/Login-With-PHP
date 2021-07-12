<?php 
//inicar sessão
session_start();

//verificar se usuário existe
if(!isset($_SESSION['autenticado']) || empty($_SESSION['autenticado']) || $_SESSION['autenticado'] == false){
    header("Location: index.php");
    exit();
}

