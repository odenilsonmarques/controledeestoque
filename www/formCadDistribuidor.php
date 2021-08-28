
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>cadastro de processo</title>
</head>
<body>
    <header class="tituloPagina">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <h3 class="card-title text-center">Cadastro Distribuidor</h3><br>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="recebeCadastroDistribuidor.php" method="POST">
                        <div class="card">
                            <div class="card-header"><strong>Dados do Distribuidor</strong></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="name" class="form-label">Nome do Distribuidor</label><br>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div> 
                                    <div class="col-sm-6">
                                        <label for="cnpjCpf" class="form-label">Cnpj / Cpf</label>
                                        <input type="text" class="form-control" name="cnpjCpf" id="cnpjCpf">
                                    </div>
                                </div><br>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-danger mb-3"><a href="home.php">Cancelar Cadastro </button>
                                <button type="submit" class="btn btn-success mb-3">Realizar Cadastro</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>    
    <footer></footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>