<?php
require_once 'init.php';
?>

<html>
    <head></head>
    <body>
        <center><h1 style="background-color: white; color: red;">Eventos Senai</h1></center>
        <?php require_once __DIR__ . "/nav.php" ?>

        <?php
        if(isset($_GET['sucesso'])){
            if($_GET['sucesso'] == 'cadastro'){
                print "<p style='color: green;'>Evento cadastrado com sucesso!</p>";
            }
            if($_GET['sucesso'] == 'alteracao'){
                print "<p style='color: green;'>Evento alterado com sucesso!</p>";
            }
            if($_GET['sucesso'] == 'exclusao'){
                print "<p style='color: green;'>Evento excluído com sucesso!</p>";
            }
        }
        if(isset($_SESSION['erro'])){
            print "<p style='color: red;'>" . htmlspecialchars($_SESSION['erro']) . "</p>";
            unset($_SESSION['erro']);
        }
        ?>

        <?php if(count($_SESSION['Eventos']) == 0){ ?>

        <p>Nenhum evento cadastrado no momento.</p>

        <?php }else{ ?>

        <table border="1">
        <tr style="background-color: red; color: white;">
        <td>Titulo</td>
        <td>Categoria</td>
        <td>Data</td>
        <td>Horário</td>
        <td>Local</td>
        <td>Capacidade</td>
        <td>Descrição</td>
        <td>Ações</td>
        </tr>
        <?php
        foreach($_SESSION['Eventos'] as $chave => $valor){
            print "<tr>";
            print "<td>" . htmlspecialchars($valor['titulo']) . "</td>";
            print "<td>" . htmlspecialchars($valor['Fonte']) . "</td>";
            print "<td>" . htmlspecialchars($valor['data']) . "</td>";
            print "<td>" . htmlspecialchars($valor['Horário']) . "</td>";
            print "<td>" . htmlspecialchars($valor['local']) . "</td>";
            print "<td>" . htmlspecialchars($valor['Capacidade']) . "</td>";
            print "<td>" . htmlspecialchars($valor['descrição']) . "</td>";
            print "<td>
                <a href='formAlteracao.php?id={$chave}'>Editar</a>
                |
                <a href='formDeletar.php?id={$chave}'>Excluir</a>
            </td>";
            print "</tr>";
        }
        ?>
        </table>

        <?php } ?>
    </body>
</html>
