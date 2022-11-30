<div id="artists" class="container-artists" action="./index.php" method="get">
    <div class="content">
        <h1 class="title">Melhores <span style="color: #FF5B50;">artistas</span></h1>
        <ul class="list-img">
            <?php
            $busca = "Select * from artista order by id desc limit 6";
            $todos = mysqli_query($conn, $busca);
            $count = 1;

            while ($dados = mysqli_fetch_array($todos)) {
            ?>
                <li class="list-item">
                    <img src=<?= "assets/artista-$count.png" ?> alt="">
                    <div class="content-text">
                        <p class="text"><?= $dados['nome']; ?></p>
                        <p class="text-info"><?= $dados['fotografias']; ?> Fotografias</p>
                    </div>
                </li>
            <?php
                $count++;
            };
            ?>
        </ul>
    </div>

</div>

<style>
    .container-artists {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 0 0 150px 0;
    }

    .container-artists .content {
        max-width: 1280px;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .container-artists .content .title {
        font-weight: 700;
        font-size: 50px;
        color: #FFFFFF;
    }

    .container-artists .list-img {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: 1fr 1fr;
        gap: 110px;
        margin-top: 120px;
        list-style: none;
    }

    .container-artists .list-img .list-item {
        width: 350px;
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #252525;
    }

    .container-artists .list-img .list-item .text-info:hover {
        color: #ffffff;
    }

    .container-artists .list-img .list-item .content-text {
        display: flex;
        flex-direction: column;
        margin-left: 40px;
        gap: 10px;
    }

    .container-artists .list-img .list-item img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 100px;
    }

    .container-artists .list-img .list-item .text {
        font-weight: 500;
        font-size: 20px;
        color: #FFFFFF;
    }

    .container-artists .list-img .list-item .text-info {
        font-weight: 500;
        font-size: 20px;
        color: #FF5B50;

    }

    .container-artists .list-img .list-item .text-info:hover {
        color: #FFFFFF;
    }
</style>