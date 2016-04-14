<?php
//<p>20. Приведите число 20 к типу boolean. Объясните результат.</p>

$a = 20;
$b = (boolean) $a;

if (is_bool($b) === true) {
    echo "Yes, it's boolean <br>";
     var_dump($b);
}else echo "No, it isn't boolean";

