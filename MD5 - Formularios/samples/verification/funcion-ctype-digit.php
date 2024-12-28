<?php
$isDigit = $_REQUEST['digit'];
ctype_digit($isDigit) ? 
print("<p>Ha escrito un número positivo: $isDigit</p>") :
print("<p>NO ha escrito un número positivo: $isDigit</p>");