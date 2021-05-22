<?php
include 'config/conexao.php';
include 'config/funcoes.php';


$cnpj = $_POST["cnpj"];
$razao = $_POST["razao"];
$fantasia = $_POST["fantasia"];
$codigo = $_POST["codigo"];
$logo = $_FILES["logo"]; 


$query_select = "Select * from instituicao_financeira where cnpj = '$cnpj'";
$select = mysqli_query($con,$query_select);
$array = mysqli_fetch_array($select);


if($cnpj == "" || $cnpj == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('Os campos devem ser preenchidos');
    window.location.href='cadastroi.php';
    </script>";
}else{
    if($cnpj == "cnpj"){
        echo"<script language='javascrit' type='text/javascript'>
        alert('Esse cnpj já existe'); 
        window.location.href='cadastroi.php';
        </script>";
        die();
    }else{

        if($logo != NULL) 
        $nomeFinal = time().'.jpg';
        if (move_uploaded_file($logo['tmp_name'], $nomeFinal)) 
            $tamanhoImg = filesize($nomeFinal);
        
            $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
        

        $sql ="Insert into instituicao_financeira(cnpj,razao_social,nome_fantasia,codigo_bancario,logomarca) values('$cnpj','$razao','$fantasia','$codigo','$logo')";
        $insert = mysqli_query($con,$sql);
                unlink($nomeFinal);
        if($insert){
    
            echo"<script language='javascript' type='text/javascript'>
           alert('Instituição cadastrado com sucesso!');
           window.location.href='principal.php';
           </script>";
     
      
        }else{
           
            
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possivel cadastrar Instituição!');
            window.location.href='cadastroi.php';
            </script>";
        } 
    }
}
?>