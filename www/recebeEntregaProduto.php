<?php
require 'config.php';

$product = filter_input(INPUT_POST,'product');
$sector = filter_input(INPUT_POST,'sector');
$qtdExit = filter_input(INPUT_POST,'qtdExit');

if($sector){
    $queryEntregaProduto = $conection->prepare("INSERT INTO exits(id_products, sector, qtdExit)VALUES(:product, :sector, :qtdExit)");

    $queryEntregaProduto->bindValue(':product',$product);
    $queryEntregaProduto->bindValue(':sector',$sector);
    $queryEntregaProduto->bindValue(':qtdExit',$qtdExit);
    $queryEntregaProduto->execute();
    header("Location:listaProdutosEntregues.php");   
}else{
    header("Location:entregaProduto.php");
}