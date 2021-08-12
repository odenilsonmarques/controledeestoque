<?php
try{
    $conection = new PDO("mysql:dbname=dbcontroledeestoque;host=db","odenilson","o1w2o3o4p5pw");
    //  echo "successfully  conected";
}catch(PDOException $e){
    echo "error connecting ...".$e->getMessage();
}

