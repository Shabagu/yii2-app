<?php

function addBr($amount) {
    for ($i = 1; $i <= $amount; $i++) {
        echo '<br>';
    }
}

function debugPrint($arr) {
    echo '<pre class="debug-print">' . print_r($arr, true) . '</pre>';
}
