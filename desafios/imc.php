<?php
$imc;
$peso = 80;
$altura = 1.74;
$imc = $peso/($altura*$altura);

if ($imc < 18.5) {
    echo "Abaixo do peso ";
}elseif ($imc >= 18.5 and $imc <=24.9) {  
    echo "Peso Normal";
}elseif ($imc == 25 and $imc <=29.9) {  
    echo "Sobrepeso";
}elseif ($imc == 30 and $imc <=34.9) {  
    echo "Obesidade I";
}elseif ($imc == 35 and $imc <=39.9) {  
    echo "Obesidade II";
}elseif ($imc >=40) {  
    echo "Obesidade III OU Morbida";
}else {
    echo "error";
}