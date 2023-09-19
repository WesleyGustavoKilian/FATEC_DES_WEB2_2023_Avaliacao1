<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_start(); //Inicializar a Session  
        if($_POST['username'] == 'portaria' and $_POST['password'] == 'fatecararas'){ // Se o usuario e senha forem válidos...
            $_SESSION['loggedin'] = TRUE; // A Session loggedin é VERDADEIRA
            header("location: inicio.php"); // Redireciona para o Inico.PHP     <!-- NOME DA PASTA !-->
        } else {
            $_SESSION['loggedin'] = FALSE; // se não seta no session loggedin como FALSO!!!
        }
    }
?>
 
 <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .title{text-align: center; margin-top:30px;}
        .campo{ width: 350px; padding: 20px; margin: auto; margin-top: 50px;}
    </style>
</head>
<body>
    
    <h1 class="title">1° PROVA - FATEC</h1>
    <div class="campo">
        <h2>Acesso ao Sistema:</h2>
        <p>Inserir Usuario e senha</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Usuario</label>
                <input type="text" name="username" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="password" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acesso">
            </div>
        </form>
    </div>    
</body>
</html>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>