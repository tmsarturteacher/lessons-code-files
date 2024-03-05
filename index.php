<?php

// INT - целочисленный тип (4,7,9,2) - INT ID (autoincrement)

// VARCHAR(255) - текстовые данные
echo "<input />";

// TEXT - текстовый тип данных
echo "<texarea></texarea>";
echo "<input />";

// DATE - для хранения даты YYYY-MM-dd
// TIME - для хранения времени HH:MM:SS
// DATETIME - для хранения даты и времени YYYY-MM-dd HH:MM:SS
// TIMESTAMP - для хранения даты и времени до секунд, в ней хранится инф-ия о том, когда была произведена операция с данными

// FLOAT - для хранения данных с плавающей точкой. (15.56)
// BOOLEAN - логический тип данных (TRUE/FALSE, 1/0)

// DECIMAL и NUMERIC - для хранения чисел с фиксированной точностью и масштабом (0.000)

// BLOB - Бинарные файлы (изображения, звуковые файлы, pdf...)
// ENUM - перечиления (Male/Female, Муж/Жен, 1/0, qwe/gfh/jghvjh/jg)

// json_encode(); json_decode();
// JSON - {'key':'value'}


// Связи (Relations)
// Один-к-одному (One-to-one)
// Один-ко-многим (One-to-many)
// Многие-ко-многим (Many-to-many)