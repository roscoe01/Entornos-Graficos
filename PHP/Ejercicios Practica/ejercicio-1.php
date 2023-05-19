<?php
function doble($i) {
 return $i*2;
}
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
if (is_int($d)) {
    $d += 4;
}
if (is_string($a)) {
    echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
?> 


<!-- Se crea la funcion Doble, la cual toma un valor entero como parametro y lo multiplica por dos. 

Se asignan distintos valores a las variables a, b, c, d.

Se imprimen en pantalla las variables a,b,c,d mediante la función echo la función gettype.

Luego se ejecuta un if donde la condicion es la función "is_int" la cual nos dice si una variable es de tipo entero. De ser verdadera esta condicion, el valor del parametro se incrementa en + 4.

Al finalizar ese if, inicia otro donde la condición a validar es la función "is_string", la cual nos dice si una variable es de tipo string. De ser verdadera esta condicion, se imprime por pantalla la Cadena:"$a". Cosa que podemos ver que no es verdad, ya que la variable a es de tipo Boolean.

Después, hay un operador ternario, el cual pregunta si a es verdadero o falso. De ser verdadera esta condicion, se incrementa d en + 1. De ser falso, se multiplica la variable d por 3. 

En la proxima linea de codigo, vemos que a la variable f se le asigna el valor del resultado de la función doble() que tiene como parametro al incremento de la variable d. Lo que nos dejaria como resultado f = 34

Luego, vemos que a una nueva variable g, se le asigna a g el resultado de la operacion $f += 10, pero a mi parecer es un error de sintaxis y para arreglarlo tendriamos que primero incrementar el valor de la variable f de manera $f += 10; y en otra linea de codigo a g asignarle el valor de f.

Finalmente se imprimen todas las variables por pantalla. -->

