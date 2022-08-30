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

///////////////////////////////////////////////////

///////////////
//ATIVIDADE 1//
///////////////


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

///////////////
//ATIVIDADE 2//
///////////////

$a = 40;
$d1 = ($a % 10);
$d2 = ($a % 5);
$d3 = ($a % 2);


   
    if($d1 == 0){
        echo"Este numero é divisivel por 10<br>";
    }if($d2 == 0){
        echo"Este numero é divisivel por 5<br>";
    }if($d3 == 0){
        echo"Este numero é divisivel por 2";
    } 
    else if($d1||$d2||$d3 > 0){
        echo"Este numero n é divisivel por nenhum numero";
    }
    echo"<br>";
    echo"<br>";
/////////////////////////////////////////////////////

///////////////
//ATIVIDADE 3//
///////////////

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

///////////////
//ATIVIDADE 4//
///////////////

$numeros = array(123,54340,10);

rsort($numeros);

echo $numeros[0]." , ";
echo $numeros[1]." , ";
echo $numeros[2];

echo"<br>";
echo"<br>";
/////////////////////////////////////////////////////////

///////////////
//ATIVIDADE 5//
///////////////

$a=3;
$b=5;
$c=5;

if($a == $b && $a == $c){
    echo"Triangolo Equilátero";
}
if(($a == $b && $a != $c) || ($b == $c && $a != $b) || ($c == $a && $c != $b)){
    echo"Triangolo Isósele";
}
else if($a != $b && $a != $c){
    echo"Triangolo Escaleno";
}

echo"<br>";
echo"<br>";
/////////////////////////////////////////////////////////

///////////////
//ATIVIDADE 6//
///////////////

$mes = rand(1,12);

switch($mes){
    case 1:
        echo "janeiro";
    break;

    case 2:
        echo "fevereiro";
    break;

    case 3:
        echo "março";
    break;

    case 4:
        echo "abril";
    break;

    case 5:
        echo "maio";
    break;

    case 6:
        echo "junho";
    break;

    case 7:
        echo "julho";
    break;

    case 8:
        echo "agosto";
    break;

    case 9:
        echo "setembro";
    break;

    case 10:
        echo "outubro";
    break;

    case 11:
        echo "novembro";
    break;

    case 12:
        echo "dezembro";
    break;
}

echo"<br>";
echo"<br>";
////////////////////////////////////////////////////////

///////////////
//ATIVIDADE 7//
///////////////

$livro = array("joao pé de feijao","pequneo principe","jogador numero1","steve jobs","bill gates") ;

$usu=rand(1,2);

if($usu == 1){

     $data = date('d/m/y',strtotime("+3 day"));
       
    echo"|Recibo do Aluno|<br>" ."Nome do livro: " . $livro[rand(0,4)] . "<br>
    Numero de Protocolo: " . rand(10000000,90000000) . "<br>
    Dia de Devolução: ". $data ;
    
}if($usu == 2){

    $data = date('d/m/y',strtotime("+10 day"));
       
    echo "|Recibo do Professor|<br>" ."Nome do livro: " . $livro[rand(0,4)] . "<br>
    Numero de Protocolo: " . rand(10000000,90000000) . "<br>
    Dia de Devolução: ". $data ;
}

echo"<br>";
echo"<br>";
////////////////////////////////////////////////////////

///////////////
//ATIVIDADE 8//
///////////////

$num = rand(1,20);

for($i=1;$i<=$num;$i++){
    echo$i;
}


echo"<br>";
echo"<br>";
////////////////////////////////////////////////////////

///////////////
//ATIVIDADE 9//
///////////////

$num = rand(1,10);

for($i=0;$i<=$num;$i++){
    echo"SOL";
}

echo"<br>";
echo"<br>";
////////////////////////////////////////////////////////

////////////////
//ATIVIDADE 10//
////////////////


for($i=-10;$i<=0;$i++){
    echo $i.",";
   
}
echo"<br>";
for($i=0;$i<=10;$i++){
    echo $i.",";
   
}

echo "<br>";
if($i > 0 ){
        echo $i+$i;
        
    }else{
        echo $i;
    }

echo"<br>";
echo"<br>";   
////////////////////////////////////////////////////////

