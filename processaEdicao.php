<?php

require_once __DIR__ . "/init.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $id = $_POST['id'];

    if(!isset($_SESSION['Eventos'][$id])){
        $_SESSION['erro'] = "Evento não encontrado.";
        header("Location: index.php");
        exit;
    }

    $titulo = trim($_POST['titulo']);
    $imagem = trim($_POST['imagem']);
    $local = trim($_POST['local']);
    $Fonte = trim($_POST['Fonte']);
    $data = trim($_POST['data']);
    $Capacidade = trim($_POST['Capacidade']);
    $Horário = trim($_POST['Horário']);
    $descrição = trim($_POST['descrição']);

    $erro = "";

    if($titulo == "" or $local == "" or $Fonte == "" or $data == "" or $Horário == ""){
        $erro = "Preencha todos os campos obrigatórios.";
    }

    if(!is_numeric($Capacidade) or $Capacidade <= 0){
        $erro = "A capacidade precisa ser um número inteiro maior que zero.";
    }

    if($erro != ""){
        $_SESSION['erro'] = $erro;
        header("Location: formAlteracao.php?id=" . $id);
        exit;
    }

    $_SESSION['Eventos'][$id]['titulo'] = $titulo;
    $_SESSION['Eventos'][$id]['imagem'] = $imagem;
    $_SESSION['Eventos'][$id]['local'] = $local;
    $_SESSION['Eventos'][$id]['Fonte'] = $Fonte;
    $_SESSION['Eventos'][$id]['data'] = $data;
    $_SESSION['Eventos'][$id]['Capacidade'] = (int)$Capacidade;
    $_SESSION['Eventos'][$id]['Horário'] = $Horário;
    $_SESSION['Eventos'][$id]['descrição'] = $descrição;

    header("Location: index.php?sucesso=alteracao");
    exit;
}

header("Location: index.php");
exit;
