<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Sala</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" href="./img/hk-icon.png" type="image/png">
</head>

<body>
    <div id="sair-bg">
        <a href="../menu.php"><i class="fa-solid fa-right-from-bracket" id="sair"></i></a>
    </div>

    <form action="processar_reserva.php" method="POST">
        <img src="./img/Reservadesala.png" alt="" id="logo">
        <label for="nome">Nome do Solicitante:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="data">Data da Reunião:</label>
        <input type="date" id="data" name="data" required>

        <label for="hora">Horário da Reunião:</label>
        <input type="time" id="hora" name="hora" required>

        <button type="submit">Reservar</button>
    </form>
    <script src="script.js"></script>
</body>

</html>