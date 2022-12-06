<?php
include("../config.inc.php");
?>

<?php

$id = $_GET['id'];
$sql = "SELECT * FROM artista WHERE id = $id";
$busca = mysqli_query($conn, $sql);

while ($dados = mysqli_fetch_array($busca)) {

?>
    <div class="container">
        <h2 class="title-form">Editar Artista</h2>
        <form class="form-container" action="?pg=editArtistdb" method="post">
            <input type="hidden" name="id" value="<?= $dados['id']; ?>">
            <label>Nome do artista:</label>
            <input value="<?= $dados['nome']; ?>" type="text" name="nome" placeholder="Nome" />
            <label>Quantidade de fotografias:</label>
            <input value="<?= $dados['fotografias']; ?>" type="number" name="fotografias" />
            <button type="submit" class="send-button">Enviar</button>
        </form>
    </div>

    <style>
        .container {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #252525;
        }

        .container .title-form {
            max-width: 350px;
            font-weight: 500;
            font-size: 30px;
            color: #ffffff;
            margin: 25px;
        }

        .container .form-container {
            max-width: 680px;
            width: 680px;
            display: flex;
            flex-direction: column;
        }

        .container .form-container label {
            font-weight: 500;
            font-size: 18px;
            color: #ffffff;
            margin: 5px;
        }

        .container .form-container input {
            height: 54px;
            font-size: 18px;
            color: #5A5757;
            background-color: #0e0e0e;
            margin-bottom: 15px;
            padding: 0 20px;
        }

        .container .form-container input::placeholder {
            font-size: 18px;
            color: #5A5757;
        }

        .container .form-container input:focus {
            border: 2px solid #FF5B50;
            box-shadow: 0 0 0 0;
            outline: 0;
        }

        .container .form-container .send-button {
            width: 122px;
            height: 66px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 700;
            font-size: 20px;
            color: #000000;
            background-color: #ffffff;
            border: none;
            margin: 24px 0 26px 0;
        }

        .container .form-container .send-button:hover {
            color: #ffffff;
            background-color: #FF5B50;
        }
    </style>

<?php
}
?>