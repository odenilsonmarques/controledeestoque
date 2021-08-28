<?php
include 'config.php';

$name = filter_input(INPUT_POST,'name');
$cnpjCpf = filter_input(INPUT_POST,'cnpjCpf');

if($name && $cnpjCpf){
    $queryCadastroDistribuidor = $conection->prepare("INSERT INTO distributor(name, cnpjCpf) VALUES (:name, :cnpjCpf)");
    $queryCadastroDistribuidor->bindValue(':name',$name);
    $queryCadastroDistribuidor->bindValue(':cnpjCpf',$cnpjCpf);
    $queryCadastroDistribuidor->execute();
    header("Location:formCadProduto.php");
}else{
    header("Location:formCadDistribuidor.php");
}