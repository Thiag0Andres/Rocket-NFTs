<div class="container-about">
    <div class="content">
        <div class="info-values">
            <div>
                <span>10K+</span>
                <p>Artes</p>
            </div>
            <div>
                <span>200+</span>
                <p>Vendas</p>
            </div>
            <div>
                <span>20</span>
                <p>Artistas</p>
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
        border-bottom: 1px solid #5A5757;
    }

    .container-about .content {
        max-width: 1440px;
        display: flex;
    }

    .container-about .content .info-texts {
        max-width: 1158px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border-left: 1px solid #5A5757;
    }

    .container-about .content .info-texts .content-texts {
        display: flex;
        justify-content: space-around;
        margin-bottom: 70px;
    }

    .container-about .content .info-texts .content-texts .text {
        max-width: 400px;
        font-size: 18px;
        color: #FFFFFF;
    }

    .container-about .content .info-texts img {
        height: 300px;
    }
</style>