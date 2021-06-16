<!DOCTYPE html>
<html>
<head>
	<title>Equação segundo grau</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Equação de segundo grau interativo com o usuário</h1>
	<!--<a href="index.php">Teste link a</a>-->
	<form action="#" method="post">
		<input type="text" name="A" placeholder="Digite o valor de A">
		<input type="text" name="B" placeholder="Digite o valor de B">
		<input type="text" name="C" placeholder="Digite o valor de C">
		<input type="submit" value="calcular">
	</form> 
	<?php 
echo '<pre>';
$entrada = $_POST;
function delta($num1, $num2, $num3){

	$calcdelta = $num2 * $num2 - 4 * $num1 * $num3;
	return $calcdelta;
}
 $delta = delta($entrada["A"], $entrada["B"], $entrada["C"]);
var_dump($delta);
if ($delta > 0) {
$raizdelta = sqrt($delta);

function x1($num4, $num5, $num6){
	$calcx1 = (-$num4) + $num5 / 2 * $num6;
	return $calcx1;
}
function x2($num7, $num8, $num9){
	$calcx2 = (-$num7) - $num8 / 2 * $num9;
	return $calcx2;
}

$resultados = array();
$resultados["x1"] = x1($entrada["B"], $raizdelta, $entrada["A"]);
$resultados["x2"] = x2($entrada["B"], $raizdelta, $entrada["A"]);

var_dump($resultados);
}
elseif ($delta == 0) {
	$raizdelta = sqrt($delta);
function x($num4, $num5, $num6){
	$calcx = (-$num4) + $num5 / 2 * $num6;
	return $calcx;
}
$x = x(-$entrada["B"], $raizdelta, $entrada["A"]);
var_dump($x);
}
else{
	echo "O resultado de Delta é um número negativo, não existe número negativo, então não existe resultado para essa equação";
}
?>

</body>
</html>
