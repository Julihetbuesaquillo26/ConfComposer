<?php
namespace text;
class  format {
    public static function uppertext($value){
        return strtoupper($value);
    }
    public static function lowertext($value){
    return strtolower($value);
    }
    public static function matecalc($value){
        if ($value %2 == 0){
            return 'par';
        }else{
            return 'impar';
        }
    }
    public static function numcalcular($value){
        if ($value %3==0){
            return' Multiplo de 3';
        }else{
            return ' no es multiplo de 3';
        }
    }
}
?>

