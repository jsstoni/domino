<?php
$piezas = array(
	0 => array(0, 0),
	array(1, 1),
	array(2, 3),
	array(3, 6),
	array(0, 1),
	array(1, 2),
	array(2, 4),
	array(4, 4),
	array(0, 2),
	array(1, 3),
	array(2, 5),
	array(4, 5),
	array(0, 3),
	array(1, 4),
	array(2, 6),
	array(4, 6),
	array(0, 4),
	array(1, 5),
	array(3, 3),
	array(5, 5),
	array(0, 5),
	array(1, 6),
	array(3, 4),
	array(5, 6),
	array(0, 6),
	array(2, 2),
	array(3, 5),
	array(6, 6)
);

$repartidas = array();

$jugadores = array(
	array(),
	array(),
	array(),
	array()
);

for ($jugador=0; $jugador < 4; $jugador++) {
	for ($cartas=0; $cartas < 7; $cartas++) {
		$randoPieza = array_rand($piezas);
		$repartidas[$randoPieza] = $piezas[$randoPieza];
		unset($piezas[$randoPieza]);
		array_push($jugadores[$jugador], $randoPieza);
	}
}

foreach ($jugadores as $key => $cartas) {
	echo "Jugador ".($key+1)."<br>";
	for ($i=0; $i < count($cartas); $i++) {
		echo $repartidas[$cartas[$i]][0]." . ".$repartidas[$cartas[$i]][1]."<br>";
	}
}

echo "<pre>";
echo "</pre>";