<?php

include 'config/conexao.php';
include 'config/funcoes.php';


$login = $_POST["login"];

$query_select = "Select * from usuarios where login = '$login'";
$select = mysqli_query($con,$query_select);
//$array = mysqli_fetch_array($select);

//if(!isset($senhanova)||(!$confirmesenha)){

  //  die("Erro os dados estão mal");
//}
   
$senhanova = isset($_POST["senha_nova"])?$_POST["senha_nova"]:"";
$confirmesenha = isset($_POST["confirme_senha"])?$_POST["confirme_senha"]:"";
if($senhanova != $confirmesenha){
   
    echo"<script language='javascrit' type='text/javascript'>
    alert('As senhas não são iguais!'); 
    window.location.href='recupera.php';
    </script>";
}
if(($senhanova == "") ||($confirmesenha == "")){

    echo"<script language='javascrit' type='text/javascript'>
    alert('Campos senha vazios.Favor digitar uma senha!'); 
    window.location.href='recupera.php';
    </script>";
}

if(mysqli_num_rows($select)<=0){
   // die("Senha ou login não encontrado!");
   echo"<script language='javascrit' type='text/javascript'>
   alert('Login não encontrado.Tente se cadastrar!'); 
   window.location.href='cadastro.html';
   </script>";
    return false;
    
    
}else{


    $sql="Update usuarios set senha = '$senhanova' where login = '$login'";
    $insert=mysqli_query($con,$sql);
    if($insert){

    echo"<script language='javascript' type='text/javascript'>
    alert ('Senha Salvo com sucesso!');
    window.location.href='login.php';
    </script>";
   

}
}
     
?>