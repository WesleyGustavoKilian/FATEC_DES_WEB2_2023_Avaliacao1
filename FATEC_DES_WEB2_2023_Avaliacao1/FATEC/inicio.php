<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ 
        header("location: index.php"); //NOME DA PASTA
        exit;
    }
?>
 
 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .sair{ float: right !important; margin-right: 10px; margin-top: 12px;}
        body{ font-family:"arial"; text-align: center;}
        .titulo{ margin-bottom: 15px;}

    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="sair">
                <a href="logout.php" class="btn btn-danger">Sair</a> <!-- NOME DA PASTA !-->
            </div>
        </div>
    </nav>
    <div class="page-header">
        <h1>1° PROVA - FATEC</h1>
    </div>
    <p>
        <a href="cadastrar.php" class="btn btn-primary">Cadastrar </a> <!-- NOME DA PASTA !-->
        <br><br>

        <a href="cadastro.php" class="btn btn-primary">Listar campos Cadastrados</a> <!-- NOME DA PASTA !-->
        <br><br>
    </p>
       
</body>
</html>