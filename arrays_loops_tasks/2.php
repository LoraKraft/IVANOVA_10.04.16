<?php
//<p>2. ��� ������ � ���������� 1, 20, 15, 17, 24, 35. � ������� ����� foreach ������� ����� ��������� ����� �������.
// �������� �� � ���������� $result.</p>

$arr = array (1, 20, 15, 17, 24, 35);
foreach ($arr as $val) {
 $result = array_sum($arr);
 echo "Amount arrays elements {$result}"; break;
}

