<?php
//<p>6. ��� ������ $arr. � ������� ����� foreach �������� ���������� �������� � ������ $en, �  ������� � � ������ $ru.
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
