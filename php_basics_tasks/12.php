<?php

//<p>9. �������� ���������� day � ��������� �� ������������ �������� ��������.</p>
$day = 8;

//<p>12. � ������� ����������� switch �������� �����: "����������� ����", ���� �������� ���������� day �� �������� � �������� ����� �� 1 �� 7 (������������).</p>

switch ($day){
    case 1: echo "It is workday"; break;
    case 2: echo "It is workday"; break;
    case 3: echo "It is workday"; break;
    case 4: echo "It is workday"; break;
    case 5: echo "It is workday"; break;
    case 6: echo "It is weekday"; break;
    case 7: echo "It is weekday"; break;
    default: echo "Unknown day";

}
