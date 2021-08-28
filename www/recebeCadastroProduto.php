<?php
require 'config.php';

$name = filter_input(INPUT_POST,'name');
$price = filter_input(INPUT_POST,'price');
$quantity = filter_input(INPUT_POST,'quantity');
$miniQuantity = filter_input(INPUT_POST,'miniQuantity');
$barcode = filter_input(INPUT_POST,'barcode');
$distributor = filter_input(INPUT_POST,'distributor');
// $sector = INPUT_POST['sector'];
// $qtdExit = INPUT_POST['qtdExit'];
// $qtdPosExit = INPUT_POST['quantity'];

if($name && $quantity){
    $queryCadastroDeProduto = $conection->prepare("INSERT INTO products(name, price, quantity, miniQuantity, barcode, id_distributors)
    VALUES(:name, :price, :quantity, :miniQuantity, :barcode, :distributor)");

    $queryCadastroDeProduto->bindValue(':name',$name);
    $queryCadastroDeProduto->bindValue(':price',$price);
    $queryCadastroDeProduto->bindValue(':quantity',$quantity);
    $queryCadastroDeProduto->bindValue(':miniQuantity',$miniQuantity);
    $queryCadastroDeProduto->bindValue(':barcode',$barcode);
    $queryCadastroDeProduto->bindValue(':distributor',$distributor);
    // $queryCadastroDeProduto->bindValue(':sector',$sector);
    // $queryCadastroDeProduto->bindValue(':qtdExit',$qtdExit);
    // $queryCadastroDeProduto->bindValue(':qtdPosExit',$qtdPosExit);
    $queryCadastroDeProduto->execute();
    header("Location:listaProdutos.php");
}else{
    header("Location:formCadProduto.php");
}