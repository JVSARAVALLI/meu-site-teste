<?php
session_start();

// Lista de usuários válidos (definidos manualmente)
$usuarios = [ // esse array definius os usuários válidos
    [
        "email" => "teste@email.com",// esse é o email
        "senha" => "123456",// essa é a senha
        "nome"  => "Usuário Teste"// esse é o nome
    ]
];

// Verifica se veio algo via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];//sendo apenas email e senha, não precisa de nome
    $senha = $_POST["senha"];

    foreach ($usuarios as $usuario) {//verifica se o email e a senha estão corretos
        if ($usuario["email"] === $email && $usuario["senha"] === $senha) {
            $_SESSION["email"] = $usuario["email"];
            $_SESSION["nome"] = $usuario["nome"];
            header("Location: produtos.html");
            exit;
        }
    }

    // Login inválido → volta para o index.html (com falha, opcionalmente com mensagem via GET)
    header("Location: index.html?erro=1");
    exit;
} else {
    // Acesso direto ao prc.php → redireciona
    header("Location: index.html");
    exit;
}
