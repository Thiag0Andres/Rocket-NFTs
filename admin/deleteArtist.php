<?php
include("../config.inc.php");
?>

<?php

$id = $_GET['id'];

$sql = "DELETE FROM artista WHERE id = ('$id')";

$delete = mysqli_query($conn, $sql);

if (!$delete) {
    echo "Não foi possível excluir registro.
    <a href='?pg=listArtists'>Tente Novamente</a>";
} else {
    echo "<h3 style='color:#ffffff; margin-left: 20px;'>Registro excluído com sucesso!</h3>";
    header("Refresh: 5, ../admin?pg=listArtists");
}
