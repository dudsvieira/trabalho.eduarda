<?php
// Lógica de recuperação de senha aqui
    
    

    // Adicione a lógica de envio de email de recuperação de senha aqui.
    // Isso pode envolver a geração de um token único, envio de e-mail e
    // armazenamento temporário do token no banco de dados.

    // Exemplo básico (substitua pela lógica real):

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueceu Senha</title>
    
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }

    input,
    select {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="radio"] {
        margin-right: 5px;
    }

    button {
        background-color: #6107a6;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    </style>
</head>
<body>
    <div class="container">
        <form action="esqueceu_senha.php" method="POST">
            <h2>Esqueceu Senha</h2>
            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <button type="submit">Recuperar Senha</button>
        </form>
    </div>
</body>
</html>