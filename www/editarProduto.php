<?php
require 'config.php';

$dadosProduto = [];
$id_products = filter_input(INPUT_GET,'id_products');
if($id_products){
    $queryBuscaProduto = $conection->prepare("SELECT * FROM products WHERE id_products = :id_products");
    $queryBuscaProduto->bindValue(':id_products',$id_products);
    $queryBuscaProduto->execute();

    if($queryBuscaProduto->rowCount() > 0){
        $dadosProduto = $queryBuscaProduto->fetch();
    }else{
        header("Location:listaProdutos.php");
        exit;
    }
}
else{
    header("Location:listaProdutos.php");
    exit;
}
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
                        <h3 class="card-title text-center">Alterar Produto</h3><br>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="recebeEditaProduto.php" method="POST">
                        <div class="card">
                            <!--id passado no corpo da pagina para a pagina de recebeEditaProduto-->
                            <input type="hidden" name="id_products" value="<?=$dadosProduto['id_products'];?>"/>
                            <div class="card-header"><strong>Dados do Produtos</strong></div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="name" class="form-label">Nome do Produto</label><br>
                                        <input type="text" class="form-control" name="name" id="name" value="<?=$dadosProduto['name'];?>">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="cod" class="form-label">Codigo de Barra</label>
                                        <input type="text" class="form-control" name="cod" id="cod" value="<?=$dadosProduto['cod'];?>">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="price" class="form-label">Preço</label>
                                        <input type="text" class="form-control" name="price" id="price" value="<?=$dadosProduto['price'];?>">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="quantity" class="form-label">Quantidade</label><br>
                                        <input type="text" class="form-control" name="quantity" id="quantity" value="<?=$dadosProduto['quantity'];?>">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="miniQuantity" class="form-label">Quantidade Mínima</label><br>
                                        <input type="text" class="form-control" name="miniQuantity" id="miniQuantity" value="<?=$dadosProduto['miniQuantity'];?>">
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