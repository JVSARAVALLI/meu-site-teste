<?php 
if ($_SESSION["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"] ?? "visitante";
        $email = $_POST["email"];
        $senha = $_POST["senha"];
}
    if ($email === "teste@exmpl.com" && $senha === "teste123") {
        header("Location: cmpr.html");
        exit();
        } else {
            echo "Email ou senha inválidos. Tente novamente.";
}

?>