<?php
    session_start();
    $cpf = $_SESSION['cpf'];

    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $senha = $_POST["senha"];

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo '<script>alert("email válido")</script>';
    }else {
        echo '<script>alert("email não válido")</script>';
    }

    include_once("conexao.php");

    mysqli_set_charset($conexao, "utf8");

    $updateBD = "update usuarios set email = '".$email."', cep = '".$cep."', endereco = '".$endereco."', cidade = '".$cidade."', uf = '".$uf."', senha = '".md5($senha)."' where cpf like '".$cpf."' ";

    $execucao = mysqli_query($conexao, $updateBD);

    if($execucao == true){
        echo("<script> alert('Dados alterados com sucesso.') </script>"); 
    }else{
        echo("<script> alert('Erro ao salvar os dados, favor, tente novamente.') </script>"); 
    }
   
    echo("<script> window.location.href = 'alterarMeusDados.php'</script>");
?>