<?php
function getData($var) {
    $tmp = (isset(($_REQUEST[$var]))) ? 
            htmlspecialchars(trim(strip_tags($_REQUEST[$var])), ENT_QUOTES, "UTF-8") :"";
    return $tmp;
}

$fruta = getData("fruta");

$fruta = "" ? print("<p>No se ingresaron datos</p>") : print("<p>Te gusta la $fruta</p>");