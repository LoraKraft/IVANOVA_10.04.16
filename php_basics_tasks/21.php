<?php

//<p>21. ��������� ����� 0 � ���� boolean. ��������� ���������.</p>
$a = 0;
$b = (boolean) $a;

if (is_bool($b) === true) {
    echo "Yes, it's boolean <br>";
    var_dump($b);
} else echo "No, it isn't boolean";

