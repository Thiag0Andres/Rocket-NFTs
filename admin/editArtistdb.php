<?php
include("../config.inc.php");
?>

<?php

$id = $_POST['id'];
$nome = $_POST['nome'];
$fotografias = $_POST['fotografias'];

$sql2 = mysqli_query($conn, "SELECT * FROM artista WHERE id='$id'");

$sql = "UPDATE artista SET nome='$nome', fotografias='$fotografias' WHERE id=$id";

$altera = mysqli_query($conn, $sql);

if (!$altera) {
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listArtists'>Voltar</a>";
} else {
    echo "<h3>Artista atualizado com sucesso!</h3>";
    header("Refresh: 5, ../admin?pg=listArtists");
}
