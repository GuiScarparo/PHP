<?php
        // Recebendo dados via POST
        $nome   = $_POST['nome'];
        $idade  = $_POST['idade'];
        $altura = $_POST['altura'];
        $peso   = $_POST['peso'];

        // Cálculo do IMC
        $imc = $peso / ($altura * $altura);
        $imc = number_format($imc, 2, ', ', '.');

        // Exibindo resultado
        echo "o seu imc é $imc";

        if ($imc < 18.5) {
            echo "<p>Classificação: Abaixo do peso</p>";
        } elseif ($imc < 24.9) {
            echo "<p>Classificação: Peso normal</p>";
        } elseif ($imc < 29.9) {
            echo "<p>Classificação: Sobrepeso</p>";
        } else {
            echo "<p>Classificação: Obesidade</p>";
        }
?>
