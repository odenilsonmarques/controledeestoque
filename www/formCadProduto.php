<?php
    include 'config.php';
?>

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
                                        <label for="distributor" class="form-label">Distribuidor</label><a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="formDistribuidor">Caso não encontre, cadastre aqui</a><br>
                                        
                                        <select name="distributor" class="form-select">
                                            <option value="">Selecione</option>  
                                            <?php
                                                $listDistributors = [];
                                                $querySearchDistributor = $conection->query("SELECT *FROM distributor");
                                                if($querySearchDistributor->rowCount()>0){
                                                    $listDistributors = $querySearchDistributor->fetchAll(PDO::FETCH_ASSOC);
                                                    foreach($listDistributors as $distributors){?>
                                                                                                              
                                                        <option value="<?=$distributors['id_distributors'];?>"><?=$distributors['name'];?></option>
                                                        <?
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="name" class="form-label">Nome do Produto</label><br>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="barcode" class="form-label">Codigo de Barra</label>
                                        <input type="text" class="form-control" name="barcode" id="barcode">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="price" class="form-label">Preço</label>
                                        <input type="text" class="form-control" name="price" id="price">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="quantity" class="form-label">Quantidade</label><br>
                                        <input type="text" class="form-control" name="quantity" id="quantity">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="miniQuantity" class="form-label">Quantidade Mínima Em Estoque</label><br>
                                        <input type="text" class="form-control" name="miniQuantity" id="miniQuantity">
                                    </div>
                                </div><br>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-danger mb-3"><a href="home.php">Cancelar Cadastro </a></button>
                                <button type="submit" class="btn btn-success mb-3">Realizar Cadastro</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>  




    <section>
     <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Cadastro Distribuidor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
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
        </div>
    </section>
    
    <footer></footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>