<?php
/* utilizar las sentencia de flujo if y else en su metodo alternativo
utilizar constantes, variables, operadores aritmeticos, logicos y de relación
El ejercicio: Calcular la edad con años, meses, dias, horas utilizando un año de nacimiento e indicando si es mayor o menor de edad imprimiendo los datos como años, mese, dias, horas
*/
define('Tope', 2023);
define('Meses', 12);
define('Dias', 365);
define('Horas', 24);
$Nacimiento = "2007";
$Mayoria = 18;
$Edad = Tope - $Nacimiento;
$Meses = $Edad * Meses;
$Dias = $Edad * Dias;
$Horas = Dias * Horas * $Edad;
if(is_numeric($Nacimiento) && is_numeric($Mayoria) && is_numeric($Edad) && is_numeric ($Meses) && is_numeric($Dias) && is_numeric($Horas)):
    if($Edad >= $Mayoria):
    echo "Eres Mayor de edad por que ";
    echo "Tienes: ".$Edad." Años de vida</br>";
    echo "Son: ".$Meses." Meses de vida</br>";
    echo "Son: ".$Dias." Dias de Vida</br>";
    echo "Son: ".$Horas." Horas de vida</br>";
 else:
    echo "Eres Menor de edad por que ";
    echo "Tienes: ".$Edad." Años de vida</br>";
    echo "Son: ".$Meses." Meses de vida</br>";
    echo "Son: ".$Dias." Dias de Vida</br>";
    echo "Son: ".$Horas." Horas de vida</br>";
    endif;
    else:
    echo "¿Alguno de los valores asignados en las variables son son valores numericos?";
    endif;
    ?>