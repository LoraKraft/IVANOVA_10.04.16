<?php
//<p>2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива.
// Запишите ее в переменную $result.</p>

$arr = array (1, 20, 15, 17, 24, 35);
foreach ($arr as $val) {
 $result = array_sum($arr);
 echo "Amount arrays elements {$result}"; break;
}

