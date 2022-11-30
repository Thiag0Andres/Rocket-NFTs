<div id="footer" class="container-footer">
    <div class="top">
        <img src="assets/logo.svg" alt="Logo">
        <a class="move-to-top" href="#">
            <img src="assets/arrow-black.svg" alt="Logo">
        </a>
    </div>
    <div class="line"></div>
    <div class="middle">
        <form class="form-container" action="./contatodb.php" method="post">
            <h2 class="title-form">Para mais informações fale conosco</h2>
            <input type="text" name="nome" placeholder="Nome" />
            <input type="email" name="email" placeholder="nft@email.com.br" />
            <textarea name="assunto" rows="4"></textarea>
            <button type="submit" class="send-button">Enviar</button>
        </form>
    </div>
    <div class="line"></div>
    <div class="base">
        <p class="info">
            Copyright &copy;&nbsp;2022&nbsp; Rocket NFTs.
            &nbsp;All rights reserved.
        </p>
        <div class="icons">
            <img src="assets/instagram.svg" alt="instagram">
            <img src="assets/youtube.svg" alt="youtube">
            <img src="assets/twitter.svg" alt="twitter">
            <img src="assets/email.svg" alt="email">
        </div>
    </div>
</div>

</div>
<style>
    .container-footer {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #252525;
    }

    .container-footer .top {
        max-width: 1280px;
        width: 100%;
        height: 180px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .container-footer .top .move-to-top {
        width: 80px;
        height: 80px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #FF5B50;
        border: none;
        text-decoration: none;
    }

    .container-footer .top .move-to-top:hover {
        background-color: #ffffff;
    }

    .container-footer .line {
        width: 100%;
        border-bottom: 1px solid #5A5757;
    }

    .container-footer .middle {
        max-width: 1280px;
        width: 100%;
        padding-top: 65px;
    }

    .container-footer .middle .form-container {
        max-width: 580px;
        display: flex;
        flex-direction: column;
    }

    .container-footer .middle .form-container .title-form {
        max-width: 350px;
        font-weight: 500;
        font-size: 30px;
        color: #ffffff;
        margin-bottom: 25px;
    }

    .container-footer .middle .form-container input {
        height: 66px;
        font-size: 20px;
        color: #5A5757;
        background-color: #0e0e0e;
        margin-bottom: 15px;
        padding: 0 20px;
    }

    .container-footer .middle .form-container input::placeholder {
        font-size: 20px;
        color: #5A5757;
    }

    .container-footer .middle .form-container input:focus {
        font-size: 20px;
        border: 1px solid #FF5B50;
        box-shadow: none;
    }

    .container-footer .middle .form-container textarea {
        font-size: 20px;
        color: #5A5757;
        background-color: #0e0e0e;
        border: none;
        padding: 20px;
        margin-bottom: 15px;
    }

    .container-footer .middle .form-container .send-button {
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

    .container-footer .middle .form-container .send-button:hover {
        color: #ffffff;
        background-color: #FF5B50;
    }

    .container-footer .base {
        max-width: 1280px;
        width: 100%;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .container-footer .base .info {
        font-size: 20px;
        color: #5A5757;
    }

    .container-footer .base .link {
        font-size: 20px;
        color: #5A5757;
    }

    .container-footer .base .link:hover {
        color: #FF5B50;
    }

    .container-footer .base .icons {
        width: 270px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
</style>

</body>

</html>