<!DOCTYPE html>
<?php 
  session_start();
  function status() {
    if (isset($_SESSION['login'])) {
      return "<button onclick=\"location.href = 'sair.php'\" class='btn-sair'>Sair</button>";
    }
    else {
      return "<button onclick=\"location.href = 'login.html'\" class='btn-entrar'>Entrar</button>";
    }
  }

  if (!isset($_SESSION['login'])) {
    header('Location: login.html');
  }

?> 
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/cadastro.css">
  <title>Cadastro de Cursos</title>
</head>
<body>
  <header>  
    <nav>
      <div class="container-header">
        <ul>
          <li>
            <a href="cadastro.php">Cadastro</a>
          </li>
          <li>
            <a href="index.php">Tabela de cursos</a>
          </li>
        </ul>
        <?php echo status() ?>
      </div>
    </nav>
  </header>
  <div class="container">
    <form action="create.php" method="POST" class="form-group">
      <h1>CADASTRO DE CURSOS</h1>
      <input type="number" name="codigo" placeholder="Código" required>
      <input type="text" name="nome" placeholder="Nome do Curso" required>
      <input type="number" name="horas" placeholder="Duração (em horas)" required>
      <input type="text" name="valor" placeholder="Valor" required>
      <button type="submit">Cadastrar curso</button>
      <span type="submit" onclick="location.href='index.php'">Voltar</span>
    </form>
  </div>
</body>
</html>