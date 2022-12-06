<script language='javascript'>
    function confirmaExclusao(aURL) {
        if (confirm('Você tem certeza que deseja excluir?')) {
            location.href = aURL;
        }
    }
</script>

<?php

$busca = "Select * from artista INNER JOIN arte ON arte.artistId = artista.id";

$todos = mysqli_query($conn, $busca);

?>
<div class="container-list-arts">
    <div class="content">
        <div class="content-top">
            <h1 class="title">Artes</h1>
            <p>
                <a class="link" href="?pg=insertArts">Inserir Artes</a>
            </p>
        </div>

        <table class="styled-table">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Artista Id</td>
                    <td>Artista</td>
                    <td>Título</td>
                    <td>Valor</td>
                    <td>Alterar</td>
                    <td>Excluir</td>
                </tr>
            </thead>
            <?php while ($dados = mysqli_fetch_array($todos)) { ?>
                <tbody>
                    <tr>
                        <td><?= $dados['id']; ?></td>
                        <td><?= $dados['artistId']; ?></td>
                        <td><?= $dados['nome']; ?></td>
                        <td><?= $dados['title']; ?></td>
                        <td><?= $dados['amount']; ?> RKT</td>
                        <td><a href="?pg=editArt&id=<?= $dados['id']; ?>">Editar</a></td>
                        <td><a href="javascript:confirmaExclusao('?pg=deleteArt&id=<?= $dados['id']; ?>')">Excluir</a></td>
                    </tr>
                </tbody>
            <?php } ?>

        </table>
    </div>

</div>


<style>
    .container-list-arts {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .container-list-arts .content {
        max-width: 1280px;
        width: 100%;
        display: flex;
        flex-direction: column;
        padding: 30px;
    }

    .container-list-arts .content .content-top {
        width: 100%;
        display: flex;
        align-items: baseline;
        margin-bottom: 30px;
    }

    .container-list-arts .content .content-top .title {
        font-weight: 700;
        font-size: 26px;
        color: #FFFFFF;
        margin-right: 30px;
    }

    .container-list-arts .content-top .link {
        color: #FFFFFF;
        cursor: pointer;
    }

    .container-list-arts .content-top .link:hover {
        color: #FF5B50;
        cursor: pointer;
    }

    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr {
        background-color: #FF5B50;
        color: #ffffff;
        text-align: left;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
        color: #ffffff;
        text-align: left;
    }
</style>