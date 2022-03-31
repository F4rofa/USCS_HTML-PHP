<html>
    <head> 
        <meta charset="UTF-8">
        <meta name = "Author" content="Davi Marçal">
        <title>Exercício 1 - Atividade 5 </title>
    </head>
<body>
    <?php
    $raio = 2;
    $pi = 3.14159;
    $area = $pi * ($raio * $raio);
    $area = number_format($area, 4); // Formatando o numero em 4 casas decimais

    echo "<h2>Calculando a área de um círculo de raio 2</h2>";
    echo "Área do Círculo = π * r²" . "<br>", "<br>";
    echo "Área do Circulo = $pi * ($raio * $raio) = $area";
    ?>

</body>
</html>
