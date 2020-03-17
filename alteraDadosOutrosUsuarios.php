<?php
    $cpf = $_POST["cpf"];
    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo '<script>alert("email válido")</script>';
    }else {
        echo '<script>alert("email não válido")</script>';
    }

    include_once("conexao.php");

    mysqli_set_charset($conexao, "utf8");

    $buscaUsuario = "select * from usuarios";

    $executaBusca = mysqli_query($conexao, $buscaUsuario);

    $buscaTodosUsuarios = mysqli_fetch_array($executaBusca);
    
    $cpfBD = $buscaTodosUsuarios['cpf'];

    if($cpfBD == $cpf){
        $updateBD = "update usuarios set email = '".$email."', cep = '".$cep."', endereco = '".$endereco."', cidade = '".$cidade."', uf = '".$uf."' where cpf like '".$cpf."' ";   
    }else{
        echo("<script> alert('CPF não existe no banco de dados.') </script>");
    }
    $execucao = mysqli_query($conexao, $updateBD);
    if($execucao == true){
        echo("<script> alert('Dados alterados com sucesso.') </script>");
    }else{
        echo("<script> alert('Erro ao salvar os dados, favor, tente novamente.') </script>"); 
    }
    echo("<script> window.location.href = 'outrosUsuarios.php'</script>");
?>