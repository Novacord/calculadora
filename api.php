<?php

$resultado = eval("return ".$_POST["operaciones"]." ;");
echo $resultado;

echo <<<HTML
    <br> <a href="index.html" target="_blank">Volver</a>
HTML;

// var_dump($_POST["operaciones"]);

?>