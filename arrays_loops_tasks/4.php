<?php
//<p>4. ��� ������ $arr. � ������� ������� ����� foreach �������� �� ����� ������� ������, � ������� ������� � ������� ���������.</p>

$arr = array('green'=>'zeleniy', 'red'=>'krasniy','blue'=>'goluboy');
foreach ($arr as $k => $val) {
    echo "value is {$val} <br>";
      echo "<br>";
}
foreach ($arr as $key => $val) {
    echo "key is " . $key . "<br>";
}