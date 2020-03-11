<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereço"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $senha = $_POST["senha"];

    //Valida o email antes de salvar no BD
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo '<script>alert("email válido")</script>';
    }else {
        echo '<script>alert("email não válido")</script>';
    }

    require_once("conexao.php");

    mysqli_set_charset($conexao, "utf8");

    $insertTable = "insert into usuarios(nome, email, cpf, cep, endereco, cidade, uf, senha) values('".$nome."', '".$email."', '".$cpf."', '".$cep."', '".$endereco."', '".$cidade."', '".$uf."', '".md5($senha)."')";

    if(mysqli_query($conexao, $insertTable)){
        echo  "<script>alert('Gravado com sucesso');</script>";
        echo  '<script>window.location.href="logar.php"</script>';
    }else{
        echo  "<script>alert('Erro ao gravar');</script>";
        echo  '<script>window.location.href="registrar.php"</script>';
    }
?>