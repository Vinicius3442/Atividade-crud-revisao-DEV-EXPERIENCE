<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_reserva";

// Criar conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $data = $_POST["data"];
    $hora = $_POST["hora"];

    // Inserir no banco
    $sql = "INSERT INTO reservas (nome, data, hora) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $data, $hora);

    if ($stmt->execute()) {
        $mensagem = "Reserva registrada com sucesso!";
    } else {
        $mensagem = "Erro ao registrar: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação da Reserva</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="./img/hk-icon.png" type="image/png">
</head>

<body>
    <div id="sair-bg">
        <a href="../menu.php"><i class="fa-solid fa-right-from-bracket" id="sair"></i></a>
    </div>
    <div class="container">
        <img src="./img/Reservacomsucesso.png" alt="" id="logo">
        <?php if ($mensagem === "Reserva registrada com sucesso!"): ?>
            <p><strong>Solicitante:</strong> <?= $nome ?></p>
            <p><strong>Data:</strong> <?= $data ?></p>
            <p><strong>Horário:</strong> <?= $hora ?></p>
        <?php endif; ?>
        <a href="index.php"><button>Voltar para a home</button></a>
    </div>
    </style>
    <script src="script.js"></script>
</body>

</html>