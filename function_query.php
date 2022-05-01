<?php
$v=0;
$query = " SELECT * FROM  teste WHERE ";
$query_inf1 = '';
$query_inf2 = '';
$query_inf3 = '';
$query_inf4 = '';
$query_inf5 = '';

if (isset($_GET['inf1'])) {
    $inf1 = $_GET['inf1'];
    $query_inf1 = " 'inf1'=$inf1 ";
    $query_inf1 = andFunction($query_inf1);
}
if (isset($_GET['inf2'])) { 
    $inf2 = $_GET['inf2'];
    $query_inf2 = " 'inf2'=$inf2 ";
    $query_inf2 = andFunction($query_inf2);
}
if (isset($_GET['inf3'])) { 
    $inf3 = $_GET['inf3'];
    $query_inf3 = " 'inf3'=$inf3 ";
    $query_inf3 = andFunction($query_inf3);
}
if (isset($_GET['inf4'])) { 
    $inf4 = $_GET['inf4'];
    $query_inf4 = " 'inf4'=$inf4 ";
    $query_inf4 = andFunction($query_inf4);
}
if (isset($_GET['inf5'])) { 
    $inf5 = $_GET['inf5'];
    $query_inf5 = " 'inf5'=$inf5 ";
    $query_inf5 = andFunction($query_inf5);
}

function andFunction($var) {
    global $v;
    $v++;
    if ($v > 1) {
        if ($var != null) {
            $var=" AND ".$var;
        }
    }
    return $var;
}

echo $query.$query_inf1.$query_inf2.$query_inf3.$query_inf4.$query_inf5;

