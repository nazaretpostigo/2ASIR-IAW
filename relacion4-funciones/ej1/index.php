<?
 //CAPICUA
function esCapicua($numero){
    $numeroInvertido = strrev((string)$numero);
    return (int)$numeroInvertido === $numero;
}


 //PRIMO

 function esPrimo($numero){
    if ($numero < 2){
        return false;
    }
    for ($i = 2; $i <= $numero; $i++){
        if ($numero % $i ===0){
            return false;
        }
    }
    return true;
}
 
 ?>