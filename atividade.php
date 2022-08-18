<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a = 8;
$b = 8;
$r = $a + $b;

if($r > 20){
    echo "O resultado da: " . ($r+8) ;
}else{
    echo "O resultado da: " . ($r-5) ;
}
echo "<br>";
echo "<br>";
/////////////////////////////////////////////////


$a = 40;
$d1 = ($a % 10);
$d2 = ($a % 5);
$d3 = ($a % 2);


   
    if($d1 == 0){
        echo"Este numero é divisivel por 10<br>";
    }if($d2 == 0){
        echo"Este numero é divisivel por 5<br>";
    }if($d3 == 0){
        echo"Este numero é divisivel por 2<br>";
    } 
    else if($d1||$d2||$d3 > 0){
        echo"Este numero n é divisivel por nenhum numero";
    }
    echo"<br>";
    echo"<br>";
/////////////////////////////////////////////////////

$nome = "sophia";
$sexo = "F";
$idade = 15;

if($sexo == "F"){

    if($idade <= 25){
        echo"ACEITO";
    }else{
        echo"NÃO ACEITO";
    }
}else{
    echo"NÃO ACEITO";
}
echo"<br>";
echo"<br>";
/////////////////////////////////////////////////////////

$numeros = array(1,90,10);

$numeros = array_values($numeros);

var_dump($numeros);

?>
</body>
</html>
