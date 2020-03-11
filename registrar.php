<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <!--LINK DO BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Registrando-se</h1>
        <form action="pegarDadosFormRegistrar.php" method="POST">
            <div class="form-group">
                <div>
                    <label for="nome">Digite o seu nome</label>
                    <div>
                        <input type="text" id="nome" name="nome" class="form-control" required>
                    </div>
                </div>
                <div>
                    <label for="email">Digite o seu e-mail</label>
                    <div>
                        <input type="text" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div>
                    <label for="cpf">Digite o seu cpf</label>
                    <div>
                        <input type="text" id="cpf" name="cpf" class="form-control" required maxlength="11">
                    </div>
                </div>
                <div>
                    <label for="cep">Digite o seu CEP</label>
                    <div>
                        <input type="text" id="cep" name="cep" class="form-control" required onblur="pesquisacep(this.value);" maxlength="9">
                    </div>
                </div>
                <div>
                    <label for="endereço">Digite o seu endereço</label>
                    <div>
                        <input type="text" id="endereço" name="endereço" class="form-control" required>
                    </div>
                </div>
                <div>
                    <label for="cidade">Digite a sua cidade</label>
                    <div>
                        <input type="text" id="cidade" name="cidade" class="form-control" required>
                    </div>
                </div>
                <div>
                    <label for="uf">Digite o seu estado</label>
                    <div>
                        <input type="text" id="uf" name="uf" class="form-control" required>
                    </div>
                </div>
                <div>
                    <label for="senha">Digite a sua senha</label>
                    <div>
                        <input type="password" id="senha" name="senha" class="form-control" required maxlength="9">
                    </div>
                </div>
            </div>
            <input type="submit" value="Enviar" class="btn btn-success">
            <input type="reset" value="resetar campos" class="btn btn-danger">
            <a href="index.php"><input type="button" value="Voltar para o menu" class="btn btn-primary"></a>
        </form>
    </div>
    <!--SCRIPT WEB SERVICE CEP-->
    <script src="js/webServiceCep.js"></script>
    <!--SCRIPT DO BOOTSTRAP-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>