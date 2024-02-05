<?php

//$date = time();
//echo "<br>";
//echo $date;
//echo "<br>";
//
//$total =  time() - time();
//
//echo date("Y-m-d H:i:s", time());
//
//echo "<br>";
//echo "2000-10-31T01:30:00.000-05:00";
//echo "<br>";
//echo date("Y-m-d H:i:s", strtotime("2000-10-31T01:30:00.000-05:00"));


//$array = [
//    1,2,3,4,5
//];
//
//echo $array[2];



//$array = [];
//$array[2] = "test";
//
//echo $array[2];
//
//echo "<br>";
//
//echo $array[1];
//
//$array["test"] = "value 1";
//
//print_r($array);



//$arr = array(1,2,3,4, "test" => "val1");
////$arr2 = [1,2,3,4, "test" => "val1"];
////print_r($arr);
//echo "<br>";
//
$arr[] = "val2";
//print_r($arr);



//$arr = range(1, 10, 2);
//print_r($arr);


//$arr = range("a", "z");
//print_r($arr);


$arr = range(1, 3);
//echo count($arr);
//echo "<br>";
//echo sizeof($arr);



//$pad = array_pad($arr, 7, 1);
//$pad = array_pad($arr, -7, 1);

//print_r($pad);


//foreach ($arr as $key => $value) {
//    $arr[$key] = $value + 1;
////    echo "key: {$key}, value: {$value}";
//}
//
//print_r($arr);







//$a = array_fill(3, 5, "test");
//print_r($a);



$row1 = range(1, 7);
$row2 = range(1, 5);
//
//
$multi = [$arr, $row1, $row2];
//?
//echo "<pre>";
//print_r($multi);
//echo "</pre>";
//
//echo $multi[1][2];



//foreach ($multi as $key => $array) {
//    foreach ($array as $arr) {
//        echo "Массив №{$key}, элемент: {$arr}\n";
//    }
//}


//list($a, $b, $c) = $arr;
//
//
//echo "{$a} - {$b} - {$c}";



//$newRow1 = array_slice($row1, 2, 2);
//
//print_r($row1);
//echo "<br>";
//print_r($newRow1);



//print_r(array_chunk($row1, 3));

$person = [
    "name" => "Tom",
    "age" => 35,
    "is_married" => true
];

//print_r(array_keys($persom));
//echo "<br>";
//print_r(array_values($persom));



//var_dump(array_key_exists('age', $persom));

//var_dump(isset($person['age']));

//var_dump(is_null($person['age']));



//unset($person["age"]);

//$newPerson = array_splice($person, 0, 2);
//
//var_dump($newPerson);
//var_dump($person);


//array_splice($person, count($person), 0, ["have_childs" => true]);
//var_dump($person);


//array_push($person, ["have_childs" => true]);
//array_unshift($person, "have_childs");

//unset($person['name'], $person['age']);

//extract($person);
//
//$color = "red";
//$fig = "shape";
//$array = compact("color", "fig");
//
//var_dump($array);



//array_pop($person);
//array_shift($person);

//$newArray = array_merge($person, $row1);

//$key = array_search("Tom", $person);




$string = "Hello   world! ";

$strLen = strlen($string);
$strPos = strpos($string, "world");
$substr = substr($string, 0, 7);
$replace = str_replace("world", "PHP", $string);
$strtolower = strtolower($string);
$strtoupper = strtoupper($string);
$trim = trim($string);

$arrExp = explode(" ", $string);
$stringImp = implode(" ", $arrExp);

var_dump($stringImp);
















