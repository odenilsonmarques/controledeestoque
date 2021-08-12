<?php
require 'config.php';

$name = filter_input(INPUT_POST,'name');
$price = filter_input(INPUT_POST,'price');
$quantity = filter_input(INPUT_POST,'quantity');
$miniQuantity = filter_input(INPUT_POST,'miniQuantity');


if($name && $price && $quantity && $miniQuantity){
    $queryCadastroDeProduto = $conection->prepare("INSERT INTO products(name, price, quantity, miniQuantity)
    VALUES(:name, :price, :quantity, :miniQuantity)");

    $queryCadastroDeProduto->bindValue(':name',$name);
    $queryCadastroDeProduto->bindValue(':price',$price);
    $queryCadastroDeProduto->bindValue(':quantity',$quantity);
    $queryCadastroDeProduto->bindValue(':miniQuantity',$miniQuantity);
    $queryCadastroDeProduto->execute();

    header("Location:aviso.php");
}else{
    header("Location:formCadastroAtividade.php");
}