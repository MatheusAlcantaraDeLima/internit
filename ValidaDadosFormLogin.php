<?php
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    include_once("conexao.php");

    $querySelect = "select cpf, senha from usuarios where cpf like '".$cpf."' "; // Busca os dados no BD

    $execucao = mysqli_query($conexao, $querySelect);

    $dados = mysqli_fetch_array($execucao);

    $cpfDb = $dados['cpf'];
    $senhaDb = $dados['senha'];

    if($cpf == $cpfDb && $senha == $senhaDb){
        echo "<script>alert('Logado com Sucesso!')</script>";
        
        echo "<script> window.location.href = 'menuPrivado.php'</script>";
    }else{
        echo "<script>alert('Erro ao logar-se.')</script>";
        echo "<script> window.location.href = 'logar.php'</script>";
    }
?>