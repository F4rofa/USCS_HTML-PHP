<html>
<head>
  <title> Uso da Função gettype() </title>
</head>
<body>
  <?php
  $i = 10;
  $nome = "Tiago"; // String
  $falso = FALSE;  // Boolean
  $valor = 100.50; // float

  // <br> pular linha
  // '$i' -> vai mostrar '$i'
  // "$i" -> vai mostrar '10'
  // (\) -> Caractere de quebra
  echo "<h2> Uso da Função gettype() </h2>";
  echo 'A variável \'$i\' é do tipo: '. gettype($i);
  echo '<br>A variável "$nome" é do tipo: '. gettype($nome);
  echo '<br>A variável "$valor" é do tipo: '. gettype($valor);

  echo "<p> 8135456 - Davi Marçal </p>";

  ?>
</body>
</html>
