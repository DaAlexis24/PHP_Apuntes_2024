<?php
function getPersonalData($res){
    $tmpMatriz = [];
    if (isset($_REQUEST[$res]) && is_array($_REQUEST[$res])) {
        foreach ($_REQUEST[$res] as $key => $value) {
            $clean_key = trim(htmlspecialchars($key, ENT_QUOTES, "UTF-8"));
            $clean_value = trim(htmlspecialchars($value, ENT_QUOTES, "UTF-8"));
            $tmpMatriz[$clean_key] = $clean_value;
        }
    }
    return $tmpMatriz;
}

$personal_Data = getPersonalData("personalData");

$personal_Data[1] == "" ? print("<p>No escribió su nombre</p>") : print("<p>Su nombre es: $personal_Data[1]</p>");

$personal_Data[2] == "" ? print("<p>No escribió su apellido</p>") : print("<p>Su apellido es: $personal_Data[2]</p>");