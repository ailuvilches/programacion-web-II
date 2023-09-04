<?php
function binomioCuadradoPerfecto_a($a, $b) {
    $resultado = pow(($a + $b), 2);
    return $resultado;
}

function binomioCuadradoPerfecto_b($a, $b) {
    $resultado = $a ** 2 + 2 * $a * $b + $b ** 2;
    return $resultado;
}
?>