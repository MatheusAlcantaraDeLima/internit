<?php
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    include_once("conexao.php");

    $querySelect = "select cpf, senha, nome from usuarios where cpf like '".$cpf."' "; // Busca os dados no BD

    $execucao = mysqli_query($conexao, $querySelect);

    $dados = mysqli_fetch_array($execucao);

    $cpfDb = $dados['cpf'];
    $senhaDb = $dados['senha'];

    if($cpf == $cpfDb && md5($senha) == $senhaDb){
        echo "<script>alert('Logado com Sucesso!')</script>";
        
        session_start();
        $_SESSION['nome'] = $dados['nome'];
        $login = true;

        $_SESSION['cpf'] = $cpf;
        $_SESSION['login'] = $login;
        
        echo "<script> window.location.href = 'menuPrivado.php'</script>";
    }else{
        echo "<script>alert('Erro ao logar-se.')</script>";
        echo "<script> window.location.href = 'logar.php'</script>";
    }
?>