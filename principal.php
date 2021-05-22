<?php

include 'config/conexao.php';
include 'config/funcoes.php';

session_start()
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Pagina Principal - Bancaria </title>
<meta content=width=device-with, initial-scale=1.0" name="viewport">
<meta content="" name="Login em sistema bancario">
<meta content="" name="Daiane Dias">
<link rel="icon" href="img/favicon.png">
<link href="css/estilo.css" rel="stylesheet"media="screen and (max-width: 800px)">
</head>
<body>
<div>
<?php include 'menu_principal.php';?>
</div>
<div>
<p>Seja bem vindo(a) <?php echo $_SESSION["login"];?>!</p>
</div>

<?php include 'rodape.php';?>
</body>
</html>