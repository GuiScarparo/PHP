<?php
    //get recebe as variaveis por URL
    $v1= $_GET['v1'];
    $v2= $_GET['v2'];
    $sinal= $_GET['sinal'];
    
    $resultado=$v1.$sinal.$v2."=";
    echo $resultado;

    if($sinal == '+'){
        echo "$v1 + $v2";
    }
    if($sinal == '*'){
        echo "$v1 * $v2";
    }
    

    //teste
    //site PHP.com.br/get.php?v1=10&v2=5&sinal=*
    