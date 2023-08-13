<!DOCTYPE html>
<?php include 'banco.php';
  session_start();
  function status() {
    if (isset($_SESSION['login'])) {
      return "<button onclick=\"location.href = 'sair.php'\" class='btn-sair'>Sair</button>";
    }
    else {
      return "<button onclick=\"location.href = 'login.html'\" class='btn-entrar'>Entrar</button>";
    }
  }
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
        <?php echo status(); ?>
      </div>
    </nav>
  </header>
  <div class="div-container">
    <div class="div-table">
      <table class="table table-light table-bordered">
        <thead>
          <tr>
            <th>Código</th>
            <th>Nome do curso</th>
            <th>Duração (em horas)</th>
            <th>Valor</th>
            <?php if (isset($_SESSION['login'])) { ?>
              <th colspan="2" class="ud-row"></th>
            <?php } ?>
          </tr>
        </thead>
        <?php
          function lista_curso($conexao) {
            $query = "SELECT * FROM tb_curso";
            $resultado = mysqli_query($conexao, $query);
            return $resultado;
          }

          $listagem = lista_curso($conexao);

          if ($listagem->num_rows > 0) {
            while ($dado = $listagem->fetch_assoc()) {
              ?>
                <tr class="dados-tr">
                  <th scope="row"><?php echo $dado['cd_curso'];?></td>
                  <td><?php echo $dado['nm_curso'];?></td>
                  <td><?php echo $dado['qt_horas'];?></td>
                  <td><?php echo "R$" . str_replace(".", ",", $dado['vl_curso']);?></td>
                  <?php if (isset($_SESSION['login'])) { ?>
                    <td><a class="icon update" href="edit.php?id=<?php echo $dado['cd_curso'];?>"></a></td>
                    <td><a class="icon delete" href="delete.php?id=<?php echo $dado['cd_curso'];?>"></a></td>
                  <?php } ?>

                </tr>
          <?php
            }
          }
          ?>
      </table>
    </div>
    <button class="btn-cadastro" onclick="location.href = 'cadastro.php'">Adicionar um curso</button>
  </div>
</body>
</html>