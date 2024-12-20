<!-- Las CONSTANTES son datos que no varian en el desarrollo del programa. Para crear una constante en PHP se utiliza la función "define()" -->
<?
define("EMPRESA","Avanza S.A.");
define("AUTOR", "Mario Vargas Llosa");
echo EMPRESA . "\n";
print(AUTOR) . "\n";

// "defined()" se puede usar para averiguar si alguna constante ya ha sido creada o no
if (defined("AUTOR")) {
    echo "El nombre de la empresa es: ". AUTOR;
} else {
    echo "La constante no se ha creado";
}
?>
Constantes predefinidas: Ya definidas por PHP a la hora de ejecutar un script, y son accesibles para nosotros
EJEM:
* PHP_VERSION: Version del parse PHP en uso.
* PHP_OS: Sistema operativo del servidor PHP
* PEAR_EXTENSION_DIR: Ruta de instalación de PEAR
* PHP_LIBDIR: Ruta donde están almacenadas las librerías PHP 

Otras CONSTANTES que cambian el lugar según el lugar donde se utilicen
* LINE: Indica la línea desde la que imprimimos el valor
* FILE: Ruta completa al fichero
* FUNCTION: Nombre de la función que la contiene
* CLASS: Nombre de la clase
* _METHOD_: Nombre del método 

// echo   LINE .",- VERSIÓN de PHP 5:".PHP_VERSION;