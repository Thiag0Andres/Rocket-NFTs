<?php
include("../config.inc.php");
?>

<?php

$id = $_POST['id'];
$title = $_POST['title'];
$amount = $_POST['amount'];
$artistId = $_POST['artistId'];

$sql2 = mysqli_query($conn, "SELECT * FROM arte WHERE id='$id'");

$sql = "UPDATE arte SET title='$title', amount='$amount', artistId='$artistId' WHERE id=$id";

$altera = mysqli_query($conn, $sql);

if (!$altera) {
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listArts'>Voltar</a>";
} else {
    echo "<h3 style='color:#ffffff; margin-left: 20px;'>Arte atualizada com sucesso!</h3>";
    header("Refresh: 5, ../admin?pg=listArts");
}
