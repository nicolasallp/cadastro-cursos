<?php
  include 'banco.php';

  function update($conexao) {
    $query = "
      UPDATE tb_curso SET
      nm_curso = '{$_POST['nome']}',
      qt_horas = '{$_POST['horas']}',
      vl_curso = '{$_POST['valor']}'
      WHERE cd_curso = '{$_POST['codigo']}'
    ";
    return mysqli_query($conexao, $query);
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (update($conexao)) {
      header('Location: index.php');
    }
    else {
      echo "Erro na gravação, tente novamente mais tarde.";
    }
  }
?>