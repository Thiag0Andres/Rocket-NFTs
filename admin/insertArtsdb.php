<?php
include("../config.inc.php");
?>

<?php

$title = $_POST['title'];
$amount = $_POST['amount'];
$artistId = $_POST['artistId'];

$sql = "INSERT INTO arte (title, amount, artistId) VALUES ('$title', '$amount', '$artistId')";

$insert = mysqli_query($conn, $sql);

if (!$insert) {
    echo "Ocorreu um erro ao cadastrar no banco de dados. 
    <a href='?pg=insertArts'>Tente Novamente</a>";
} else {
    echo "<h3 style='color:#ffffff; margin-left: 20px;'>Arte cadastrada com sucesso!</h3>";
    header("Refresh: 5, ../admin?pg=listArts");
}
