<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FUNÇÃO</title>
</head>
<body>
    <?php

// 1 PRIMEIRO EXEMPLO

// SOMA  
    function soma_valores($valor1,$valor2){
        $soma = $valor1 + $valor2;
        echo "a soma dos valores é: ". $soma;
    }
    
    $n1=10;
    $n2=10;
    soma_valores($n1,$n2);
    echo"<br>";
// SUBTRAÇÃO

    function sub_valores($valor1,$valor2){
        $soma = $valor1 - $valor2;
        echo "a sub dos valores é: ". $soma;
    }
    
    $n1=10;
    $n2=10;
    sub_valores($n1,$n2);
echo"<br>";
// SUBTRAÇÃO

    function mult_valores($valor1,$valor2){
        $soma = $valor1 * $valor2;
        echo "a mult dos valores é: ". $soma;
    }
    
    $n1=10;
    $n2=10;
    mult_valores($n1,$n2);
    echo"<br>";
// DIVISÃO

    function div_valores($valor1,$valor2){
        $soma = $valor1 / $valor2;
        echo "a div dos valores é: ". $soma;
    }
       
    $n1=10;
    $n2=10;
    div_valores($n1,$n2);

    echo"<br>";
    echo"<br>";

// 2 EXEMPLO

function triplo($num){
    $x = $num * 3;
    return $x;
}

$valor = 5;
echo "O triplo do valor é : ".triplo($valor);


// 3 EXEMPLO

function capitais(){
    $capitais [] = "Natal";
    $capitais [] = "Belo Horizonte";
    $capitais [] = "Rio de Janeiro";
    $capitais [] = "Goiânia";
    $capitais [] = "Brasília";
return $capitais;
}

$nomes = capitais();
for($i=0; $i<sizeof($nomes); $i++){
    echo "\$nomes[$i] vale $nomes[$i]<br>";
}

    ?>
</body>
</html>