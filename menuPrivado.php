<?php
    session_start();
    if($_SESSION['login'] == true){ 
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu Restrito</title>
        <!--LINK DO BOOTSTRAP-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Menu Restrito</h1>
            <h3>Seja bem vindo <?php echo($_SESSION['nome']);?></h3>
            <hr>
           <h5>Gerenciamento de notícias</h5>
            <a href="#"><input type="button"  value="Remover informações" class="btn btn-primary"></a>
            <a href="#"><input type="button"  value="Adicionar informações" class="btn btn-primary"></a>
            <a href="#"><input type="button"  value="Alterar informações" class="btn btn-primary"></a>
            <hr>
            <h5>Gerenciamento de usuários</h5>
            <a href="alterarMeusDados.php"><input type="button"  value="Alterar os meus dados" class="btn btn-primary"></a>
            <a href="outrosUsuarios.php"><input type="button"  value="Gerenciar outros usuários" class="btn btn-primary"></a>
            <hr>
            <a href="logar.php"><input type="button"  value="Deslogar" class="btn btn-danger"></a>
        </div>
        <!--SCRIPT DO BOOTSTRAP-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
    </html>
<?php
    }else{
        echo("<script>alert('É necessário logar, por favor, insira as suas credenciais.');</script>");
        echo("<script> window.location.href = 'logar.php'</script>");
    }
?>