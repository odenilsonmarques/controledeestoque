<?php
include 'config.php';

$id = filter_input(INPUT_GET,'id');
if($id){
    $queryBuscaProduto = $conection->prepare("DELETE FROM products WHERE id = :id");
    $queryBuscaProduto->bindValue(':id', $id);
    $queryBuscaProduto->execute();
}
header("Location:listaProdutos.php");
exit;