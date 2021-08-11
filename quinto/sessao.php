<?php
    session_start();

    $_SESSION['nome'] = "Marly";
    $_SESSION['sobrenome'] = "Furtado";
    $_SESSION['data'] = date('d/m/y' , time() );

    echo "<h2> As variáveis de sessão foram definidas.</h2>";
    echo " <a href='mostrasessao.php'> dados da sessão </a>";
?>    