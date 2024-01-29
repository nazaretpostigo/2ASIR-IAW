<?
if (isset($_GET["dolares"]) && is_numeric($_GET["dolares"]))
 {
    echo "Transformación de $ a €: " . $_GET["dolares"] / 1.09 ;
} else{
    echo "No has escrito nada";
}

?>