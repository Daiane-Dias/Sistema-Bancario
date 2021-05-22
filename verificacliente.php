<?php
include 'config/conexao.php';
include 'config/funcoes.php';


$cpf = $_POST["cpf"];
$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$nascimento = $_POST["nascimento"];
$nascimento = date("Y-m-d", strtotime(str_replace('/','-',$nascimento)));

$query_select = "Select * from clientes where cpf = '$cpf'";
$select = mysqli_query($con,$query_select);
$array = mysqli_fetch_array($select);




if($cpf == "" || $cpf == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('Os campos devem ser preenchidos');
    window.location.href='cadastroc.php';
    </script>";
}else{
    if($cpf == "cpf"){
        echo"<script language='javascrit' type='text/javascript'>
        alert('Esse cpf já existe'); 
        window.location.href='cadastroc.php';
        </script>";
        die();
    }else{
        $sql ="Insert into clientes(cpf,nome,endereco,data_nascimento) values('$cpf','$nome','$endereco','$nascimento')";
        $insert = mysqli_query($con,$sql);
        if($insert){
    
            echo"<script language='javascript' type='text/javascript'>
           alert('Cliente cadastrado com sucesso!');
           window.location.href='index.php';
           </script>";


        }else{
            
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possivel cadastrar Cliente!');
            window.location.href='cadastroc.php';
            </script>";
        }
    }
}

?>

