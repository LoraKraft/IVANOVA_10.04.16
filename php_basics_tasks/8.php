<?php
//<p>2. �������� ���������� age � ��������� �� ��������, ���������� ��� �������, �������� 20.</p>
$age = 30;

//<p>8. ��������� ����������� if �� �.5-7, ������ �����: "����������� �������" ��� �������, ��� �������� ���������� age �������� ������������� ������, ��� ����� ������ �� ��������.</p>

if ($age >= 18 && $age <= 59 && is_int($age) === true) {
    echo "Do you still work and work";
} elseif ($age > 59 && is_int($age) === true) {
    echo "It is time you on a pension";
} elseif ($age == 0 || $age <= 17 && is_int($age) === true) {
    echo "You early work";
} elseif ($age < 0 || is_int($age) === false) {
    echo "Unknown age";
} else {
    echo "Go home";
}
