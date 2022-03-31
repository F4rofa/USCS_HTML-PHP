<html>
    <head> 
        <meta charset="UTF-8">
        <meta name = "Author" content="Davi Marçal">
        <title>Exercício 2 - Atividade 5 </title>
    </head>
<body>
    <?php
    $p1 = 5.0;
    $p2 = 7.1;
    $media = (($p1 * 3.5) + ($p2 * 7.5)) / (3.5 + 7.5);
    $media = number_format($media, 5); // Formatando o numero em 5 casas decimais

    echo "<h2>Calculando a média das notas de um estudante</h2>";
    echo "Média das notas (média ponderada): [(P1 * peso1) + (P2 * peso2)] / (peso1 + peso2)" . "<br>";
    echo "<p>Média das notas desse aluno: [($p1 * 3.5) + ($p2 * 7.5)] / (3.5 + 7.5) = $media </p>";
    ?>

</body>
</html>
