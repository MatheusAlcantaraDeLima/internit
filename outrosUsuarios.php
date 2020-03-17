<?php
    session_start();
    if($_SESSION['login'] == true){
        
        include_once("conexao.php");
        mysqli_set_charset($conexao, "utf8");


        $buscaUsuarios = "select * from usuarios ";
        
        $executaBusca = mysqli_query($conexao, $buscaUsuarios);
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerenciar outros usuários</title>
        <!--LINK DO BOOTSTRAP-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Gerenciar outros usuários</h1>
            <hr>
                <?php
                    if(mysqli_num_rows($executaBusca) > 0){

                ?>
                <table class="table">
                    <thead>
                        <tr style="text-align: center;">
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">CPF</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">UF</th>
                        </tr>
                    </thead>
                    <?php
                        while($linhas = mysqli_fetch_array($executaBusca)){
                    ?>
                    <tbody>
                        <tr style="text-align: center;">
                            <td><?php echo $linhas["nome"] ?></td>
                            <td><?php echo $linhas["email"] ?></td>
                            <td><?php echo $linhas["cpf"] ?></td>
                            <td><?php echo $linhas["cep"] ?></td>
                            <td><?php echo $linhas["endereco"] ?></td>
                            <td><?php echo $linhas["cidade"] ?></td>
                            <td><?php echo $linhas["uf"] ?></td>							
                        </tr>    
                    </tbody>
                    <?php
                        }
                    ?>
                </table>
                <?php       
                    }
                ?>
                <hr>
                <br>
                <h2>Exclusão de usuário</h2>
                <div>
                    <form action="exclusaoUsuario.php" method="POST">
                        <label for="excluir">Excluir um usuário</label>
                        <input type="text" id="excluir"  name="excluir" class="form-control" placeholder="Digite o cpf do usuário aqui" required><br>
                        <input type="submit"  value="Excluir" class="btn btn-danger">
                    </form>
                </div>
                <div>
                <br>
                <h2>Formulário para alteração de dados dos outros usuários</h2>
                    <form action="alteraDadosOutrosUsuarios.php" method="POST">
                        <div>
                            <label for="cpf">CPF</label>
                            <input type="text" id="cpf" name="cpf" class="form-control" required maxlength="11">
                        </div>
                        <div>
                            <label for="email">E-mail</label>
                            <input type="text" id="email" name="email" class="form-control" required>
                        </div>
                        <div>
                            <label for="cep">CEP</label>
                            <input type="text" id="cep" name="cep" class="form-control" required onblur="pesquisacep(this.value);" maxlength="8">
                        </div>
                        <div>
                            <label for="endereco">Endereço</label>
                            <input type="text" id="endereco" name="endereco" class="form-control" required>
                        </div>
                        <div>
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" name="cidade" class="form-control" required>
                        </div>
                        <div>
                            <label for="uf">UF</label>
                            <input type="text" id="uf" name="uf" class="form-control" required>
                        </div>
                        <br>
                        <input type="submit"  value="Salvar alterações" class="btn btn-success"> 
                        <a href="menuPrivado.php"><input type="button"  value="Voltar para Menu" class="btn btn-primary"></a>
                    </form>
                </div>
        </div>
        <!--SCRIPT WEB SERVICE CEP-->
        <script src="js/webServiceCep.js"></script>
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