<?php

session_start();
/*session.cookie_httponly=1;
session.cookie_secure=1;
session.use_only_cookie=1;*/

include 'config/conexao.php';
include 'config/funcoes.php';

/*$id_admin = (isset($_SESSION['id_admin'])) ? $_SESSION['id_admin'] : '';
if ($id_admin !== NULL)
{
    header("location:sistema.php");
    exit;
}*/

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta content=width=device-with, initial-scale=1.0" name="viewport">
<meta content="" name="Login em sistema bancario">
<meta content="" name="Daiane Dias">
<link rel="icon" href="img/favicon.png">
<link href="css/estilo.css" rel="stylesheet">
<!--<link rel="stylesheet" href="https://maxcnd.bootstrapcnd.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<script type="text/javascript" src="js/index.js"></script>
</head>
<body>

<div class="container">
<div class="box">

<h1 align ="center">Faça seu Login</h1>

<div  class= "form">
<form  action="checar.php" method="post">
<div class ="espaco">
<input type="text" class="" placeholder="Usuario" name="login">
</div>
<div  class ="espaco">
<input type="password" class="" placeholder="Senha" name="senha">
</div>
<div  class ="espaco">  
<button type="submit" value="entrar" name="entrar" id="entrar" class="btn-branco">Entrar</button>
</div>
</form>
</div>

<div  class ="espaco">  
<div class="esqueci">
<a href="cadastro.html" ><span>Ainda não tem conta?</span></a>
<a href="recupera.php" ><span>Esqueci minha senha?</span></a>
</div>
</div>

</div>
</div>

</body>
</html>
