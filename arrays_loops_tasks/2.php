<?php
//<p>2. ��� ������ � ���������� 1, 20, 15, 17, 24, 35. � ������� ����� foreach ������� ����� ��������� ����� �������.
// �������� �� � ���������� $result.</p>
$result = 0;
$arr = array (1, 20, 15, 17, 24, 35);
foreach ($arr as $val) {
 $result += $val;
}
echo "Amount arrays elements {$result}";
