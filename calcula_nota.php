<?php
$nota1 =$_POST['nota1'];
function nota1($nota1){

if ($nota1 >= 7){
    echo "Você foi aprovado";
}elseif ($nota1>= 5 && $nota1< 7){
    echo "você esta de recuperação";
} else{
    echo "você esta reprovado";
}
}

nota1($nota1);    

?>