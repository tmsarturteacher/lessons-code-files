<?php


// preg_match
//echo "RegExp";


//$string = "cat";
//$stringBig = "Dave have a cat";
//$string2 = "Dave have a $5.00";
//$string3 = "Dave have a 50 usd";

// ^ - поиск с начала строки
//var_dump(preg_match("/^Dave/", $stringBig));

// $ - поиск в конце строки
//var_dump(preg_match("/cat$/", $stringBig));

// . один любой символ
//var_dump(preg_match("/c.t/", $string));


// поиск по символам
//var_dump(preg_match('/c[aei]t/', $stringBig));

// Инверсия поиска по символам
//var_dump(preg_match('/c[^aei]t/', $stringBig));


// - перечисления
//var_dump(preg_match("/[0-9]/", $string2));
//var_dump(preg_match("/[1234]/", $string2));
//var_dump(preg_match("/[A-zА-я]/", $string2));
//var_dump(preg_match("/[A-z]t/", $string));

// Альтернативы
//var_dump(preg_match("/cat|dog/", $stringBig));
//var_dump(preg_match("/^cat|dog$/", $stringBig));
//var_dump(preg_match("/[^(cat|dog)$]/", $stringBig)); // !

// Повторения
//var_dump(preg_match("/ca+t/", $string));


// Квантификатор {}
//var_dump(preg_match("/[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}/", "29-123-45-67"));


// Подпаттерны
//var_dump(preg_match("/a (very )+big cat/", "It was a very very big cat"));
//var_dump(preg_match("/([0-9]+)/", $string3, $match));
//var_dump($match);


// Символьный класс [: что-то :]
//var_dump(preg_match("/[0-9]]/", $string3));
//var_dump(preg_match("/[:digit:]/", $string3));

// Флаги модификаторы
//var_dump(preg_match("/dave/i", $string3));


// preg_match()
/*$newString = preg_replace('/<.*?>/', ' ', 'Hello <b>World</b>!');*/
//echo $newString;

// preg_split()
//$chunks = preg_split('{([*+/])}', '1+4/5*4', -1, PREG_SPLIT_DELIM_CAPTURE);
//var_dump($chunks);


//$chunks = preg_split('//', 'sdfsdfsdfsdf');
//var_dump($chunks);


//$date = "January 123, 2024";
//var_dump(preg_match("/(\w+) ([0-9]{1,2}), \d{4}$/i", $date));


$string = "Nssf3&f*df2";
var_dump(preg_match("/^([A-z0-9&*]{3,15})$/", $string));
















