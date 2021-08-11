<?php
$nome_cookie = "usuario";
$valor_cookie = "Marly Furtado";
setcookie($nome_cookie, $valor_cookie, time() + 3600);
?>

<html>
    <body>
        <?php
        if(!isset($_COOKIE[$nome_cookie])) {
            echo "cookie '" . $nome_cookie . "' não estava atribuído!";
        } else {
            echo "Cookie '" . $nome_cookie . "' está atribuído!<br>";
            echo "Valor: " . $_COOKIE[$nome_cookie];
        }
        ?>
    </body>
</html>


<?php
setcookie("CookieTeste","",time() + 3600);
?>