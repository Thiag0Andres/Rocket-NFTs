<?php

$busca = "Select * from faleConosco order by id";

$todos = mysqli_query($conn, $busca);

?>
<div class="container-list-mensage">
    <div class="content">
        <div class="content-top">
            <h1 class="title">Mensagens</h1>
        </div>

        <table class="styled-table">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Autor</td>
                    <td>Email</td>
                    <td>Assunto</td>
                </tr>
            </thead>
            <?php while ($dados = mysqli_fetch_array($todos)) { ?>
                <tbody>
                    <tr>
                        <td><?= $dados['id']; ?></td>
                        <td><?= $dados['nome']; ?></td>
                        <td><?= $dados['email']; ?></td>
                        <td><?= $dados['assunto']; ?></td>
                    </tr>
                </tbody>
            <?php } ?>

        </table>
    </div>

</div>


<style>
    .container-list-mensage {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .container-list-mensage .content {
        max-width: 1280px;
        width: 100%;
        display: flex;
        flex-direction: column;
        padding: 30px;
    }

    .container-list-mensage .content .content-top {
        width: 100%;
        display: flex;
        align-items: baseline;
        margin-bottom: 30px;
    }

    .container-list-mensage .content .content-top .title {
        font-weight: 700;
        font-size: 26px;
        color: #FFFFFF;
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