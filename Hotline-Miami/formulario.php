<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <title>Página do Formulário</title>
</head>

    <div class="container">
      <img src="./img/Cadastrocliente.png" alt="Cadastro de Clientes" class="titulo-img">
      <p>Preencha as informações abaixo</p>

        <form action="cadastrar.php" method="POST">
          <label for="nome">Nome:</label><br>
          <input type="text" id="nome" name="nome" required><br>

          <label for="email">E-mail:</label><br>
          <input type="email" id="email" name="email" required><br>

          <label for="telefone">Telefone:</label><br>
          <input type="tel" id="telefone" name="telefone" required><br>

          <input type="submit" value="Enviar">
        </form>
     </div>

</body>
</html>



