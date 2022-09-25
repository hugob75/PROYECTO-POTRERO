<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tp2_backend.php</title>

  </head>
  <body>
    <h1>Numero 1</h1>
    <?php
$n = 8;
if ($n > 0){
  echo "$n es un numero positivo";
}
else {
  echo "$n no es un numero positivo";
}
     ?>
     <br>
     <h1>Número 2</h1>
     <?php
$var = 5;
if ($var>1 && $var<10){
  echo "$var es mayor a 1 y menor a 10";
}
  ?>
  <br>
  <h1>Numero 3</h1>
  <?php
  $n1 = 1;
  if ($n1<2){
    echo "$n1 es menor a 2";
  }
  else {
    echo "$n1 no es menor a 2";
  }
    if ($n1>10){
      echo "$n1 es mayor a 10";
    }
    else{
      echo "$n1 no es mayor a 10";
    }
?>
<br>
<h1>Numero 4</h1>

<?php
$numero1 = 6;
$numero2 = 4;
if ($numero1 > $numero2) {
  echo "$numero1 + $numero2";
  echo "$numero1 - $numero2";
  }
if ($numero2 > $numero1) {
  echo "$numero2*$numero1";
  echo "$numero2/$numero1";
}
if ($numero1 == $numero2) {
  echo "Los números ingresados son iguales";
}

 ?>


  </body>
</html>
