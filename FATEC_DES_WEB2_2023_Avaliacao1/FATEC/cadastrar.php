<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: index.php"); // NOME DA PASTA
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['nome'] != "" && $_POST['ra'] != "" && $_POST['placa'] != "") {
        $nome = $_POST['nome'];
        $ra = $_POST['ra'];
        $placa = $_POST['placa'];
        $filename = "arquivo.TXT"; // NOME DO ARQUIVO TXT

        // ATENÇÃO: Verificar se o arquivo existe
        if (!file_exists($filename)) {
            // Abrir no Modo Write
            $handle = fopen($filename, "w");
        } else {
            // Abrir no Modo Append
            $handle = fopen($filename, "a");
        }
        fwrite($handle, "$nome|$ra|$placa\n");
        fflush($handle);
        fclose($handle);
        header("location: inicio.php"); // NOME DA PASTA
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .campo{ width: 450px; padding: 20px;  margin: auto; margin-top: 50px;}
        .text-black{ color: black !important; font-weight: bold; margin-bottom: 15px; }
        .btn-right{ float: right !important; margin-right: 10px; margin-top: 12px;}
    </style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="btn-right ">
                <a href="logout.php" class="btn btn-danger">Sair</a> <!-- NOME DA PASTA !-->
            </div>
        </div>
    </nav>
    <div class="campo">
        <h2>Cadastro de Produtos</h2>
        <form action="cadastrar.php" method="post"> <!-- NOME DA PASTA !-->
            <div class="form-group">
                <label>Nome Completo</label>
                <input type="text" name="nome" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Ra</label>
                <input type="text" name="ra" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Placa do veículo</label>
                <input type="text" name="placa" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>
    </div>
</body>
</html>
