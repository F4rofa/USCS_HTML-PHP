<html>
<body>
  <h1> Cálculo de Combustível da Viagem do Pedro </h1>
  <?php
  $gas_consumption = 12.0;
  $averagespeed = 85.0;
  $time_trip = 10.0;
  $gas_price_per_liter = 4.0;

  $traveled_distance = $averagespeed * $time_trip;
  $consumed_liters = $traveled_distance / $gas_consumption;
  $trip_cost = $consumed_liters * $gas_price_per_liter;

  // Number_format, formata o número com 1 casa decimal
  printf('Consumo de Combustível do veículo: %s Km/l', Number_format($gas_consumption, 1));
  printf('<br>Velocidade média da viagem: %s Km/h', Number_format($averagespeed, 1));
  printf('<br>Tempo da viagem: %s horas', number_format($time_trip, 2));
  printf('<br>Custo do Combustível: R$ %s /litro', number_format($gas_price_per_liter, 2));

  printf('<br><hr></hr>'); // <hr> </hr> Linha gigante ------
  printf('<br>Custo do Combustível na viagem = R$ %s', number_format($trip_cost, 2));
  ?>
