<!DOCTYPE html>
<?php include "funcoes2.php"?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php


$nome = $_POST["name"];
$idade = $_POST["idade"];

?>

<p>Oi <?php echo $_POST["name"];?>.</p>
<p>Você tem <?php echo $_POST["idade"];?></p>

<?php verificaidade($idade); ?>
</body>
</html>