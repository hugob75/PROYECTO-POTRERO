<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tp1_backend.php</title>
  </head>
  <body>

    <?php
    $nombre = "Hola Mundo";
    echo $nombre;
?>
<br>
<hr>
<?php
    $n1 = "HOLA";
    $n2 = "MUNDO";
    echo $n1;
    echo $n2;

    ?>
    <br>
    <hr>
      <?php
    $v1 = 8;
    $v2 = 4;
    $suma = $v1 + $v2;
    echo $suma;
    ?>
    <br>
    <hr>
    <?php
      $resta = $v1 - $v2;
    echo $resta;
    ?>
    <br>
    <hr>
    <?php
    $multiplicacion = $v1 * $v2;
    echo $multiplicacion;
    ?>
    <br>
    <hr>
    <?php
    $division = $v1 / $v2;
    echo $division;
    ?>
    <br>
    <hr>
    <h2>Paso 20°C a F°</h2>

    <?php
    $gcelsius = 20;
    $gfarenheit =  32;
     echo $gcelsius*1.8 + $gfarenheit;
 ?>
<br>
<h2>Perimetro de un rectangulo de base 18cm y altura 12</h2>

<?php
$h1 = 12;
$b1 = 18;
echo $h1*2 + $b1*2;
?>
<br>
<h2>Area de un rectangulo de base 18cm y altura 12</h2>

<?php
$h1 = 12;
$b1 = 18;
echo $h1 * $b1;
?>
<br>
<h2>Perimetro de un Circulo de 30 cm de radio</h2>
<?php
$pi = 3.14;
$rad = 30;
echo $pi * 2 * $rad;
 ?>
 <br>
 <h2>Area de un Circulo de 30 cm de radio</h2>
 <?php
 $pi = 3.14;
 $rad = 30;
 $rad2 = $rad*$rad;
 echo $pi * $rad2 ;
  ?>






















  </body>
</html>
