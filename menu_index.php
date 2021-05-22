<?php


include 'config/conexao.php';
include 'config/funcoes.php';


?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Menu - Cliente</title>
<meta content=width=device-with, initial-scale=1.0" name="viewport">
<meta content="" name="Login em sistema bancario">
<meta content="" name="Daiane Dias">
<link rel="icon" href="img/favicon.png">
<link  rel="stylesheet" type="text/css" href="css/estilo.css">
<!--<link rel="stylesheet" href="https://maxcnd.bootstrapcnd.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<script type="text/javascript" src="js/index.js"></script>
</head>
<body>

<div class="menu">
<ul class="menu-list">
    <li><a href="index.php">Home</a></li>
    <li><a href="cadastroc.php">Cadastro</a></li>
     <li>
       <a href="#">Compartilhamento</a>
    <ul class="sub-menu">
     <li><a href="autoriza.php">Autorizar </a></li>
    <li><a href="encerrar.php">Encerrar</a></li>
  </ul>
  </li>
    <li><a href ="visualiza.php">Visualiza Produtos</a> </li>
    <li>
      <a href="#">Contratos</a>
    <ul  class="sub-menu">
    <li><a href="autorizac.php">Autoriza </a></li>
    <li><a href="visualizac.php">Visualiza</a></li>
  </ul>
  </li>
  <li><a href="sair.php">Sair</a></li>
</ul>
</div>
</body>
</html>