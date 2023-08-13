<?php
  include 'banco.php';

  function incluir($conexao) {
    $hash = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $query = "
      INSERT INTO tb_usuario
      (nm_usuario, id_email, id_senha) VALUES
      ('{$_POST['usuario']}', '{$_POST['email']}', '{$hash}')
    ";
    return mysqli_query($conexao, $query);
  }

  if (incluir($conexao)) {
    header('location: login.html');
  }
  else {
    echo 'Erro ao cadastrar, tente novamente.';
  }
?>