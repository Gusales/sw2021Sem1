<!DOCTYPE html>
<html>
<head>
	<title>Atividade 3</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Par ou impar?</h1>
	<h3>Mostraremos através de um loop <i>for</i> alguns números randômicos e veremos se eles são impares ou pares</h3>
	<form action="#" method="post">
		<input type="text" name="va1" placeholder="Digite um valor inicial">
		<input type="text" name="va2" placeholder="Digite um valor final">
		<input type="submit" name="inicio">
	</form>
<?php
echo '<pre>';
$entrada = $_POST;


$ini = $entrada["va1"];
$fim = $entrada["va2"];
$val = array();
for ($i = $ini; $i < $fim; $i++) { 
	$val[] = rand();
}
var_dump($val);

function testepar($val){
	if ($val % 2 == 0) {
		$retorno = true;
	}
	else{
		$retorno = false;
	}
	return $retorno;
}

foreach ($val as $key => $value) {
	echo "O número $value:";
	if (testepar($value)) {
		echo " É par";
	}
	else{
		echo " É impar";
	}
	echo '<br>';
}
?>

</body>
</html>