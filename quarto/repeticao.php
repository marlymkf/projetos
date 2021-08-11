<?php
$x = 1;

while($x <= 5) {
    echo "O número é: $x <br>";
    $x++;
}
?>
<br>

<?php
$x = 5;
do
{
    echo "O número é: $x <br>";
    $x++;
}while($x <= 4)
?>
<br>

<?php
   for($cont = 0 ; $cont <5 ; $cont++){
       echo "A variavel vale $cont <br>";
   }
   ?>
 <br>
   <?php
    echo "Estou fazendo uma contagem regressiva: <br>";
    for($i = 5 ; $i >= 0 ; $i--) {
        echo $i . ", ";
    }
    echo "... FIM!";
   ?> 
 <br><br>

   <?php
      $vetor = array (1, 2, 3, 4);

      foreach ($vetor as $v){
          echo "O valor corrente do vetor é $v. <br>";
      }
   ?>
   <br>
   <?php
   function exibir_mensagem($nome)
   {
       echo "Olá\n";
       echo $nome;
   }
   exibir_mensagem("Marly");
   ?>
   <br><br>
   
   <?php
    function dia_atual() {
        $hoje = getdate();
        switch($hoje["wday"]){
            case 0: return "Domingo";break;
            case 1: return "Segunda";break;
            case 2: return "Terca";  break;
            case 3: return "Quarta"; break;
            case 4: return "Quinta"; break;
            case 5: return "Sexta";  break;
            case 6: return "Sábado"; break;
        }
    }
    $dia = dia_atual();
    echo $dia;
    ?>
    <br><br>

    <?php

    function soma($numA, $numB)
    {
        return $numA + $numB;
    }
    $resultado = soma(1, 2);
    echo $resultado;
    ?>
    <br><br>

    <?php
    function soma2(&$numA, $numB)
    {
         $numA += $numB;
    }
    $resultado = 5;
    $resultado2 = 4;
    soma2($resultado,$resultado2);
    echo $resultado;
    ?>
    <br><br>

    <?php
    $saldo = 1000;
    function sacar($valor){
        global $saldo;
        $saldo = $saldo - $valor;
    }
    function depositar($valor){
        global $saldo;
        $saldo = $saldo + $valor;
    }
    depositar(500);
    sacar(150);
    echo "Novo saldo é " .$saldo;
    ?>
    <br><br>

    <?php
    function calculaFatorial($numFatorial)
    {
        if($numFatorial <=1){
            $numFatorial = $numFatorial;
        } else {
            $numFatorial *= calculaFatorial($numFatorial-1);
        }
        return $numFatorial;
    }
    $num = 4;
    echo calculaFatorial($num);
    
    ?>
      
