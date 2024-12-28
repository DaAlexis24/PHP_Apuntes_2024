<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>\n";
// echo "<p>El nombre es".strip_tags($_REQUEST['nombre'])."</p>\n";

trim($_REQUEST["nombre"]) == "" ?
print("<p>No se ha recibido ningún dato</p>") :
print("<p>El nombre es ". trim($_REQUEST['nombre'])."</p>\n") ;