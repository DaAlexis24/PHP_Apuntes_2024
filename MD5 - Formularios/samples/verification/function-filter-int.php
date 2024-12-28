<?php
$numero = $_REQUEST['int'];

filter_var($numero, FILTER_VALIDATE_INT) ? 
print ("<p>El número $numero es un entero</p>") :
print ("<p>El dato $numero NO ES un entero</p>");