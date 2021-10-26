<?php
if (!function_exists('upper')){
    function upper ($value){
        return text\Format:: uppertext($value);
    }
}

if (!function_exists('lower')){
    function lower($value){
    return text\Format:: lowertext($value);
    }
}


if (!function_exists('calc')){
   function calc($value){
    return text\Format:: matecalc($value);
   }
}
if(!function_exists('calcular')){
    function calcular($value){
        return text\Format:: numcalcular($value);
    }
}
?>