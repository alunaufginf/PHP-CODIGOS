<?php

 $numero=0;
 while($numero<=100){
   //echo "<p>$numero</p>";
   //echo "$numero, ";
   echo $numero;
   if($numero != 100){
     echo ", ";
   }
   $numero++;
 }
echo "<hr>";

if(isset($_GET['numero'])){
  $numero = (int)$_GET['numero'];
}else{
  $numero = 1;
}

echo "<h1>Tabla de multiplicar del número $numero</h1>";
$contador=0;
while($contador<=10){
  echo "$numero x $contador = ".($numero*$contador)."<br/>";
  $contador++;
}
echo "<hr>";
$edad=18;
$contador=1;

do{
  echo "tienes acceso al local privado $contador <br/>";
  $contador++;
}while($edad>=18 && $contador<=10);
 ?>
