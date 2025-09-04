<?php
$num=$_POST['num'];

function parouimpar($num){
    if ($num % 2 == 0) {
        return "par";
    }else{
        return "impar";
    }
}
echo parouimpar($num);
