<?php
    //post recebe a variavel por função
    $v1= $_POST['v1'];
    $v2= $_POST['v2'];
    $sinal= $_POST['sinal'];
    
    $resultado=$v1.$sinal.$v2."=";
    echo $resultado;    
//o sinal de + é transferido normalmente em POST
    if($sinal == '+'){
        echo $v1 + $v2;
    }
    if($sinal == '*'){
        echo $v1 * $v2;
    }
    if($sinal == '-'){
        echo $v1 - $v2;
    }
    if($sinal == '/'){
        echo $v1 / $v2;
    }
    

    //teste
    //site PHP.com.br/get.php?v1=10&v2=5&sinal=*