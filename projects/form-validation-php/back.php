<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Resultado do Cadastro</title>
    <style>
    body {
        background-color: linen;
        display: flex;
        font-family: sans-serif;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }
    .card {
        background-color: white;
        padding: 10px 20px 10px;
        border-radius: 20px;
        text-align: center;
    }
    #tent
    {
        color: maroon;
    }
    h2 {
        margin-top: 10px;
        margin-bottom: 10px;
        line-height: 1.2;
        color: maroon;
    }
    h3
    {
        margin-top: 10px;
        margin-bottom: 10px;
    }
    p {
        color: #333;
    }
</style>
</head>
<body>
<div class="card">
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $email = $_POST["email"];
    $invite = $_POST["invite"];
    $genero = $_POST["genero"];
    $justify = $_POST["justify"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmarpassword"];

    if ($password !== $confirmpassword) {
        echo "<h2><strong>Erro: As senhas não conferem!</strong></h2>";
        echo "<a href='front.html'>Voltar e tentar novamente</a>";
        exit();
    }

    echo "<h2><strong>User $user, recebemos o seu formulario.</strong></h2>";
    echo "<h3>Confira seus dados:</h3>";

    echo "<p><strong>Usuario:</strong> $user</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Gênero:</strong> $genero</p>";
    echo "<p><strong>Invite Code:</strong> $invite </p>";
    echo "<p><strong>Justificativa:</strong> $justify </p>";
    echo "<hr>";
    echo "<h3 id='tent'> <strong>Caso tenha digitado algo errado:</strong> emailparacontato@gmail.com</h3>";
} else {
    echo "<h1> Nenhum dado cadastrado ainda!</h1>";
} ?>
</div>
</body>
</html>
