<?
if (isset($_GET["num1"], $_GET["num2"]))
 {
    echo
    "Resultado: " . $_GET["num1"] * $_GET["num2"];
} else{
    echo "No has escrito nada";
}

?>