<?php
//<p>3. ��� ������ � ���������� 26, 17, 136, 12, 79, 15. � ������� ����� foreach ������� ����� ��������� ��������� ����� �������.
// ��������� �������� ���������� $result.</p>

$result = 0;
$arr2 = array();
$arr = array (26, 17, 136, 12, 79, 15);
foreach ($arr as $val) {
    $square = pow ($val, 2);
    $result += $square;
}
$arr2[] = $square;

echo "Amount arrays elements {$result}";