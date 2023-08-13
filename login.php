<?php
  include 'banco.php';

  function verify($conexao) {
    $queryPass = "
    SELECT id_senha FROM tb_usuario 
      WHERE id_email = '{$_POST['email']}' 
    ";
    $result = mysqli_query($conexao, $queryPass);
    $dado = $result->fetch_assoc();
    return password_verify($_POST['senha'], $dado['id_senha']);
  }

  if (verify($conexao)) {
    session_start();
    $_SESSION['login'] = true;
    header('Location: index.php');
  }
  else {
    header('Location: login.html');
  }

?>