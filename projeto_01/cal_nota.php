<?php
$materia =$_POST['materia'];
$nota1 =$_POST['nota1'];
function nota1($nota1){

if ($nota1 >= 7){
    echo "Você foi aprovado, a nivel elden ring, bloodborne, Dark souls 3 ou Sekiro";
}elseif ($nota1>= 5 && $nota1< 7){
    echo "você esta de recuperação, a nivel Dark souls 1, ou demon souls remake";
} else{
    echo "você esta reprovado, a nivel demon souls ou dark souls 2";
}
}
echo "na diciplina de $materia". "<br>";
nota1($nota1);    

?>