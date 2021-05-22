<?php
include 'config/conexao.php';
include 'config/funcoes.php';



$login = $_POST["login"];
$senha = $_POST["senha"];
$tipo = $_POST["tipo"];
$ativo = 1;
$entidade = $tipo;
//$connect = mysqli_connect("localhost","root","");
//$db= mysqli_select_db("banco",$connect);
$query_select = "Select login from usuarios where login = '$login'";
$select = mysqli_query($con,$query_select);
$array = mysqli_fetch_array($select);
//$logarray = $array["login"];



if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>
    alert 'O campo login deve ser preenchido';
    window.location.href='cadastro.html';
    </script>";
}else{
    if($login == "login"){
        echo"<script language='javascrit' type='text/javascript'>
        alert('Esse login já existe'); 
        window.location.href='cadastro.html';
        </script>";
        die();
    }else{
        $sql ="Insert into usuarios(login,senha,ativo,tipo,entidade) values('$login','$senha','$ativo','$tipo','$entidade')";
        $insert = mysqli_query($con,$sql);
        if($insert){
    
            echo"<script language='javascript' type='text/javascript'>
           alert('Usuario cadastrado com sucesso!');
           window.location.href='login.php';
           </script>";


        }else{
            
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possivel cadastrar usuario!');
            window.location.href='cadastro.html';
            </script>";
        }
    }
}

?>



