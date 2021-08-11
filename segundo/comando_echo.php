<!DOCTYPE html>
<html>
<head>
    <title>Programa PHP</title>
</head>

<body>
<?php
    $valor1 = 25;
    $valor2 = 10;
    $soma = $valor1 + $valor2;
    $dif = $valor1 - $valor2;
    $mult = $valor1 * $valor2;
    $div = $valor1 / $valor2;
    $rst = $valor1 % $valor2;
    echo "A soma dos Valores é igual a " . $soma;
    echo "<br>A diferença dos Valores é igual a " . $dif;
    echo "<br>O produto dos Valores é igual a " . $mult;
    echo "<br>A divisão dos Valores é igual a " . $div;
    echo "<br>O resto da divisão é igual a " . $rst;
   
    $nota = 8;
    if($nota >= 0 and $nota <= 10)
        echo "Nota válida." ;
else
        echo "Nota invalida." ;
       

    if($nota < 0 or $nota > 10)
        echo "Nota invalida." ;
else
        echo "Nota valida." ;
        
    $nota = 5;
    if ($nota >= 6 )
    {
        echo "<br>Você está passado e é fera!";

    }
    else
    {
        echo "<br>Você é fera, mas foi preguiçoso!";
    }
    $a = 6;
    $b = 2;
    if ($a/$b == 2) 
    {
        echo "O resultado da divisão é 2";
    }
    else
    {
        echo "<br>O resultado da divisão não é 2, é ". $a/$b;
    }
    
    $valor = 10;
    if($valor == 10)
    {
        echo "<br>Valor è igual a 10";
    }
    else
    {
        echo "Valor è diferente a 10";
    }

    $prova1 = 6;
    $prova2 = 8;
    $media = ($prova1 + $prova2) / 2;
    if ($media < 3) 
         echo "Precisa dar mais gás!";
    elseif ($media <6)
           echo "Só mais um pouco!";
         elseif ($media < 9) 
                echo "<br>Mais atenção e seria 10!";
            else
               echo "O Máximo!!";
               
    $idade = 18;
    
    if ($idade >= 18)
        {
        $x = "<br>È maior de idade";    
        }
    else
        {
        $x = "É menor de idade";    
        }    
    echo $x;

    $opcao = 's';
    switch ($opcao) {
    case 's':
        echo "<br>Você escolheu SIM!"; 
    break;
    case 'n':
        echo "Você escolheu NÂO!";
    break;       
    }
    echo "<br>";
    echo str_replace("world", "doliy", "hello world!");
    echo "<br>";

    $cores[0] = "amarelo";
    $cores[1] = "azul";
    $cores[2] ="verde";
    $cores[] ="branco";

    echo $cores[0]. "-".$cores[1]. "-".$cores[2]. "-".$cores[3]."<br>";
    print_r($cores);
    echo "<br>";

    $pessoa =array('nome' => 'Andéia',
                   'idade' => 40,
                   'email' => 'andreia@mail.com'
                  );
    echo $pessoa['email'];
    echo "<br>";
    
    $pessoa[] = 'info';
    $pessoa[] = 'pessoa';

    $pessoa['nome'] = 'Andréia';
    $pessoa['idade'] = 40;

    print_r($pessoa);
    echo "<br>";

    $arrayMulti = array(
        'arrayNumerico' => array(
            'item 1',
            'item 2',
            'item 3',
        ),
        'associativeArray' => array(
            'chave1' => 'valor1',
            'chave2' => 'valor2',
            'chave3' => 'valor3',
        ),
    );
    print_r($arrayMulti['arrayNumerico'][1]);
    echo "<br>";

    $languages = array();
    $languages['PHP'] =array(
        "primeira_versão" => "1995",
        "ultima_versão" => "7.4.7",
        "desenvolvida_by" => "Rasmus Lerdorf",
        "descrição" => array(
            "extensão" => ".php",
            "license" => "PHP License (most of Zend engine
                under Zend Engine License)"
        )
        );
        $languages['Python'] = array(
            "primeira_versão" => "1991",
            "ultima_versão" => "3.8.0",
            "desenvolvida_by" => "Guido van Rossum",
            "descrição" => array(
                "extensão" =>".py",
                "license" => "Python Software Foundation License"
            )
            );
            print_r($languages);
    
    
?>
</body> 
</html>   



