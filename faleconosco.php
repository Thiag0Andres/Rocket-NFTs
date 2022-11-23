<div class="container-faleconosco">
    <form class="form-container">
        <h2>Para mais informações fale conosco</h2>

        <label>Nome</label>
        <input type="text" name="nome" />

        <label>Email</label>
        <input type="text" name="email" />

        <label>Mensagem</label>
        <textarea name="mensagem" rows="4"></textarea>

        <button disabled>Enviar</button>
    </form>
</div>


<style>
    .container-faleconosco {
        flex-grow: 1;
        flex-basis: auto;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #000;
    }

    .form-container {
        display: flex;
        flex-direction: column;
        width: 50%;
        padding: 50px;
        background-color: #5c007a;

    }

    .form-container h2 {
        color: #ffffff;
    }

    .form-container label {
        color: #ffffff;
        margin-bottom: 10px;
    }

    .form-container input {
        margin-bottom: 15px;
    }

    .form-container button {
        width: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 24px 0 26px 0;

        background: #ffffff;
        border-color: transparent;
        border-radius: 4px;

        font-weight: bold;
        font-size: 14px;
        line-height: 120%;

        color: #373f41;

    }
</style>