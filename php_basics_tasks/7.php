<?php
//<p>2. �������� ���������� age � ��������� �� ��������, ���������� ��� �������, �������� 20.</p>
$age = 0;

//<p>7. ��������� ����������� if �� �.5-6, ������ �����: "��� ��� ���� ��������" ��� �������, ��� �������� ���������� age �������� � �������� ����� �� 0 �� 17 (������������).</p>
if ($age >= 18 && $age <= 59) {
    echo "Do you still work and work";
} elseif ($age > 59) {
    echo "It is time you on a pension";
} elseif ($age == 0 || $age >= 17) {
    echo "You early work";
} else {
    echo "Go home";
}