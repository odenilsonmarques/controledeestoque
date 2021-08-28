<?php
include 'config.php';

$listaProdutos = [];

//a linha a baixo busca todos os dados na tabela
$queryBuscaProdutos = $conection->query("SELECT *FROM products");
//a linha verifica se houver algum retorno 
if($queryBuscaProdutos->rowCount() > 0){
    //se houve retorno o array é preenchido
    $listaProdutos = $queryBuscaProdutos->fetchAll(PDO::FETCH_ASSOC);
}
?>
<a href="formCadProduto.php">Cadastrar novo produto</a>

<table border="1" width="100%">
    <tr>
        <th>PRODUTO</th>
        <th>COD DE BARRA</th>
        <th>Preço</th>
        <th>QUANT</th>
        <th>DESCRIÇÃO</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($listaProdutos as $produtos):?>
        <tr>
            <td><?=$produtos['name'];?></td>
            <td><?=$produtos['barCode'];?></td>
            <td>R$<?=number_format($produtos['price'],2,',','.');?></td>
            <td><?=$produtos['quantity'];?></td>
            <td>
                <?php
                    if($produtos['quantity'] > $produtos['miniQuantity']){
                        echo 'Estoque abastecido';
                    }else if($produtos['quantity'] == $produtos['miniQuantity']){
                        echo 'Estoque no limite';
                    }else if($produtos['quantity'] < $produtos['miniQuantity'] && $produtos['quantity'] >= 1){
                        echo 'Estoque abaixo do limite';
                    }else if($produtos['quantity'] == 0){
                        echo 'Produto esgostado';
                    }
                ?>
            </td>
            <td>
                <a href="entregaProduto.php">Entregar</a>
                <a href="editarProduto.php?id_products=<?=$produtos['id_products'];?>">Editar</a>
            </td>
        </tr>
    <?endforeach;?>
</table>