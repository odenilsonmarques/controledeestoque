<?php
require 'config.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>edita produto</title>
</head>
<body>
    <header class="tituloPagina">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <h3 class="card-title text-center">entrega de Produto</h3><br>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="recebeEntregaProduto.php" method="POST">
                        <div class="card">
                            <!--id passado no corpo da pagina para a pagina de recebeEditaProduto-->
                            <div class="card-header"><strong>Dados do Produtos</strong></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="product" class="form-label">Produto</label><br>
                                        <select name="product" class="form-select">
                                            <option value="">Selecione</option>
                                            <?php
                                                $listProducts = [];
                                                $querySearchProduct = $conection->query("SELECT *FROM products");
                                                if($querySearchProduct->rowCount() > 0 ) {
                                                    $listProducts = $querySearchProduct->fetchAll(PDO::FETCH_ASSOC);
                                                    foreach($listProducts as $products){?>
                                                            <option value="<?=$products['id_products'];?>"><?=$products['name'];?></option>
                                                    <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="sector" class="form-label">Informe o Destino do Produto (setor / orgão) </label>
                                        <input type="text" class="form-control" name="sector" id="sector">
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="qtdExit" class="form-label">Quantidade a Entregar</label><br>
                                        <input type="text" class="form-control" name="qtdExit" id="qtdExit">
                                    </div>
                                </div><br>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-danger mb-3"><a href="home.php">Cancelar </a></button>
                                <button type="submit" class="btn btn-success mb-3">Salvar</button>
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