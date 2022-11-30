<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];

$sql = "INSERT INTO faleconosco (nome, email, assunto) VALUES ('$nome', '$email', '$assunto')";

$insert = mysqli_query($conn, $sql);

/*
if (!$insert) {
    echo "Ocorreu um erro ao cadastrar no banco de dados.";
} else {
    echo "<h3>Cadastrada com sucesso!</h3><br>";
}
*/