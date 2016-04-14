<?php

//<p>21. Приведите число 0 к типу boolean. Объясните результат.</p>
$a = 0;
$b = (boolean) $a;

if (is_bool($b) === true) {
    echo "Yes, it's boolean <br>";
    var_dump($b);
} else echo "No, it isn't boolean";

