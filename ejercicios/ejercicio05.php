<?php
function sumatoria_a($array) {
    $suma = 0;
    $n = count($array);

    for ($i = 0; $i < $n; $i++) {
        $suma += $array[$i];
    }

    return $suma;
}

function sumatoria_b($array) {
    $suma = 0;

    foreach ($array as $valor) {
        $suma += $valor;
    }

    return $suma;
}

function sumatoria_c($array) {
    $suma = 0;
    $i = 0;
    $n = count($array);

    while ($i < $n) {
        $suma += $array[$i];
        $i++;
    }

    return $suma;
}
?>