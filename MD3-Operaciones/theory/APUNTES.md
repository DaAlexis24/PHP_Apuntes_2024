# OPERACIONES

## OPERACIONES VARIABLES

### Operadores Aritméticos

| Ejemplo        |     Nombre     |
| -------------- | :------------: |
| **_-$a_**      |    Negativo    |
| **_$a + $b_**  |      Suma      |
| **_$a - $b_**  |     Resta      |
| **_$a \* $b_** | Multiplicación |
| **_$a / $b_**  |    División    |
| **_$a % $b_**! |     Módulo     |

> [!WARNING]
>
> A la hora de operar un módulo, _$b_ se convertirá a un entero sí o sí. Por ejemplo: El resultado de **"5 % 2.5"** será **1**, no **0**. Aparece esto en el debug: `Deprecated: Implicit conversion from float 2.5 to int loses precision`

- Uso de la función **fmod** para calcular el módulo con números decimales:

  ```php
    $mod = fmod(5,2.5);
    echo $mod; // 0
    $mod_dec = fmod(17, 3.1);
    echo $mod_dec; // 1.5
  ```

> [!NOTE]
>
> Los números enteros no pueden ser muy grandes, según el SO, PHP lo convertirá en un float automáticamente y perderá la precisión. Para **evitar** esto, es necesario utilizar las funciones **bcmath**.

### Operadores de incremento y decremento

| Ejemplo    |     Nombre      |                   Efecto                   |
| ---------- | :-------------: | :----------------------------------------: |
| **_++$a_** | Pre-incremento  | Incrementa _$a_ en uno y luego lo devuelve |
| **_$a++_** | Post-incremento |  Devuelve _$a_ y luego lo incrementa en 1  |
| **_--$a_** | Pre-decremento  |   Reduce _$a_ en uno y luego lo devuelve   |
| **_$a--_** | Post-decremento |    Devuelve _$a_ y luego lo reduce en 1    |

Estos operadores de _INCREMENTO_ funcionan tanto con números como con caracteres.

- Post Incremento con NÚMEROS

  ```PHP
  $valor = 9;
  echo $valor++ . "\n"; // Res: 9
  echo $valor;          // Res: 10
  ```

- Pre Incremento con CARACTERES:

  ```PHP
  $valor = 'aa';
  echo $valor . "\n"; // Res: aa
  echo ++$valor ;     // Res: ab
  ```

- Pre Incremento con una expresión ALFANUMÉRICA:

  ```PHP
  $valor = 'a9z';
  echo $valor . "\n"; // Res: a9z
  echo ++$valor ;     // Res: b0a
  ```

  > [!IMPORTANT]
  >
  > Los operadores de incremento y decrementos tienen prioridad a la hora de ejecutar operadores aritméticos. Por ejemplo, en la operación: `--$a * $b + $c` lo que hará primero sera **DISMINUIR** el valor de $a antes de efectuar la multiplicación con $b y la suma con $c en ese orden. Para ello puedes utilizar los **()** para construir los bloques lógicos.

### Operadores de asignación

Sirven para **simplificar** las expresiones.

| Ejemplo         |     Nombre     |  Equivale a   |
| --------------- | :------------: | :-----------: |
| **_$a += $b_**  |      Suma      | $a = $a + $b  |
| **_$a -= $b_**  |     Resta      | $a = $a - $b  |
| **_$a \*= $b_** | Multiplicación | $a = $a \* $b |
| **_$a /= $b_**  |    División    | $a = $a / $b  |
| **_$a &= $b_**  |     Módulo     | $a = $a & $b  |

### Funciones aritméticas

#### Redondear un número

