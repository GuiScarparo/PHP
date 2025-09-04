<?php
function saudacao($nome){
    return "BEm-vindo,$nome! Sua participação foi corfirmada";
}



function banco_dados($db){
    return "seu banco, $db, foi conectado com sucesso";
}


function fiap($aluno,$aluno2,$aluno3,$observacao){
    echo"<h3> lista de alunos com observações: </h3>";
    echo "<ul>";
    echo "<li> $aluno</li>";
    echo "<li> $aluno2</li>";
    echo "<li> $aluno3</li>";
    echo "</ul>";
    echo "<li> $observacao</li>";
}



?>