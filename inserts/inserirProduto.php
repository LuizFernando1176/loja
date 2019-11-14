<?php

include_once '../util/conectarBD.php';
$nome_produto = $_POST ['nome_produto'];
$descricao = $_POST ['descricao'];
$preco = $_POST ['preco'];
$data = $_POST ['data'];
$capa = $_POST ['capa'];
$user = $_POST ['user'];
$id_tag = $_POST ['id_tag'];

$coon = conectar();
$queryAdicionaProduto = ("INSERT INTO `prod`(`id`, `nome_produto`, `descricao`, `preco`, `tamnho`, `data`, `capa`, `user`, `id_tag`) VALUES ('$nome_produto','$descricao','$preco','$data','$capa','$user','$id_tag') ");
$queryResposta = mysqli_query($coon, $queryAdicionaProduto);

if ($queryResposta) {

    echo 'Produto cadastrado com sucesso !!!';
} else {
    echo 'Produto não pode ser cadastrado';
}


