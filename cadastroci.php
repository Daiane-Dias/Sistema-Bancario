<?php

session_start();
/*session.cookie_httponly=1;
session.cookie_secure=1;
session.use_only_cookie=1;*/

include 'config/conexao.php';
include 'config/funcoes.php';


?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Cadastro Cliente</title>
<meta content=width=device-with, initial-scale=1.0" name="viewport">
<meta content="" name="Login em sistema bancario">
<meta content="" name="Daiane Dias">
<link rel="icon" href="img/favicon.png">
<link href="css/estilo.css" rel="stylesheet">
<!--<link rel="stylesheet" href="https://maxcnd.bootstrapcnd.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<script type="text/javascript" src="js/index.js"></script>
</head>
<body>

<div>
<?php include 'menu_principal.php';?>
</div>

<div class="container">
<div class="box">

<h1 align ="center">Faça o Cadastro do seu Cliente</h1>

<div  class= "form">
<form  action="verificaclientei.php" method="post">
<div class ="espaco">
<input type="text" class="" placeholder="CPF" name="cpf"  maxlength="14" onblur="return validarCPF(this.value)">
</div>
<div  class ="espaco">
<input type="text" class="" placeholder="Nome" name="nome">
</div>
<div  class ="espaco">
<input type="text" class="" placeholder="Endereco" name="endereco">
</div>
<div  class ="espaco">
<input type="text" class="" placeholder="Data de Nascimento" name="nascimento" maxlength="10">
</div>
<div  class ="espaco">  
<button type="submit" value="cadastrar" name="cadastrar" id="cadastrar" class="btn-branco">Cadastrar</button>
</div>
</form>
</div>
</div>
</div>

<?php include 'rodape.php';?>

</body>
</html>