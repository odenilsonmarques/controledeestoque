<?php
require 'config.php';

$id_products = filter_input(INPUT_POST,'id_products');
$name = filter_input(INPUT_POST,'name');
$price = filter_input(INPUT_POST,'price');
$quantity = filter_input(INPUT_POST,'quantity');
$miniQuantity = filter_input(INPUT_POST,'miniQuantity');
$barcode = filter_input(INPUT_POST,'barcode');

if($name && $price && $miniQuantity){
    $queryEditaProduto = $conection->prepare("UPDATE products SET name =:name, price =:price, quantity =:quantity, miniQuantity =:miniQuantity, barcode =:barcode WHERE id_products =:id_products");

    $queryEditaProduto->bindValue(':name',$name);
    $queryEditaProduto->bindValue(':price',$price);
    $queryEditaProduto->bindValue(':quantity',$quantity);
    $queryEditaProduto->bindValue(':miniQuantity',$miniQuantity);
    $queryEditaProduto->bindValue(':cod',$cod);
    $queryEditaProduto->bindValue(':id_products',$id_products);
    $queryEditaProduto->execute();
    header("Location:listaProdutos.php");
    exit;
}else{
    header("Location:editarProduto.php");
}