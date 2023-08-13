<?php
    include 'banco.php';

    if (isset($_GET['id'])) {
        $codigo = $_GET['id'];
    }
    else {
        header('Location: index.php');
    }

    function deletar($conexao) {
        $query = "
            DELETE FROM tb_curso
            WHERE cd_curso = '{$_GET['id']}'
        ";
        return mysqli_query($conexao, $query);
    }

    if (deletar($conexao)) {
        header('Location: index.php');
    }
    else {
        echo "Erro na gravação, tente novamente mais tarde.";
    }

?>