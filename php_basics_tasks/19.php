<?php

//<p>19. �������� ��������� ��������� $a � $b �� �.17 � ������� var_dump.</p>

$c = array ('78', 78);
if ($c[0] !== $c[1]) {
    echo "not equal";
} elseif ($c[0] === $c[1]) {
    echo "equal";
}
echo "<br>";
var_dump ($c);



