<?php

//<p>8. ��� ������ � ���������� 1, 2, 3, 4, 5, 6, 7, 8, 9. � ������� ����� foreach �������� ������ '�1�2�3�4�5�6�7�8�9�'.
$arr = array (1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $val){
    echo "-" . (string)$val;
 }
echo "<br>";
//or
$value = implode("-",$arr);
echo "-" . $value ."-";