<?php

session_start();

include 'config/conexao.php';
include 'config/funcoes.php';

?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Recupera Login</title>
<meta content=width=device-with, initial-scale=1.0" name="viewport">
<meta content="" name="Login em sistema bancario">
<meta content="" name="Daiane Dias">
<link rel="icon" href="img/favicon.png">
<link href="css/estilo.css" rel="stylesheet">
<script type="text/javascript" src="js/index.js"></script>
</head>
<body>

<div class="container">
<div class="box">

<h1 align ="center">Recupera Login</h1>

<div class="form">

<form  action="valida.php" method="post">
<div class="espaco">
<input type="text" class="" placeholder="Usuario" name="login" id="login">
</div>
<div  class="espaco">
<input type="password" class="" placeholder="Digite a Nova Senha" name="senha_nova" id="senha_nova" pattern="[A-z]{2}[a-z]{2}[0-9]{1}[!@#$%&*^\\/()]{1}">
</div>
<div  class="espaco">
<input type="password" class="" placeholder="Confirme a Nova Senha" name="confirme_senha" id="confirme_senha"  pattern="[A-z]{2}[a-z]{2}[0-9]{1}[!@#$%&*^\\/()]{1}">
</div>
<div  class="espaco">
<button type="submit" value="recuperar" name="recuperar" id="recuperar" class="btn-branco">Recuperar</button>
</div>
</form>
</div>

</div>
</div>

<script>alert("Crie  com no minimo 6 digitos(com 2 letra maisculas, 2 letra minuscula, 1 numero, 1 carater especial)!");</script>
</body>
</html>
