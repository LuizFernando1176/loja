<?php

include_once '../util/conectarBD.php';
$coon = conectar();
$cor_banner = $_POST['cor_banner'];
$face = $_POST ['face'];
$insta = $_POST['insta'];
$pin= $_POST['pin'];
$queryEditaConfig = "UPDATE `conf` SET `cor_banner`='$cor_banner',`face`='$face',`insta`='$insta',`pin`='$pin' WHERE 1";
$queryEditaResultado = mysqli_query($coon, $queryEditaConfig);

if ($queryEditaResultado) {

    echo 'Configurações alteradas com sucesso!!!';
    header('Location:config.php');
    
} else {
    echo 'Erro ao Alterar as configurações!!! ';
}
;


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

