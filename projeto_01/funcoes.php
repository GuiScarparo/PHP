<?php
function conecta($usuario, $senha){
    if($usuario === "admin" && $senha === "1234") {
        header("location: painel.php");
        exit;
    } else {
        $msg = urlencode("usuario ou senha invalidos");
        header("location: index.php?msg=$msg");
        exit;
    }
}
?>