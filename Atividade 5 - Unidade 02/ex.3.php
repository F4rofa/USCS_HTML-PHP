<html>
    <head>
        <meta charset="UTF-8">
        <meta name="Author" content="Davi Marçal">
        <title>Exercício 3 - Atividade 5</title>
    </head>
<body>
    <?php
    $x1 = 2.0; $y1 = 2.0; 
    $x2 = 5.0; $y2= 5.0;
    $distanceAB = number_format(sqrt( ( ($x2 - $x1) ** 2) + ( ($y2 - $y1) ** 2) ), 2);

    echo "<h2>Cálculo da distância entre dois pontos no plano cartesiano!</h2>"; //h1 o maior
    echo "<p> Coordenada de pontos: (x, y)</p>";
    echo "Ponto A = ($x1, $y1);" . "<br>";
    echo "Ponto B = ($x2, $y2);" . "<br>";
    
    echo "<p>A distância entre estes 2 pontos é de: $distanceAB </p>";
    ?>
</body>
</html>
