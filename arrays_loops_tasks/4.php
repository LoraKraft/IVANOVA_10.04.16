<?php
//<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.</p>

$arr = array('green'=>'zeleniy', 'red'=>'krasniy','blue'=>'goluboy');
foreach ($arr as $k => $val) {
    echo "value is {$val} <br>";
      echo "<br>";
}
foreach ($arr as $key => $val) {
    echo "key is " . $key . "<br>";
}