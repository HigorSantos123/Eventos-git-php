<?php
require_once 'init.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

$idEvento = $_POST['id'];

if(isset($_SESSION['Eventos'][$idEvento])){
    unset($_SESSION['Eventos'][$idEvento]);
    header('Location: index.php?sucesso=exclusao');
    exit;
}

$_SESSION['erro'] = "Evento não encontrado.";
header('Location: index.php');
exit;
}

?>
