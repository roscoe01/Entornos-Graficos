<!-- c) -->
<?php
if ($i == 0) {
 print "i equals 0";
} elseif ($i == 1) {
 print "i equals 1";
} elseif ($i == 2) {
 print "i equals 2";
}
?>

<?php
switch ($i) {
 case 0:
 print "i equals 0";
 break;
 case 1:
 print "i equals 1";
 break;
 case 2:
 print "i equals 2";
 break;
}
?>

En terminos de resultado se llega a la misma solución, la cual es una salida en pantalla donde dice a que valor corresponde la variable i, solo que en el case a mí parecer me resulta más legible. 