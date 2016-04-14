<?php

//<p>2. Создайте переменную age и присвойте ей значение, содержащее ваш возраст, например 20.</p>
$age = 60;
//Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии, что значение переменной age больше 59.</p>
if ($age > 18 && $age <= 59) {
    echo "Do you still work and work";
} elseif ($age > 59){
    echo "It is time you on a pension";
}else {
    echo "Go home";
}