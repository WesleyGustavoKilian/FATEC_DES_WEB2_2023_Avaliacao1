<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style type="text/css">
        .sair { float: right !important; margin-right: 10px; margin-top: 12px; }
        body { text-align: center; font-family: "arial"; }
        .atributos { width: 100%; }
        .excluir-btn { background-color: red; color: white; }
        .excluir-btn:hover {
            background-color: red;
            color: white;}
        
    </style>
    
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <h3 class="text-black">Cadastro de Estacionamento - FATEC</h3>
            </div>
            <div class="sair">
                <a href="logout.php" class="btn btn-danger">Sair</a> <!-- NOME DA PASTA !-->
            </div>
        </div>
    </nav>
    <div class="page-header">
        <h1>1° PROVA - FATEC</h1>
    </div>
    
    <h2>Nomes Cadastrados</h2>
    <div class="cadastrar">
        <section class="cadastro">
            <table class="atributos">
                <thead>
                    <tr>
                        <th class="text-center">Nome Completo</th>
                        <th class="text-center">Ra</th>
                        <th class="text-center">Placa veículo</th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(file_exists("arquivo.TXT")) {
                            $file = file("arquivo.TXT");
                            foreach($file as $line) {
                                $line = trim($line);
                                $cadastro = explode("|", $line);
                                echo "<tr><td>$cadastro[0]</td><td>$cadastro[1]</td><td>$cadastro[2]</td><td><a href='excluir.php?linha=$line' class='btn excluir-btn'>Excluir</a></td></tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
   
</body>
</html>

<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ 
        header("location: index.php"); // NOME DA PASTA 
        exit;
    }
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
