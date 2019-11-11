<?php
include_once '../util/conectarBD.php';
$coon = conectar();
$queryConfigura = "SELECT * FROM `conf`";
$queryResposta = mysqli_query($coon, $queryConfigura);
$queryRespostas = mysqli_fetch_assoc($queryResposta);
?>

<form method="post" action="editarConfig.php">
    Cor do Banner: <input value="<?php echo $queryRespostas['cor_banner']; ?>" name="cor_banner"/><br>
    Link do Instagram: <input value="<?php echo $queryRespostas['insta']; ?>" name="insta" /><br>
    Link do Facebook: <input value="<?php echo $queryRespostas['face']; ?>" name="face" /><br>
    Link do Pinterest: <input value="<?php echo $queryRespostas['pin']; ?>" name="pin" /><br>
    <button type="submit">Enviar</button>
    <button type="reset">Apagar</button>
</form>