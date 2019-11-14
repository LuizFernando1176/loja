<?php

function  selectTags(){
    include_once '../util/conectarBD.php';
    $coon = conectar();
    $queryBuscaTag ="SELECT `id`, `tag` FROM `tag` WHERE 1";
    $queryResposta = mysqli_query($coon, $queryBuscaTag);
    
    while ($queryRespostas = mysqli_fetch_assoc($queryResposta)){
        
        
        
    }
    
}
?>

