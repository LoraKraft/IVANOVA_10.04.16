<?php

//<p>2. �������� ���������� age � ��������� �� ��������, ���������� ��� �������, �������� 20.</p>
$age = 60;
//��������� ����������� if �� �.5, ������ �����: "��� ���� �� ������" ��� �������, ��� �������� ���������� age ������ 59.</p>
if ($age > 18 && $age <= 59) {
    echo "Do you still work and work";
} elseif ($age > 59){
    echo "It is time you on a pension";
}else {
    echo "Go home";
}