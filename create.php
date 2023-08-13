<?php
  include 'banco.php';

  function adicionarCurso($conexao) {
    $query = "
      INSERT INTO tb_curso VALUES
      (
        '{$_POST['codigo']}',
        '{$_POST['nome']}',
        '{$_POST['horas']}',
        '{$_POST['valor']}'
      )
    ";
    return mysqli_query($conexao, $query);
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (adicionarCurso($conexao)) {
      header('Location: index.php');
    }
    else {
      echo "Erro ao gravar os dados. Tente novamente mais tarde.";
    }
    exit();
  }

  echo $_SERVER['REQUEST_METHOD'];
?>