<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ghz.life</title>
</head>
<body>

<form action="#" method="get">

    <label for="name">Nome:<input type="text" name="name"></label>
    <br/>
    <label for="date">
    Data de Nascimento:<input type="number" name="date" min="1900" max="2022"></label>
    <input type="submit" value="verificador"> 

</form>
    
<?php

    $a = isset ($_GET["date"])?($_GET["date"]):1900;
    $n = isset ($_GET["name"])?($_GET["name"]):"Não informado";
    $i = date("Y") - $a; 


    echo "Ola, $n voce nasceu em ".$a." com isso tem ".$i;

    if ($i >= 18 ) {
        
        $resposta1 = "<p>ja pode votar</p>";
        $resposta2 = "<p>ja pode dirigir</p>";


    } if (( $i>=16 ) && ( $i < 18 )) {

        $resposta1 = "<p>ja pode votar se quiser</p>";
        $resposta2 = "<p>não pode dirigir</p>";

    } if ($i < 16) {

        $resposta1 = "<p>não pode votar</p>";
        $resposta2 = "<p>não pode dirigir</p>";
        
    }if ($i > 65) {

        $resposta1 = "<p>voto opicional</p>";

    }

    echo $resposta1;
    echo $resposta2;


?>


</body>
</html>