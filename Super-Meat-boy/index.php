<?php

$host = "localhost";
$user = "root"; 
$pass = "";     
$db   = "db_formulario";


$conn = new mysqli($host, $user, $pass, $db);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_produto = $_POST['nome_produto'];
    $nota = $_POST['nota'];
    $comentario = $_POST['comentario'];

   
    $sql = "INSERT INTO formulario (nome_produto, nota, comentario) 
            VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sis", $nome_produto, $nota, $comentario);

    

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Feedback de Produtos</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <div class="container">
        <img src="logo.png" alt="Logo da Empresa" style="width:300px; height:auto;">
        <form method="post" action="">
            <label style="color: white;">Nome do Produto:</label><br>
            <input type="text" name="nome_produto" required><br>

            <label style="color: white;">Nota (0 a 10):</label><br>
            <input type="number" name="nota" min="0" max="10" required><br>

            <label style="color: white;">Comentário:</label><br>
            <textarea name="comentario" rows="5"></textarea><br>

            <input type="submit" value="Enviar Feedback">
        </form>
    </div>
</body>
</html>


