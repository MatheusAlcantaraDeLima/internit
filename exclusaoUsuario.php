<?php
    session_start();
    $_SESSION['cpf'];

    $cpf = $_POST["excluir"];

    include_once("conexao.php");

    mysqli_set_charset($conexao, "utf8");

    $delete = "delete from usuarios where cpf like '".$cpf."' ";

    if($cpf != $_SESSION['cpf']){
        $execucao = mysqli_query($conexao, $delete);
        echo("<script> alert('Usuário apagado com sucesso.') </script>"); 
    }else{
        echo("<script> alert('Erro ao excluir, favor, tente novamente.') </script>"); 
    }
   
    echo("<script> window.location.href = 'outrosUsuarios.php'</script>");
?>