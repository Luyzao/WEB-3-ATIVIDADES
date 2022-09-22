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
    
    $texto = "<img src=https://pm1.narvii.com/6450/db84a8b5b60e3634abc974dfed02b283746c778a_hq.jpg>";
    $novo_texto = htmlspecialchars($texto);
    
    echo $texto;
    echo $novo_texto;
    ?>
</body>
</html>