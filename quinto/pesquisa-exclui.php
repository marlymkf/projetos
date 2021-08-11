<?php
include_once("conectar.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Pesquisa Usu´rios SistemaFic</title>
        <style>/* Seu CSS funciona aqui! */</style>
    </head>
    <body>

    <!-- Criando tabela e cabeçalho de dados: -->
    <table border="1" style='width:50%'>
    <tr>
        <th>NOME</th>
        <th>ENDEREÇO</th>
        <th>CIDADE</th>
    </tr>

    <!--Preenchendo atabela com os dados do banco: -->
    <?php
        $sql = "SELECT * FROM Usuarios"; 
        $resultado = mysqli_query($strcon,$sql);

        While ($registro = mysqli_fetch_array($resultado))
        {
            $nome = $registro['nome'];
            $endereco = $registro['endereco'];
            $cidade = $registro['cidade'];
            echo "<tr>";
            echo "<td>".$nome."</td>";
            echo "<td>".$endereco."</td>";
            echo "<td>".$cidade."</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($strcon);
    ?>
    
    <form name="exclui" action="excluir.php" method="post">
        <p>Digite o nome que deseja excluir:
            <input type="text" name="nome" />
        </p>
        <input type="submit" name="botao" value="Enviar" />
    </form>
    </body>
</html>
        