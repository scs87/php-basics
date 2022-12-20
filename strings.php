<?php
#PRINT TEXT STRING
print "print a text string<br>";
#PRINT TEXT STRING THAT INT VARIABLES
$a = "print a text string";
print $a."&nbsptwo"; #se concatena con . o con coma
                    #&nbsp "Metodo html para dar espacios al contenido"

echo "<br><br>";                    
#REPLACE SENSITIVE


$city = "A mi me gusta Barcelona";
print_r(str_replace("Barcelona", "Paris", $city));

echo "<br><br>";  
#NO SENSITIVE ( PUEDES CAMBIAR SIN QUE SEAN IDENTICOS)
$city = "A mi me gusta Madrid";
print_r(str_ireplace("maDriD", "Paris", $city));
echo "<br><br>";  
#REPEAT

$king = "mamodo rules is a king";
echo str_ireplace("mamodo RULES", "Zatch", $king);
echo "<br><br>";  
$dance = "LuL";
echo str_repeat($dance, 10); 
echo "<br><br>";  

#LENGTH TEXT SCREEN
$textstring = "a b c d e f uno dos tres cuatro y cinco";
echo strlen($textstring);

#Posicion de una palabra
echo strpos("Me encanta el php","php");

#Poner en mayuscula
echo strtoupper("me encanta php(mayuscula)");

echo "<br><br>";

#Poner en minuscula
echo strtolower("ME ENCANTA PHP(MINUSCULA)");

echo "<br><br>";

#Quitar y poner letras en una frase
$hola = "Hola mi nombre es Victor";
echo substr($hola, 6, -1);


?>