////////////////
//ATIVIDADE 11//
////////////////

$num = rand(1,10);
for($i=0;$i<=10;$i++){
    echo$i."X". $num."=".($i * $num);
    echo "<br>";
}

echo"<br>";
echo"<br>"; 
////////////////////////////////////////////////////////

////////////////
//ATIVIDADE 12//
////////////////

$palavra = "Luiz";

for($i=1;$i<=5;$i++){
    echo"<br>";
    for($j=1;$j<=$i;$j++){
        echo $palavra ;
        
    
    }
    
}

echo"<br>";
echo"<br>"; 
////////////////////////////////////////////////////////

////////////////
//ATIVIDADE 13//
////////////////

for($i=0;$i<=200;$i++){

    if(($i>100)&&($i<200)){

        echo $i.",";
         
    }
}

echo"<br>";
echo"<br>"; 
////////////////////////////////////////////////////////

////////////////
//ATIVIDADE 14//
////////////////

$tamChico = 150;
$tamJuca = 110;
$anos = 0;

while($tamJuca<=$tamChico){

    $tamChico += 2;
    $tamJuca += 3;
    $anos++;
}

echo "Serão necessario ".$anos." anos";

echo"<br>";
echo"<br>"; 
//////////////////////////////////////////////////////////

////////////////
//ATIVIDADE 15//
////////////////

$massa = 100;
$tempo = 0;

while($massa > 10){  

   $massa = ($massa*0.75);
   $tempo ++;

}

    $tempo = $tempo*30;
    echo "É preciso: ". $tempo ."s";

echo"<br>";
echo"<br>"; 
///////////////////////////////////////////////////////////

////////////////
//ATIVIDADE 16//
////////////////

$num = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

for($i=0;$i < count($num);$i++){
    if($num[$i] % 2 == 0){
        echo"Par: ".$num[$i]."<br>";
    }else{
        echo"Impar: ".$num[$i]."<br>";
    }
}

echo"<br>";
echo"<br>";
///////////////////////////////////////////////////////////

////////////////
//ATIVIDADE 17//
////////////////

$num = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$maiornum = max($num);
$menornum = min($num);
echo "Maior numero: ".$maiornum. "<br>"."Menor Numero: ". $menornum;

echo"<br>";
echo"<br>";
///////////////////////////////////////////////////////////

////////////////
//ATIVIDADE 18//
////////////////

$n1 =  array(1,2,41,5,45,3,90,8,9,10);
$n2 =  array(1,2,41,4,45,7,909,89,9,10);

for($i=0;$i<10;$i++){
    
        if(!(in_array($n1[$i],$n2))){
            $n3[]=$n1[$i];
              
        }  
}
echo $n3[0]."<br>";
echo $n3[1]."<br>";
echo $n3[2]."<br>";
echo $n3[3]."<br>";




echo"<br>";
echo"<br>";
///////////////////////////////////////////////////////////

////////////////
//ATIVIDADE 19//
////////////////

for($i=0;$i<5;$i++){
    echo"<br>";
    for($j=0;$j<5;$j++){

$matriz[$i][$j] = rand(0,9);;
echo $matriz[$i][$j];



}

}
echo"<br>";
echo"<br>";

for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){

        if($i==$j){
            
            echo $matriz[$i][$j];

        }
    
    }
}
echo"<br>";
for($i=4;$i>=0;$i--){
          
    for($j=$i;$j<5;$j++){

       
            echo $matriz[$j][$i]; 
            $j = 5;
        }
    }

echo"<br>";
echo"<br>";
//////////////////////////////////////////////////////////

////////////////
//ATIVIDADE 20//
////////////////



$num = array(rand(1,9));

for($i=0;$i < count($num);$i++){

    if($num[$i] % 2 == 0){
        echo"NUMEROS PARES:";
        for($n=0;$n<5;$n++){
            echo"<br>";
           
            for($j=0;$j<5;$j++){
        
        echo $num[$i];
        
            }
        }
    }else{
        echo"NUMEROS IMPAR:";
        for($n=0;$n<5;$n++){
            echo"<br>";
           
            for($j=0;$j<5;$j++){
        
        echo $num[$i];
        
            }
        }
    }
}   

//////////////////////////////////////////////////////////
?>
</body>
</html>
