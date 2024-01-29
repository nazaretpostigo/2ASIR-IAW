<?
    session_start();

if (isset($_SESSION["visitas"])) {
    $_SESSION["visitas"]++;
} else {
    $_SESSION["visitas"] = 1;
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>

<body>

<h1>
    <?
    echo "Visita número: " . $_SESSION['visitas'];
    ?> 
</h1>

</body>

</html>

<!-- Escriba un programa que conste de dos páginas y que solicite un nombre.
        En la primera página se solicita el nombre.
        La segunda página comprueba si se ha escrito algo de texto.
            Si se ha escrito algo de texto, lo muestra.
            Si no se ha escrito ningún texto, vuelve automáticamente a la primera página. --> 



