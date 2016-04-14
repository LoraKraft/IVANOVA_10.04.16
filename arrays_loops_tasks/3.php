<?php
//<p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива.
// Результат запишите переменную $result.</p>

$result = 0;
$arr2 = array();
$arr = array (26, 17, 136, 12, 79, 15);
foreach ($arr as $val) {
    $square = pow ($val, 2);
    $result += $square;
}
$arr2[] = $square;

echo "Amount arrays elements {$result}";