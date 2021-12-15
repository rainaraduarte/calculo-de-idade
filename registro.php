<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
<?php
$nascimento = $_POST["anonasc"];
$anoatual = 2021;
$idade;

$idade = $anoatual - $nascimento;
echo "<h3>Você nasceu em $nascimento e tem  $idade anos!</h3>"; 
?>
</body>
</html>
