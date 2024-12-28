<?php
$isNumber = $_REQUEST['isNumber'];

is_numeric($isNumber) ? 
print("<p>Se escribió un número: $isNumber</p>") : 
print("<p>NO se escribió un número: $isNumber</p>");