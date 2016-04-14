<?php
//<p>2. Создайте переменную age и присвойте ей значение, содержащее ваш возраст, например 20.</p>
$age = 0;

//<p>7. Расширьте конструкцию if из п.5-6, выводя фразу: "Вам еще рано работать" при условии, что значение переменной age попадает в диапазон чисел от 0 до 17 (включительно).</p>
if ($age >= 18 && $age <= 59) {
    echo "Do you still work and work";
} elseif ($age > 59) {
    echo "It is time you on a pension";
} elseif ($age == 0 || $age >= 17) {
    echo "You early work";
} else {
    echo "Go home";
}