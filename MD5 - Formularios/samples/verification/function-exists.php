<?php
$numero = $_REQUEST['number'];

if (function_exists('filter_var')) {
    if (filter_var($numero, FILTER_VALIDATE_INT)) {
        print ("<p>El número $numero es un entero</p>");
    } else {
        print ("<p>El dato NO ES un ENTERO</p>");
    }
}else{
    print ("<p>La función filter_var NO EXISTE</p>");
}