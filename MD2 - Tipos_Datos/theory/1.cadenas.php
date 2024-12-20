<? 
print("<p>Esto es una comilla doble </p>\n");

#Diferencia en el uso de las comillas simples y dobles
$cad = "Joaquín ama a Allison";
print("La cadena tiene este valor: $cad\n"); #La cadena tiene este valor: Joaquín ama a Allison
print('La cadena tiene esta valor: $cad'."\n"); #La cadena tiene esta valor: $cad
// -- Con las comillas dobles se coje el valor de la variable cad y se imprime en consola, eso no pasa con las comillas simples
print("- Esto esta en\n2 líneas\n");
print('- Esto esta en\n2 líneas'."\n");
// -- También las comillas simples no soportan ciertos caracteres especiales, como "\n"
print_r("<p><strong style='color: red;'>HOLA</strong></p>\n");
print("Las cadenas se delimitan con comillas (\" o ')\n");
print("<ul>
    <li>Uno</li>
    <li>Dos</li>
</ul>\n");
$cad2 = "Vito es";
echo $cad2 ."\n";
// .= permite añadir información a una variable, para así modificar su información
$cad2 .= " un chupapija";
echo $cad2 ."\n";