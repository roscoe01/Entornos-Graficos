<?php
$fun = getdate();
echo "Has entrado en esta pagina a las $fun[hours] horas, con $fun[minutes] minutos y $fun[seconds]
segundos, del $fun[mday]/$fun[mon]/$fun[year]";
?>

<!-- Lo que se imprime por pantalla es un texto el cual utiliza numerosas veces la variable $fun, la cual es un array que contiene información sobre la fecha y hora de actual. -->

<?php
function sumar($sumando1,$sumando2){
 $suma=$sumando1+$sumando2;
 echo $sumando1."+".$sumando2."=".$suma;
}
sumar(5,6);
?>

<!-- Lo que imprime en este caso, es una suma de dos numeros. La cual se hace mediante una funcion sumar que toma dos parametros, los suma y luego los imprime. 
Al final del codigo se llama a la funcion con los numeros 5 y 6. -->