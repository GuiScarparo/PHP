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
        echo "$nome o seu imc aos $idade anos é $imc";

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
<html>
    <body>
        caso queira voltar para a pagina anterio use esse link<br>
        <table border="3" cellpadding="5" cellspacing="5">
            <tr>
                  <td colspan="2" align="center">
                    <a href="http://localhost/imc.com.br/index.html"> <i>voltar para pagina anterior </i></a>
                  </td>
            </tr>
        </table>
    </body>
</html>