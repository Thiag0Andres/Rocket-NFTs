<div class="container-header" action="./index.php" method="get">
    <div class="header">
        <img src="assets/logo.svg" alt="Logo">
        <nav>
            <a class="header-link" href="#sobre">Sobre</a>
            <a class="header-link" href="#">Populares da semana</a>
            <a class="header-link" href="#">Melhores artistas</a>
            <a class="header-link" href="#">Fale conosco</a>
        </nav>
    </div>
    <div class="content">
        <div class="info">
            <div class="">
                <p class="text">
                    Mercado digital para colecionáveis em criptos e tokens não fungível (NFT).
                    Compre, venda e descubra ativos digitais exclusivos para você.
                </p>
                <div>
                    <img src="assets/group-avarts.png" alt="">
                    <p>+10
                        Artistas selecionados
                    </p>
                </div>
            </div>
            <div>
                <h1 class="title">Descubra a verdadeira
                    arte digital e colecione diversas NFTs
                </h1>
            </div>
            <img src="assets/badge.svg" alt="">
        </div>
        <ul class="list-img">
            <li class="list-item"><img src="assets/galeria-1.png" alt="Logo"></li>
            <li class="list-item"><img src="assets/galeria-2.png" alt="Logo"></li>
            <li class="list-item"><img src="assets/galeria-3.png" alt="Logo"></li>
            <li class="list-item"><img src="assets/galeria-4.png" alt="Logo"></li>
            <li class="list-item"><img src="assets/galeria-5.png" alt="Logo"></li>
            <li class="list-item"><img src="assets/galeria-6.png" alt="Logo"></li>
            <li class="list-item"><img src="assets/galeria-7.png" alt="Logo"></li>
            <li class="list-item"><img src="assets/galeria-8.png" alt="Logo"></li>
        </ul>
    </div>

</div>

<style>
    .container-header {
        width: 100%;
        background-image: url("assets/background.png");
    }

    .container-header .content {
        max-width: 1440px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .container-header .header {
        flex: 1;
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin: 30px 0 90px;
    }

    .container-header .header .logo {
        font-weight: 800;
        font-size: 26px;
        color: #373f41;
    }

    .container-header .header nav {
        display: flex;
        grid-gap: 30px;
        height: 18px;
    }

    .container-header .header nav .header-link {
        font-size: 18px;
        color: #FFFFFF;
        text-decoration: none;
        cursor: pointer;

    }

    .container-header .header nav .header-link:hover {
        color: #FF5B50
    }

    .container-header .content .info {
        display: flex;
        justify-content: space-between;
    }

    .container-header .content .info .text {
        max-width: 400px;
        font-size: 18px;
        color: #FFFFFF;
        margin-bottom: 50px;
    }

    .container-header .content .info .title {
        max-width: 600px;
        font-weight: 700;
        font-size: 30px;
        color: #FFFFFF;
    }

    .container-header .list-img {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: 1fr 1fr;
        gap: 20px;
    }

    .container-header .list-img .list-item {
        width: 250px;
        border: 1px solid #FFFFFF;
    }

    .container-header .list-img .list-item img {
        width: 250px;
    }
</style>