
<?php
if(isset($_GET["linha"])) {
    $linhaExcluir = $_GET["linha"];
    
    // Ler o conteúdo do arquivo
    $arquivo = "arquivo.TXT";
    $conteudo = file($arquivo);
    
    // Abrir o arquivo para escrita
    $arquivoAberto = fopen($arquivo, "w");
    
    // Escrever todas as linhas, exceto a linha a ser excluída
    foreach($conteudo as $linha) {
        if(trim($linha) != $linhaExcluir) {
            fwrite($arquivoAberto, $linha);
        }
    }
    
    // Fechar o arquivo
    fclose($arquivoAberto);
    
    // Redirecionar de volta para a página principal
    header("Location: cadastro.php"); // NOME DA PASTA
    exit;
}
?>