- **round(x)**: Redondea X al entero más próximo

  ```PHP
    $num1 = 2.6;
    $num2 = 2.2;
    $num3 = - 2.6;
    $num4 = - 2.2;
    echo "Si redondeamos $num1 nos da: ".round($num1) . "\n";
    echo "Si redondeamos $num2 nos da: ".round($num2) . "\n";
    echo "Si redondeamos $num3 nos da: ".round($num3) . "\n";
    echo "Si redondeamos $num4 nos da: ".round($num4) . "\n";
  ```

  También lo podemos utilizar para obtener si un número es entero o no si es que lo utilizamos en un _IF_ comparándolo con el propio número en cuestión.

  - round(x,n): Redondea el número a decimales, centésimas, etc. Esto depende del valor _n_ que le otorgues. Además, puede añadir ceros si es que utilizas un _n_ negativo.

    ```php
    $num = 2.64567;
    $n = 2;
    echo "Si redondeamos $num a $n decimales, nos da: " . round($num,$n) . "\n"; // 2.65
    $num = 246;
    $n = -2;
    echo "Si redondeamos $num a $n centenas, nos da: " . round($num,$n) . "\n"; // 200
    ```

- **floor(x)**: Trunca el entero.

  ```php
    $num1 = 2.6;
    $num2 = 2.2;
    $num3 = - 2.6;
    $num4 = - 2.2;
    echo "Si truncamos $num1 nos da: ".floor($num1) . "\n"; //2
    echo "Si truncamos $num2 nos da: ".floor($num2) . "\n"; //2
    echo "Si truncamos $num3 nos da: ".floor($num3) . "\n"; //-3
    echo "Si truncamos $num4 nos da: ".floor($num4) . "\n"; //-3
  ```

- **ceil(x)**: Redondea el entero al _inmediato_ superior.

  ```php
  $num1 = 2.6;
  $num2 = 2.2;
  $num3 = - 2.6;
  $num4 = - 2.2;
  echo "Si usamos ceil en $num1 nos da: ".ceil($num1) . "\n"; //3
  echo "Si usamos ceil en $num2 nos da: ".ceil($num2) . "\n"; //3
  echo "Si usamos ceil en $num3 nos da: ".ceil($num3) . "\n"; //-2
  echo "Si usamos ceil en $num4 nos da: ".ceil($num4) . "\n"; //-2
  ```

#### Potencias

- **pow(x,y)**: Realiza una potencia, elevando _x_ a _y_.

  ```php
    $x = 3;
    $y = 5;
    echo "Si elevamos $x a la $y nos da: " . pow($x,$y); // 243
  ```

#### Formatear un número

- **number_format(num, dec, $sep_dec, $sep_millar)**: Sirve para darle un formato al número otorgado, lo redondea o trunca según su longitud y le otorga un formato a la hora de separar decimales o unidades de millar (_recuerda que por defecto los decimales se separan con el punto(.)_)

  ```PHP
  $num = 12345678901.234;
  $dec = 2;
  $sep_dec = ',';
  $sep_udMil = ".";
  echo "Vamos a formatear $num con las siguientes parámetros, esto nos da: ".number_format($num, $dec, $sep_dec, $sep_udMil);
  // Vamos a formatear 12345678901.234 con las siguientes parámetros, esto nos da: 12.345.678.901,23
  ```

#### Números aleatorios

- **rand(lower,higher) or mt_rand(lower, higher)**: Son las funciones predeterminadas para obtener un número random entre 2 valores, en teoría _mt_rand()_ es más rápido.

  > [!NOTE]
  >
  > Los números que brindan estas funciones no son criptográficamente seguros, para solucionar eso se agrego la función **random_int()** en PHP 7.0.

  ```PHP
  $low= 1;
  $high = 10;
  echo "Número aleatorio entre $low y $high: ".rand($low, $high) . "\n";
  echo "Número aleatorio entre $low y $high: ".mt_rand($low, $high) . "\n";
  echo "Número aleatorio entre $low y $high: ".random_int($low, $high) . "\n";
  // Número aleatorio entre 1 y 10: 7
  // Número aleatorio entre 1 y 10: 3
  // Número aleatorio entre 1 y 10: 7
  ```
