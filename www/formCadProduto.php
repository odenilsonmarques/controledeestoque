
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
                        <h3 class="card-title text-center">Cadastro de Produtos</h3><br>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="recebeCadastroProduto.php" method="POST">
                        <div class="card">
                            <div class="card-header"><strong>Dados do Produtos</strong></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="name" class="form-label">Nome do Produto</label><br>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="price" class="form-label">Preço</label>
                                        <input type="text" class="form-control" name="price" id="price">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="quantity" class="form-label">Quantidade</label><br>
                                        <input type="text" class="form-control" name="quantity" id="quantity">
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="miniQuantity" class="form-label">Quantidade mínima</label><br>
                                        <input type="text" class="form-control" name="miniQuantity" id="miniQuantity">
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