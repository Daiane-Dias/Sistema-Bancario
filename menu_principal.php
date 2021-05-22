<?php


include 'config/conexao.php';
include 'config/funcoes.php';


?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Menu - Instituicao</title>
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
    <li><a href="principal.php">Home</a></li>
    <li><a href="cadastroi.php">Cadastro</a></li>
     <li>
       <a href="#">Compartilhamento</a>
    <ul class="sub-menu">
     <li><a href="cadastracomp.php">Cadastrar </a></li>
    <li><a href="visualizacomp.php">Visualizar</a></li>
  </ul>
  </li>
  <li>
    <a href="#">Cadastro Cliente</a>
  <ul class="sub-menu"> 
    <li><a href ="cadastroci.php">Cadastrar  </a></li>
    <li><a href ="editarc.php">Editar  </a></li>
</ul>
</li>
    <li>
      <a href="#">Contas da Instituicao</a>
    <ul class="sub-menu">
    <li><a href="cadastroi.php">Cadastrar  </a></li>
    <li><a href="editai.php">Editar </a></li>
  </ul>
  </li>
  <li>
    <a href="#">Produtos Financeiros</a>
    <ul class="sub-menu">
    <li><a href="cadastrop.php">Cadastrar </a></li>
    <li><a href="editap.php">Editar </a></li>
  </ul>
  </li>
  <li>
    <a href="#">Contratos </a>
    <ul class="sub-menu">
    <li><a href="cadastrocontrato.php">Cadastrar </a></li>
    <li><a href="editacontrato.php">Editar</a></li>
  </ul>
  </li>
  <li><a href="sair.php">Sair</a></li>
</ul>
</div>

</body>
</html>