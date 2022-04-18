<?php

$a = 1;
$provavelResultado=9999;
$var    =   $_GET['inf'];



while ($a <= 3) {               //LOOP para passar em todas as buscas até encontrar um único valor, se não encontrar ele encerra
    
    FunctionName($a);
    $a++;
    echo $a;
    
}
if ($a >= 4) {
    teste();

}
function teste()
{

    echo'teste';

}


function FunctionName($variable)            // função que faz as query e verifica se o resultado é igual a um, se for ele redireciona o usuário... se não for ele armazena a quantidade de resultados que encontrou
{
    global $var;
    switch ($variable) {
        case '1':

            //variable = query_sql(COUNT)
        $variable = ($var == 1) ? 'redirect' : FunctionName2($qt_COUNT = 3, $qual_query="sql1");
        echo '<br> 1 - '.$variable;

            break;

        case '2':

        $variable = ($var == 2) ? 'redirect' : FunctionName2($qt_COUNT = 10, $qual_query="sql2") ;
        echo '<br> 2 - '.$variable;

            break;

        case '3':

            
            $variable = ($var == 3) ? 'redirect' : FunctionName2($qt_COUNT = 0, $qual_query="sql3") ;
            echo '<br> 3 - '.$variable;
            
            break;
        
        default:

        break;
    }

    echo $variable;
   
}

function FunctionName2($qt_COUNT = null, $qual_query = null)
{           // função para guardar qual a sql que teve um menor valor na busca

    global $provavelResultado;

if ($qt_COUNT > 0) {

    if ($qt_COUNT <= $provavelResultado) {

        $provavelResultado  = $qt_COUNT;
        $comandoSQfa        = $qual_query;

        echo '<br> gravou o : '. $comandoSQfa .'<br>';

    }else {
        echo '<br> não gravou nd <br>';
    }
}


}



