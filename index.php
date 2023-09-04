<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Programación Web II</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-semibold text-center mb-4">Ailen Pereira Vilches</h1>
        <h3 class="text-xl font-semibold">Ejercicios</h3>

        <?php
        require_once("ejercicios/ejercicio01.php");
        require_once("ejercicios/ejercicio02.php");
        require_once("ejercicios/ejercicio03.php");
        require_once("ejercicios/ejercicio04.php");
        require_once("ejercicios/ejercicio05.php");
        ?>


        <div class="mt-8">
            <h3 class="text-xl font-semibold text-green-400">Ejercicio 01: Semáforo</h3>
            <p>Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
            “amarillo”,”verde”). <br>Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
            “avance” o “estado desconocido” ante un caso no esperado.</p>
            <h3 class="text-xl font-semibold text-green-500">if else</h3>
            <?php
            $colorA = "rojo";
            $resultadoA = semaforo_a($colorA);
            echo "Ejecuto el ejercicio con el color <span class=\"font-semibold\">$colorA</span>, el resultado es: $resultadoA";
            ?>
        </div>


        <div class="mt-8">
            <h3 class="text-xl font-semibold text-green-500">if inline</h3>
            <?php
            $colorB = "verde";
            $resultadoB = semaforo_b($colorB);
            echo "Ejecuto el ejercicio con el color <span class=\"font-semibold\">$colorB</span>, el resultado es: $resultadoB";
            ?>
        </div>


        <div class="mt-8">
            <h3 class="text-xl font-semibold text-green-500">switch</h3>
            <?php
            $colorC = "amarillo";
            $resultadoC = semaforo_c($colorC);
            echo "Ejecuto el ejercicio con el color <span class=\"font-semibold\">$colorC</span>, el resultado es: $resultadoC <br>";
            ?>
        </div>


        <div class="mt-8">
            <h3 class="text-xl font-semibold text-green-400">Ejercicio 02: Binomio</h3>
            <p>Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
            recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)^2</p>
            <h3 class="text-xl font-semibold text-green-500">Binomio a</h3>
            <p>función binomioCuadradoPerfecto_a(a, b): Resuelva la solución utilizando la función de
            potencia</p>
            <?php
            $a = 3;
            $b = 4;
            $resultadobinomioCuadradoPerfecto_a = binomioCuadradoPerfecto_a($a, $b);
            echo "El cuadrado del binomio ($a + $b) es: $resultadobinomioCuadradoPerfecto_a <br>";
            ?>
        </div>


        <div class="mt-8">
            <h3 class="text-xl font-semibold text-green-500">Binomio b</h3>
            <p>función binomioCuadradoPerfecto_b(a, b): Resuelva la solución utilizando la fórmula
            desarrollada del binomio: a^2 + 2*a*b + b^2</p>
            <?php
            $resultadobinomioCuadradoPerfecto_b = binomioCuadradoPerfecto_b($a, $b);
            echo "El cuadrado del binomio ($a + $b) es: $resultadobinomioCuadradoPerfecto_b <br>";
            ?>
        </div>

        <div class="mt-8">
            <h3 class="text-xl font-semibold text-green-500">Binomio b</h3>
            <p>función binomioCuadradoPerfecto_b(a, b): Resuelva la solución utilizando la fórmula
            desarrollada del binomio: a^2 + 2*a*b + b^2</p>
            <?php
            $resultadobinomioCuadradoPerfecto_b = binomioCuadradoPerfecto_b($a, $b);
            echo "El cuadrado del binomio ($a + $b) es: $resultadobinomioCuadradoPerfecto_b <br>";
            ?>
        </div>

        <div class="mt-8">
            <h3 class="text-xl font-semibold text-green-400">Ejercicio 03: Concatenar textos</h3>
            <p>Cree una función concatenar($texto1, $texto2) que reciba dos textos como parámetro y devuelva
            ambos textos concatenados como uno solo.
            </p>
            <?php
            
            ?>
        </div>

        <div class="mt-8">
            <h3 class="text-xl font-semibold text-green-400">Ejercicio 04: Incrementar</h3>
            <p>Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
            la función, el valor del parámetro haya sido incrementado en 1
            </p>
            <?php
            
            ?>
        </div>

        <div class="mt-8">
            <h3 class="text-xl font-semibold text-green-400">Ejercicio 05: Sumatoria</h3>
            <p>Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
            valores.</p>
            <p><span class="font-semibold">$vector = [1, 2, 3, 4, 5];</span></p>

            <h3 class="text-xl font-semibold text-green-500">Sumatoria a</h3>
            <p> función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for</p>
            <?php
            $vector = [1, 2, 3, 4, 5];
            $resultadoSumatoria_a = sumatoria_a($vector);
            echo "La suma de los valores del vector es: $resultadoSumatoria_a";
            ?>
            <h3 class="text-xl font-semibold text-green-500">Sumatoria b</h3>
            <p>función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each</p>
            <?php
            $resultadoSumatoria_b = sumatoria_b($vector);
            echo "La suma de los valores del vector es: $resultadoSumatoria_b";
            ?>
            <br>
            <h3 class="text-xl font-semibold text-green-500">Sumatoria c</h3>
            <p>función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while</p>
            <?php
            $resultadoSumatoria_c = sumatoria_c($vector);
            echo "La suma de los valores del vector es: $resultadoSumatoria_c";
            ?>
        </div>

    </div>
</body>
</html>


