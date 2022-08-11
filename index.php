<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



<?
//Coisas basicas para printar na tela
 echo "Ola mundo";
 echo "<br>";
 echo "Hoje é: ". date('d/m/y');
 echo "<br>";
 echo "agora são: ". date('m:i:s');
 echo "<br>";

 //Vendo variaveis de calculos +(soma) *(vezes) -(menos) /(dividir) % (modulo / resto de divisão)
 $resultado = 2*2+3*3+5 ;
 $resultado1 = (2+3)*(3+5);
 echo "resultado A: ".$resultado. " resultado B: " . $resultado1;

 echo"<br>";

 var_dump($resultado);

 echo"<br>";

//Mostra que se mudar a variavel e printar ela varias vezes ela muda
 $pi = 3 ;
print "pi: ".$pi;
 echo"<br>";
 $pi = 3 + 0.14159;
print "pi: ".$pi;
echo"<br>";
$pi = "LUIZ";
print $pi;
echo"<br>";
//IF/Else

$a = 2;
$b = 5;

echo "A é maior que B?<br>";

echo"A: ". $a. "<br>";
echo"B: ". $b. "<br>";

echo"<br>"; 

if($a > $b){
    echo "Verdadeiro";
}else{
    echo "falso";
}
echo "<br>";
//switch

$a =3;

switch($a){
    case 0:
        echo "o valor é igual a 0";
    break;

    case 1:
        echo "o valor é igual a 1";
    break;

//default serve para para quando colocar uma opção que n tem no switch ele apresentar o resultado definido no defalut

     default: 
     echo"opçao invalidada";
     echo"<br>";
    
}

//For(reptição)

for($i=0;$i<=10;$i++){
    echo"$i <br>";
}


$a = 11;
//WHILE

while($a<=10){
    echo $a;
    $a++;
}

echo "<br>";
//DO-While

do{
    echo $a;

    $a++;
}while($a<=10)
?> 

</body>
</html>
