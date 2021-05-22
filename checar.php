<?php

include 'config/conexao.php';
include 'config/funcoes.php';

//session_star();

$login = $_POST["login"];
$senha = $_POST["senha"];
$entrar = $_POST["entrar"];

if(!empty($_POST) and (empty($_POST["login"])) or (empty($_POST["senha"]))){
    header("Location:login.php");
    exit;
}

if(isset($entrar)){

    $sql = mysqli_query($con,"Select * from usuarios where login='$login' and senha ='$senha' and ativo = 1") or die("Erro ao selecionar");
    if(mysqli_num_rows($sql)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e Senha incorrretos!');
        window.location.href='login.php';
        </script>";
        die();

    }else{
        
        $tipo = mysqli_fetch_assoc($sql);
        
      
         
        if($tipo["tipo"] == "cliente"){
            session_start();
            $_SESSION["login"] = $login;
            setcookie("Login",$login);
            header("Location:index.php");
        }
        if($tipo["tipo"] == "instituicao"){
            session_start();
            $_SESSION["login"] = $login;
            setcookie("Login",$login);
            header("Location:principal.php");
        }
       
    }

}

?>