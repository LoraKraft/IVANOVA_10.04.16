<?php
//<p>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а  русские — в массив $ru.
$arr = array('green'=>'zeleniy', 'red'=>'krasniy','blue'=>'goluboy');

foreach ($arr as $key){
    $ru = array_values($arr);
    print_r(array_values($ru));
    echo "<br>"; break;
  }
foreach ($arr as $val){
    $en = array_keys($arr);
    print_r($en); break;
}
