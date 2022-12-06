<script language='javascript'>
    function confirmaExclusao(aURL) {
        if (confirm('Você tem certeza que deseja excluir?')) {
            location.href = aURL;
        }
    }
</script>

<?php

$busca = "Select * from artista order by id";

$todos = mysqli_query($conn, $busca);

?>
<div class="container-list-artist">
    <div class="content">
        <div class="content-top">
            <h1 class="title">Artistas</h1>
            <p>
                <a class="link" href="?pg=insertArtists">Inserir Artista</a>
            </p>
        </div>

        <table class="styled-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Fotografias</th>
                    <th>Alterar</th>
                    <th>Excluir</th>
                </tr>
            </thead>

            <?php while ($dados = mysqli_fetch_array($todos)) { ?>
                <tbody>
                    <tr>
                        <td><?= $dados['id']; ?></td>
                        <td><?= $dados['nome']; ?></td>
                        <td><?= $dados['fotografias']; ?></td>
                        <td><a href="?pg=alterar&id=<?= $dados['id']; ?>">Editar</i></a></td>
                        <td><a href="javascript:confirmaExclusao('?pg=deleteArtist&id=<?= $dados['id']; ?>')">Excluir</a></td>
                    </tr>
                <tbody>
                <?php } ?>

        </table>
    </div>
</div>


<style>
    .container-list-artist {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .container-list-artist .content {
        max-width: 1280px;
        width: 100%;
        display: flex;
        flex-direction: column;
        padding: 30px;
    }

    .container-list-artist .content-top {
        width: 100%;
        display: flex;
        align-items: baseline;
        margin-bottom: 30px;
    }

    .container-list-artist .content-top .title {
        font-weight: 700;
        font-size: 26px;
        color: #FFFFFF;
        margin-right: 30px;
    }

    .container-list-artist .content-top .link {
        color: #FFFFFF;
        cursor: pointer;
    }

    .container-list-artist .content-top .link:hover {
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