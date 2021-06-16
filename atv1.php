 <?php
//Delta igual b ao quadrado menos 4 vezes a vezes b
// X é igual a -b, mais ou menos a raiz de Delta sobre 2 vezes A


// ********************* Variáveis *********************
$Ax1 = 3;
echo "<br>";
echo "Valor de A é igual a $Ax1";
//var_dump($Ax1);

$Bx = 4;
echo "<br>";
echo "Valor de B é igual a $Bx";
//var_dump($Bx);

$Cx = 1;
echo "<br>";
echo "Valor de C é igual a $Cx";
//var_dump($Cx);

// ********************* Calculo de Delta *********************

$delta = ($Bx ** 2) - 4*($Ax1 * $Cx);
echo "<br>";
echo "<br>";
echo "Delta é igual a $delta <br>";
echo "<br>";

$raiz = sqrt($delta);
//var_dump($raiz);
//var_dump($delta);


// ********************* Calculo de X1 *********************

$x1 = (-$Bx + $raiz) / ( 2 * $Ax1);
//echo "<br>";
//var_dump($x1);

// ********************* Calculo de X2 *********************
 $x2 = (-$Bx - $raiz) / (2 * $Ax1);
 //echo "<br>";
 //var_dump($x2);
 echo "A resposta da equação é: <br>";
 echo "x1 = $x1 <br>";
 echo "x2 = $x2 <br>"; 
?>