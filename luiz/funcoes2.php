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
    
    function verificaidade($idade){
        if($idade >= 18){
            echo "Maior de idade";
        }else{
            echo "Menbr de idade";
        }
    }

    ?>
</body>
</html>