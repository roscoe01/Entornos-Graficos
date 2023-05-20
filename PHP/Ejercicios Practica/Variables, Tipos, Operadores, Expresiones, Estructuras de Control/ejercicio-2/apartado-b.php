
<!-- b) -->

<?php
for ($i = 1; $i <= 10; $i++) {
 print $i;
}
?>

<?php
for ($i = 1; $i <= 10; print $i, $i++) ;
?>

<?php
for ($i = 1; ;$i++) {
 if ($i > 10) {
 break;
 }
 print $i;
}
?>

<?php
$i = 1;
for (;;) {
 if ($i > 10) {
 break;
 }
 print $i;
 $i++;
}
?> 

<!-- Los 4 codigos son equivalentes en terminos de salida por pantalla, pero todos utilizan el bucle for de distintas maneras, algunas más y otras menos óptima.  -->