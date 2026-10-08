<?php
require_once __DIR__ . "/init.php";

$erro = null;
if(isset($_SESSION['erro'])){
    $erro = $_SESSION['erro'];
    unset($_SESSION['erro']);
}
?>

<html>
    <head></head>
    <body>
        <h1 style="background-color: red; color: white;">Eventos Senai - Cadastro</h1>
        <?php require_once __DIR__ . "/nav.php"?>

        <?php if($erro): ?>
        <p style="color: red;"><?= htmlspecialchars($erro) ?></p>
        <?php endif; ?>

        <form action="processaCadastro.php" method="POST">
            <div>
                <label style="color: red;" for="titulo">Titulo: </label>
                <input type="text" name="titulo" id="titulo"
                required>
            </div>
            <br>
            <div>
                <label style="color: red; width: 6px" for="imagem">Imagem (link): </label>
                <input type="text" name="imagem" id="imagem">
            </div>
            <br>
            <div>
                <label style="color: red;" for="local">Local: </label>
                <input type="text" name="local" id="local"
                 required>
            </div>
            <br>
            <div>
                <label style="color: red;" for="fonte">Categoria: </label>
                <input type="text" name="Fonte" id="Fonte"
                 required>
            </div>
            <br>
            <div>
                <label style="color: red;" for="data">Data do Evento: </label>
                <input type="date" name="data" id="data"
                 required>
            </div>
             <br>
            <div>
                <label style="color: red;" for="data">Capacidade Máxima: </label>
                <input type="number" name="Capacidade" id="Capacidade"
                 required>
            </div>
              <br>
            <div>
                <label style="color: red;" for="data">Horário: </label>
                <input type="time" name="Horário" id="Horário"
                 required>
            </div>
             <br>
            <div>
                <label style="color: red;" for="descrição">Descrição: </label>
                <input type="text" name="descrição" id="descrição">
            </div>
            <button style="background-color: red; color: white;" type="submit">Cadastrar</button>
            <br>
            
        </form>
    </body>
</html>