<?php

// phpinfo();

//function test(string $str, string $strDefault = "default", int $str2 = 0): string {
//    $a = 10;
//
//    return "str: {$str}, default: {$strDefault}, str2: {$str2}, a: {$a}";
//}
//
//$str = "test";
//
//$func = test($str, "", 1);
//
//echo $func;


//$count = 0;
//
//function increment(): void {
//    global $count;
//    $count++;
//}
//
//increment();
//increment();
//
//echo $count;



//function increment(): int
//{
//    static $count = 0;
//    return $count++;
//}
//
//for ($i=0; $i<=5; $i++) {
//    print increment();
//}



//function increment(&$num): void
//{
//    $num++;
//}
//
//function increment2($num): int
//{
//    return $num++;
//}
//
//$myNum = 2;
//increment($myNum);
//$result = increment2(2);
//echo $myNum;
//echo $result;

//$arr = [1,2,3,4];
//function test(array $arr):array
//{
//    //
//    return $arr;
//}



//function sum($a, ...$numbers) {
//    echo $numbers['str'] . "<br>";
//    $acc = 0;
//    foreach ($numbers as $n) {
//        $acc += $n;
//    }
//    return $acc;
//}
//
//echo sum(1, 2, 3, str: 4);


//function test($a, $b, $c,) {
//    // тело функции
//}

//function calculate($numb1, $numb2)
//{
//    return $numb1 + $numb2;
//}
//
//echo calculate(numb1: 1, numb2: 2);

// Анонимные функции == замыкания
// Функция обратного вызова == callback
// Встроеные - array_map, array_filter ..

//function square($a) {
//    return $a * $a;
//}
//
//$arr = [1,2,3,4,5];
//
//$newArr = array_map("square", $arr);
//
//print_r($newArr);


//function total_array($callback, $array) {
//    foreach ($array as $val) {
//        $callback($val);
//    }
//}
//
//function values($value) {
//    $result = $value * $value;
//    echo $result . " ";
//}
//
//$arr = [1,2,3,4,5];
//total_array("values", $arr);

// Функции высшего порядка
//function make($x) {
//    return function($y) use ($x) {
//        return $y + $x;
//    };
//}

//$make = make(5);
//$result1 = $make(3);

//$qwe = function() {
//    return 1;
//};
//
//echo $qwe();



//$total = fn($a, $b) => $a + $b;
//echo $total(2,3);
//
//$a = 5;
//$b = 4;
//$total = function () use ($a, $b) {
//    return $a + $b;
//};
//
//echo $total();


//$arr = [1,2,3,4,5];
//$square = array_map(fn($n) => $n * $n, $arr);
//
//print_r($square);



// Математические функции
//echo abs(-0.7) . "\n";
//echo max(12.34, 15, 56.23) . "\n";
//echo min(12.34, 15, 56.23) . "\n";
//echo ceil(4.3) . "\n";
//echo ceil(9.999) . "\n";
//echo floor(4.3) . "\n";
//echo floor(9.999) . "\n";
//var_dump(is_infinite(9.999)) . "\n";
//var_dump(is_nan(9.999)) . "\n";
//echo pow(9, 2) . "\n";
//echo round(9.34) . "\n";
//echo round(9.54) . "\n";
//echo round(9.5467, 3) . "\n";



// Дата и время
//echo date("d-m-Y H:i:s") . "<br>";
//echo time() . "<br>";
//echo mktime(12, 0, 0, 1, 22, 2023) . "<br>";
//var_dump(date_create('2023-10-10')); // Datetime
//
//var_dump(date_diff(date_create('2023-10-10'), date_create('2023-01-10')));
//
//$date = date_create(date("d-m-Y H:i:s"));
//date_timezone_set($date, new DateTimeZone("Europe/Minsk"));
//
//var_dump($date);





function test(&$num) {
    $num[2] += 1;
}

$myNum = [1,2,3,4,5]; // 5mb
$myNum_copy = [1,2,3,4,5]; // 5mb

test($myNum);

var_dump($myNum);



function test2($arr) {

}


$arr2 = test2($myNum);







