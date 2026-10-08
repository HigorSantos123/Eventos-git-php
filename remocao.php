<?php
require_once 'init.php';

?>
<html>
<head>
</head>

<body>

<h1>NotiSENAI - Deletar</h1>

<?php require_once __DIR__ . "detalhes.php" ?>

<ul>
<?php
foreach ($_SESSION['Eventos'] as $chave => $valor) {

    print "<li>
        <a href='remocao.php?id={$chave}'>
            {$valor['titulo']}
        </a>
    </li>";
}
?>
</ul>

<?php if (isset($_GET['id']) and isset($_SESSION['Eventos'][$_GET['id']])): ?>

    <?php
    $id = $_GET['id'];
    $eventoAtual = $_SESSION['Eventos'][$id];
    ?>

    <h2>Deseja excluir esta notícia?</h2>

    <p>
        <strong><?= htmlspecialchars($eventoAtual['titulo']) ?></strong>
    </p>

    <form action="processaDeletar.php" method="POST">

        <input type="hidden" name="id" value="<?= $id ?>">

        <button type="submit">Excluir notícia</button>

    </form>

<?php else: ?>

    <p>Nenhuma notícia selecionada.</p>
    <p>Por favor, selecione uma das opções acima!</p>

<?php endif; ?>

</body>
</html>
