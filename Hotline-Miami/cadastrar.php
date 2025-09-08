<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dados Cadastrados</title>
    <link rel="stylesheet" href="style.css.css">

</head>
<body>
    <div class="container">
        <h1>Dados Recebidos</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nome = htmlspecialchars(trim($_POST["nome"]));
            $email = htmlspecialchars(trim($_POST["email"]));
            $telefone = htmlspecialchars(trim($_POST["telefone"]));

            echo "<ul>";
            echo "<li><strong>Nome:</strong> $nome</li>";
            echo "<li><strong>E-mail:</strong> $email</li>";
            echo "<li><strong>Telefone:</strong> $telefone</li>";
            echo "</ul>";
        } else {
            echo "<p>Nenhum dado foi enviado.</p>";
        }
        ?>
    </div>
</body>
</html>






























$mensagem = "Cadastro realisado com sucesso!"
echo <script>alert ('".$mensagem."') </script>
?>