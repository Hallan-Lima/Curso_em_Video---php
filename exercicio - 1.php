<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghz.life</title>
</head>
<body>


<form action="#" method="get">

    informe seu nome :<input type="text" name="name" /><br/>
    informe data de Nascimento :<input type="number" name="ano" max="2022" min="1900"/><br/>

    <fieldset><legend>Sexo</legend>

        <input type="radio" name="sexo" id="masc" value="homem" checkdate/>
        <label for="masc">Masculino</label><br/>
        <input type="radio" name="sexo" id="fem" value="feminino"/>
        <label for="masc">Feminino</label><br/>

    </fieldset>
    Quantidade de produtos:<input type="number" name="v1" /><br/>
    Valor do produto:<input type="number" name="v2" /><br/>
    
    <input type="submit" >
 
</form>

<br/>
<?php

/* COMANDOS BASICOS DE SOMA E DIVISÃO
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];

    if($n1==""){
        $n1=10;
    }if($n2==""){
        $n2=1;
    }

    $media = ($n1 + $n2 )/2;

    $s = $n1 + $n2;
    $m = $n1 - $n2;
    $v = $n1 * $n2;

    echo "valores recebidos $n1 e $n2";

    echo "<p>o valor soma é $s</p>";
    echo "<p>o valor menos é $m</p>";
    echo "<p>o valor vezes é $v</p>";

    echo "o valor divisão é ". ($n1/$n2);

    echo "<br/>o valor do modulo é ". ($n1%$n2);

    echo "<p>o valor soma é $media</p>";

*/

    $v1 = isset ($_GET["v1"])   ?   ($_GET["v1"]) : "10";
    $v2 = isset ($_GET["v2"]) ? ($_GET["v2"]) : "10";
    $name = isset ($_GET["name"]) ? ($_GET["name"]) : "não informado" ;
    $sexo = $_GET["sexo"];
    $ano = isset ($_GET["ano"]) ? ($_GET["ano"]) : "1900";

    $t = $v1*$v2;

    echo "ola $name o seu sexo é $sexo";

    echo "<p>A quantidade de produto é $v1 dando um total de R$". number_format($t,2)."</p>";

    if ($v1 > 5) {

        echo "a quantidade é maior que 5 com isso, ganha um desconto de 10%";
        echo "<br/>com isso o valor atualizado é R$ ". number_format( $t-=$t*10/100,2);

    }else{

        echo "quantidade inferior a 5 produtos<br/>";
        $v1 -= 5;
        echo "para ganhar o desconto compre mais ". $v1*-1 . " produtos";

    }


?>

</body>
</html>