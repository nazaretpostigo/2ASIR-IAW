<?
if (isset($_GET["euros"]) && is_numeric($_GET["euros"]))
 {
    echo "Transformación de € a $: " . $_GET["euros"] * 1.09 ;
} else{
    echo "No has escrito nada";
}

?>