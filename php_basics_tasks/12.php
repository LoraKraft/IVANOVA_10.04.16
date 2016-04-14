<?php

//<p>9. Создайте переменную day и присвойте ей произвольное числовое значение.</p>
$day = 8;

//<p>12. С помощью конструкции switch выведите фразу: "Неизвестный день", если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно).</p>

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
