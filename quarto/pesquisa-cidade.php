<?php
include_once("conectar.php");

$pesquisa = $_POST['cidade'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Resultado da Pesquisa por Cidade</title>
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
    </body>
</html>

<?php
$sql = "SELECT * FROM Usuarios WHERE cidade = '$pesquisa'";
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
mysqli_close($strcon);
echo "</table>";
?>



        