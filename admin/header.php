<div class="container-header" action="./index.php" method="get">
    <div class="header">
        <img src="../assets/logo.svg" alt="Logo">
        <nav>
            <a class="header-link" href="?pg=listArtists">Artistas</a>
            <a class="header-link" href="?pg=listArts">Artes</a>
            <a class="header-link" href="?pg=listMensage">Mensagens</a>
        </nav>
    </div>


</div>

<style>
    .container-header {
        width: 100%;
        display: flex;
        align-items: center;
        padding: 30px;
    }

    .container-header .header {
        max-width: 1280px;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .container-header .header .logo {
        font-weight: 800;
        font-size: 26px;
        color: #ffffff;
    }

    .container-header nav {
        display: flex;
        gap: 30px;
        height: 18px;
    }

    .container-header nav .header-link {
        font-size: 18px;
        color: #FFFFFF;
        text-decoration: none;
        cursor: pointer;
    }

    .container-header nav .header-link:hover {
        color: #FF5B50
    }
</style>