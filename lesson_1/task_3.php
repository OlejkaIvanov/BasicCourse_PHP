<?php

$a = 5;
$b = '05';
var_dump($a == $b);         // Почему true?// Потому что сравнение происходит с преобразованием типов(строка из переменной $b перобразуется в число)
var_dump((int)'012345');     // Почему 12345?// Используется приведение строки к целому числу
var_dump((float)123.0 === (int)123.0); // Почему false? // здесь идет проверка на идентичность, а так как разные типы, то результат false
var_dump((int)0 === (int)'hello, world'); // Почему true? // если при преобразовании строки в число до первого непреобразуемого символа чисел не было, то возвращается 0