<?php
$servername = "localhost";
$username = "root";
$password = "abcd1234";
$db = "banco";

//Criando conexão
$con = new mysqli($servername, $username, $password);
//Conectando com o banco
$banco = mysqli_select_db($con,$db);
//checando conexão
if($con -> connect_error){
    die("Conexão falhou".$con->connect_error);
}
// echo "Connectado com sucesso!";

 ?>
