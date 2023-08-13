<!DOCTYPE html>
<?php
  session_start();
  if (!isset($_SESSION['login'])) {
    header('location: login.html');
  }
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/edit.css">
  <title>Document</title>
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
        <button onclick="location.href='sair.php'">Sair</button>
      </div>
    </nav>
  </header>
  <div class="container">
    <?php
      include 'banco.php';

      if (isset($_GET['id'])) {
        $query = "SELECT * FROM tb_curso WHERE cd_curso = '{$_GET['id']}'";
        $result = mysqli_query($conexao, $query);

        while ($dado = $result->fetch_assoc()) {
          $id = $dado['cd_curso'];
          $nome = $dado['nm_curso'];
          $horas = $dado['qt_horas'];
          $valor = $dado['vl_curso'];
          ?>
          <form action="update.php" method="post" class="form-group">
            <h1>EDITAR CURSO</h1>
            <input type="hidden" name="codigo" value="<?php echo $id; ?>">
            <input type="text" name="nome" value="<?php echo $nome; ?>" placeholder="Nome do curso" required>
            <input type="number" name="horas" value="<?php echo $horas; ?>" placeholder="Duração (em horas)" required>
            <input type="number" name="valor" value="<?php echo $valor; ?>" placeholder="Valor" required>
            <button type="submit">Atualizar</button>
            <span type="submit" onclick="location.href='index.php'">Voltar</span>
          </form>
          <?php
        }
      }
      else {
        header('Location: index.php');
      }
    ?>
  </div>
</body>
</html>