<?php

$resultado=0;
for($i=0;$i<=100;$i++){
  $resultado=$resultado+$i;

}
echo "<h1> el resultado es $resultado</h1>";

//ejemplo tabla multiplicar

if(isset($_GET['numero'])){
  $numero = (int)$_GET['numero'];
}else{
  $numero=1;
}
echo "<h1>Tabla de multiplicar del numero $numero</h1>";

for($contador=1; $contador<=10; $contador++){
  echo "$numero x $contador= ".($numero*$contador)."<br/>";
}
?>
