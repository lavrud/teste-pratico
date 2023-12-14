<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nome']) && isset($_POST['email'])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        if (empty($nome) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Erro: Por favor, preencha todos os campos corretamente.";
        } else {
            echo "Nome: " . htmlspecialchars($nome) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
        }
    } else {
        echo "Erro: Campos obrigatórios ausentes.";
    }
} else {
    echo "Formulário não enviado.";
}
