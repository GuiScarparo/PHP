<?php
    $aluno = ["nome" => "Francisco", "idade" => 16, "nota" => 100];
    $anot = date('Y');
    $ano = $anot - $aluno["idade"];
    
    echo "Olá {$aluno['nome']}, você tem {$aluno['idade']} anos e sua nota é {$aluno['nota']}<br>";
    echo "<p>Você nasceu no ano de $ano</p>";
    
    $da = date('d-m-Y');
    echo "Hoje é $da<br>";  // Corrigido: removido ; dentro da string
    
    $d = date('d');
    echo "Hoje é dia $d sendo o Dia Nacional da CNH<br>"; // Corrigido: removido ; extra
    
    $horario = date('H:i:s');
    echo "Agora são $horario";  // Corrigido: trocado $d por $horario
?>
