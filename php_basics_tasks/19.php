<?php

//<p>19. Выведите результат сравнения $a и $b из п.17 с помощью var_dump.</p>

$c = array ('78', 78);
if ($c[0] !== $c[1]) {
    echo "not equal";
} elseif ($c[0] === $c[1]) {
    echo "equal";
}
echo "<br>";
var_dump ($c);



