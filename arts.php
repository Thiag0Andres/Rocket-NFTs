<div id="arts" class="container-arts" action="./index.php" method="get">
    <div class="content">
        <h1 class="title"><span style="color: #FF5B50;">Populares</span> da semana</h1>
        <ul class="list-img">
            <?php
            $busca = "Select * from artista INNER JOIN arte ON arte.artistId = artista.id order by arte.id desc limit 4";
            $todos = mysqli_query($conn, $busca);
            $count = 1;

            while ($dados = mysqli_fetch_array($todos)) {
            ?>
                <li class="list-item">

                    <div class="content-header">
                        <p class="title"><?= $dados['title']; ?></p>
                        <img class="icon" src="assets/arrow-white.svg" alt="">
                    </div>
                    <div class="content-middle">
                        <p class="text-info"><?= $dados['nome']; ?></p>
                        <p class="text-value"><?= $dados['amount']; ?> RKT</p>
                    </div>
                    <img src=<?= "assets/galeria-$count.png" ?> alt="">
                </li>
            <?php
                $count++;
            };
            ?>
        </ul>
    </div>

</div>

<style>
    .container-arts {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 150px 0;
    }

    .container-arts .content {
        max-width: 1280px;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .container-arts .content .title {
        font-weight: 700;
        font-size: 50px;
        color: #FFFFFF;
    }

    .container-arts .list-img {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: 1fr 1fr;
        gap: 110px;
        margin-top: 120px;
        list-style: none;
    }

    .container-arts .list-img .list-item {
        width: 350px;
        height: 345px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .container-arts .list-img .list-item .content-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .container-arts .list-img .list-item .content-header .title {
        font-weight: 500;
        font-size: 30px;
        color: #FFFFFF;
    }

    .container-arts .list-img .list-item .content-header .icon {
        width: 25px;
        height: 25px;
        cursor: pointer;
    }

    .container-arts .list-img .list-item .content-middle {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .container-arts .list-img .list-item .content-middle .text-info {
        font-weight: 400;
        font-size: 20px;
        color: #5A5757;
    }

    .container-arts .list-img .list-item .content-middle .text-value {
        font-weight: 400;
        font-size: 20px;
        color: #FF5B50;
    }

    .container-arts .list-img .list-item img {
        width: 350px;
        height: 200px;
    }
</style>