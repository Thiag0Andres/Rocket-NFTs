<?php
$query1 = mysqli_query($conn, "select COUNT(*) AS total FROM artista");
$total_artists = mysqli_fetch_assoc($query1);
$query2 = mysqli_query($conn, "select COUNT(*) AS total FROM arte");
$total_arts = mysqli_fetch_assoc($query2);
?>

<div id="about" class="container-about">
    <div class="content">
        <div class="info-values">
            <div class="content-values">
                <span><?= $total_arts['total']; ?></span>
                <p class="text-info">Artes</p>
            </div>
            <div class="content-values">
                <span>200+</span>
                <p class="text-info">Vendas</p>
            </div>
            <div class="content-values">
                <span><?= $total_artists['total']; ?></span>
                <p class="text-info">Artistas</p>
            </div>

        </div>
        <div class="info-texts">
            <div class="content-texts">
                <div>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue malesuada amet pretium lacus. Id potenti diam et cras odio viverra. Amet, velit ut hac sit. Enim ultricies mauris mattis nunc semper.</p>
                    <a class="text" href="">Lorem ipsum</a>
                </div>
                <div>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Congue malesuada amet pretium lacus. Id potenti diam et cras odio viverra. Amet, velit ut hac sit. Enim ultricies mauris mattis nunc semper.</p>
                    <a class="text" href="">Lorem ipsum</a>
                </div>
            </div>
            <img src="assets/banner.png" alt="">
        </div>
    </div>
</div>

<style>
    .container-about {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom: 1px solid #5A5757;
    }

    .container-about .content {
        max-width: 1440px;
        display: flex;
    }

    .container-about .content .info-values {
        width: 290px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
        border-right: 1px solid #5A5757;
        padding-top: 70px;
    }

    .container-about .content .info-values .content-values {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .container-about .content .info-values span {
        font-weight: 600;
        font-size: 50px;
        color: #FFFFFF;
    }

    .container-about .content .info-values .text-info {
        font-weight: 600;
        font-size: 20px;
        color: #5A5757;
    }

    .container-about .content .info-texts {
        max-width: 1150px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding-top: 70px;
    }

    .container-about .content .info-texts .content-texts {
        display: flex;
        justify-content: space-around;
        padding-bottom: 70px;
    }

    .container-about .content .info-texts .content-texts .text {
        max-width: 400px;
        font-size: 18px;
        color: #FFFFFF;
    }

    .container-about .content .info-texts .content-texts a:hover {
        color: #FF5B50
    }

    .container-about .content .info-texts img {
        height: 300px;
    }
</style>