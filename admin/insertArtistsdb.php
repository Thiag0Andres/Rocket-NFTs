<?php
include("../config.inc.php");
?>

<?php

$nome = $_POST['nome'];
$fotografias = $_POST['fotografias'];

$sql = "INSERT INTO artista (nome, fotografias) VALUES ('$nome', '$fotografias')";

$insert = mysqli_query($conn, $sql);

if (!$insert) {
    echo "Ocorreu um erro ao cadastrar no banco de dados. 
    <a href='?pg=insertArtists'>Tente Novamente</a>";
} else {
    echo "<h3 style='color:#ffffff; margin-left: 20px;'>Artista cadastrado com sucesso!</h3>";
    header("Refresh: 5, ../admin?pg=listArtists");
}
