<?php
  $bdServidor = '127.0.0.1';
  $bdUsuario = 'root';
  $bdSenha = '';
  $bdBanco = 'cadastro_curso';
  $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

  if (!$conexao) {
    echo "Erro ao conectar no bando. Tente novamente mais tarde.";
    die();
  }
?>