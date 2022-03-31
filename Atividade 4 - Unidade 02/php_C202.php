<html>
<head>
  <title> Uso da função gettype() </title>
</head>
<body>
  <?php
  $i = 10;
  $nome = "Tiago";
  $falso = FALSE;
  $valor = 100.50;

  echo '<br>$i é do tipo: '. gettype($i);
  echo '<br>$nome é do tipo: '. gettype($nome);
  echo '<br>$valor é do tipo: '. gettype($valor);

  echo "<h3> Teste do tipo de Variável usando a função is_integer()</h3>";

  if(is_integer($i))
      echo '$i é inteiro...';
  if(is_string($nome))
      echo '<br>$nome é string...';
  if(is_bool($falso))
      echo '<br>$falso é boolean...';
  if(is_float($valor))
      echo '<br> $valor é float...';
  if(is_numeric($i) and is_numeric($valor))
      echo '<br> &i e &valor são valores numéricos....';
  echo "<p> 8135456 - Davi Marçal </p>";
  ?>
</body>
</html>
