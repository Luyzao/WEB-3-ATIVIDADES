<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

$usuario = $_POST["usuario"]; 

$senha = $_POST["senha"]; 

$nome = $_POST["nome"]; 

$email = $_POST["email"]; 

$cidade = $_POST["cidade"]; 

$estado = $_POST["estado"]; 

$erro = FALSE;

if(strlen($usuario)<5) {echo "O usuário deve possuir ao menos 5 caracteres. <br>"; $erro=TRUE;}

 if(strlen($senha)<5) {echo "A senha deve possuir ao menos 5 caracteres. <br>";

 $erro=TRUE;} 

if(empty($nome) OR strstr($nome,' ')) {echo "Digite o nome corretamente. <br>"; $erro=TRUE;} 

if(strlen($email)<8 OR !strstr($email,'@')){echo "Digite o e-mail correto.<br>"; 

$erro=TRUE;}

if(empty($cidade)) {echo "Digite a cidade corretamente. <br>"; 

$erro=TRUE;} 

if(strlen($estado)!=2) {echo "Digite o estado corretamente. <br>";

$erro=TRUE;}

if(!$erro) {echo "Todos os dados foram digitados corretamente! <br>";}

    ?>    

</body>
</html>