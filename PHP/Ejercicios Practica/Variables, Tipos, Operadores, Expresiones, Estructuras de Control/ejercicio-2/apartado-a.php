<!-- a)

<?php
$i = 1;
while ($i <= 10) {
 print $i++;
}
?>

<?php
$i = 1;
while ($i <= 10):
 print $i;
 $i++;
endwhile;
?>

<?php
$i = 0;
do {
 print ++$i;
} while ($i<10);
?>

<!-- Si, los 3 códigos son equivalentes en terminos de salida por pantalla. -->










